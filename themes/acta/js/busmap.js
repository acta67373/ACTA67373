window.onload = loadMap;

/**
 * Binds a click event to harvest lat and long, only call this in the inspector
 */
function bindClick(){
  NuBus.map.on('click', function(e) {alert("Lat, Lon : " + e.latlng.lat + ", " + e.latlng.lng)});
}

/**
 * Loads the map and shows IKEA
 */
function loadMap(){
  "use strict";
  window.NuBus = {};
  if(document.getElementById('map') != null){
    // create a map in the "map" div, set the view to a given place and zoom
    NuBus.map = L.map('map', {center: [40.45, -80.17], zoom: 14, maxZoom: 18});

    // add an OpenStreetMap tile layer
    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'}).addTo(NuBus.map);

    // Show IKEA
    NuBus.ikea= L.polygon([
      [40.4525772141721, -80.16837555171152],
      [40.45240168718388, -80.16907292605539],
      [40.451348515626144, -80.16861695052286],
      [40.451475060367954, -80.16811269522806],
      [40.4511607391185, -80.16797858477732],
      [40.4514056648939, -80.16708809138437],
      [40.452144518908035, -80.16740995646616]
    ], {color: '#0000ff',fillColor: '#0000ff',fillOpacity: 1});
    NuBus.ikea.bindPopup('<strong>IKEA</strong> (ACTA bus layover area)');
    NuBus.ikea.addTo(NuBus.map);

    // Get ready to make the bus layer
    NuBus.markers = new L.FeatureGroup();
    NuBus.markerids = {acta: [], paac: []};
    NuBus.map.addLayer(NuBus.markers);

    // Load the stops
    fetchStops();

    // Fetch the buses at once!
    fetchBuses();
  }
}

/**
 * Get bus stop locations
 */
function fetchStops(){
  "use strict";
  NuBus.bustops = new L.FeatureGroup();
  var xmlHttpReq = false;

  // Webkit(Chrome/Safari), Gecko(Mozilla), IE >= 7
  if (window.XMLHttpRequest) {
    xmlHttpReq = new XMLHttpRequest();
  }
  // IE < 7 (who uses that anyway...)
  else if (window.ActiveXObject) {
    xmlHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlHttpReq.open('POST', '/mapper/', true);
  xmlHttpReq.setRequestHeader('Content-Type', 'application/json');
  xmlHttpReq.send('{"request":"stops"}');

  xmlHttpReq.onreadystatechange = function() {
    if (xmlHttpReq.readyState == 4) {
      // Show response when server responds
      var response = xmlHttpReq.responseText;
      NuBus.stops = null;
      NuBus.stops = JSON.parse(response);
      if (typeof(NuBus.stops.acta == 'object')){
        var num = NuBus.stops.acta.length;
        for (var i = 0; i < num; i++){
          var actabus = L.divIcon({className: 'acta-bus busicon', iconSize: L.point(10,10), html: '<img src="/wp-content/themes/acta/images/map-acta-stop.svg" alt="ACTA Shuttle Stop">'});
          var marker = L.marker([NuBus.stops.acta[i].lat, NuBus.stops.acta[i].lon], {icon: actabus});
          marker.bindPopup('ACTA stop: <strong>' + NuBus.stops.acta[i].name + '</strong>');
          NuBus.bustops.addLayer(marker);
        }
      }
      if (typeof(NuBus.stops.paac == 'object')){
        var num = NuBus.stops.paac.length;
        for (var i = 0; i < num; i++){
          var paacbus = L.divIcon({className: 'paac-bus busicon', iconSize: L.point(10,10), html: '<img src="/wp-content/themes/acta/images/map-pat-stop.svg" alt="PAT Bus Stop">'});
          var marker = L.marker([NuBus.stops.paac[i].lat, NuBus.stops.paac[i].lon], {icon: paacbus});
          marker.bindPopup('PortAuthority stop: <br /><strong>' + NuBus.stops.paac[i].name + '</strong><br />' + NuBus.stops.paac[i].description);
          NuBus.bustops.addLayer(marker);
        }
      }
      NuBus.map.addLayer(NuBus.bustops);
    }
  }
}

/**
 * Get bus location information
 */
function fetchBuses(){
  "use strict";
  var xmlHttpReq = false;

  // Webkit(Chrome/Safari), Gecko(Mozilla), IE >= 7
  if (window.XMLHttpRequest) {
    xmlHttpReq = new XMLHttpRequest();
  }
  // IE < 7 (who uses that anyway...)
  else if (window.ActiveXObject) {
    xmlHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlHttpReq.open('POST', '/mapper/', true);
  xmlHttpReq.setRequestHeader('Content-Type', 'application/json');
  xmlHttpReq.send('{"request":"buses"}');

  xmlHttpReq.onreadystatechange = function() {
    if (xmlHttpReq.readyState == 4) {
      // Prepare response when server responds
      var response = xmlHttpReq.responseText;
      NuBus.buses = null;
      var rightnow = Date.now();
      NuBus.buses = JSON.parse(response);

      // Process ACTA Bus updates
      if (typeof(NuBus.buses.acta == 'object')){
        var num = NuBus.buses.acta.length;
        for (var i = 0; i < num; i++){
          var id = NuBus.buses.acta[i].vid;
          var actabus = L.divIcon({className: 'acta-bus busicon', iconSize: L.point(30,30), html: '<svg x="0" y="0" width="30" height="30"><g transform="rotate(' + NuBus.buses.acta[i].heading + ' 15 15)"><rect class="wheel" x="6" y="3" width="3" height="5" /><rect class="wheel" x="21" y="3" width="3" height="5" /><rect class="wheel" x="6" y="15" width="3" height="5" /><rect class="wheel" x="21" y="15" width="3" height="5" /><rect class="vehicle" x="10" y="1" width="10" height="25" /><polygon class="arrow" points="15,3 11,7 19,7" /></g></svg>'});
          if (typeof NuBus.markerids.acta[id] == 'undefined'){
            NuBus.markerids.acta[id] = L.marker([NuBus.buses.acta[i].lat, NuBus.buses.acta[i].lon],{icon: actabus});
            NuBus.markerids.acta[id].setZIndexOffset(100);
            NuBus.markers.addLayer(NuBus.markerids.acta[id]);
          }
          else{
            NuBus.markerids.acta[id].closePopup();
            NuBus.markerids.acta[id].unbindPopup();
          }
          NuBus.markerids.acta[id].bindPopup('ACTA bus ' + NuBus.buses.acta[i].vid + '<br /><em>' + NuBus.buses.acta[i].time + '</em>');
          NuBus.markerids.acta[id].setIcon(actabus);
          NuBus.markerids.acta[id].setLatLng([NuBus.buses.acta[i].lat, NuBus.buses.acta[i].lon]);
          NuBus.markerids.acta[id].updated = rightnow;
        }
      }

      // Process PATransit updates
      if (typeof(NuBus.buses.paac == 'object')){
        var num = NuBus.buses.paac.length;
        for (var i = 0; i < num; i++){
          var id = NuBus.buses.paac[i].vid;
          var paacbus = L.divIcon({className: 'paac-bus busicon', iconSize: L.point(30,30), html: '<svg x="0" y="0" width="30" height="30"><g transform="rotate(' + NuBus.buses.paac[i].heading + ' 15 15)"><rect class="wheel" x="6" y="3" width="3" height="5" /><rect class="wheel" x="21" y="3" width="3" height="5" /><rect class="wheel" x="6" y="15" width="3" height="5" /><rect class="wheel" x="21" y="15" width="3" height="5" /><rect class="vehicle" x="10" y="1" width="10" height="25" /><polygon class="arrow" points="15,3 11,7 19,7" /></g></svg>'});
          if (typeof NuBus.markerids.paac[id] == 'undefined'){
            NuBus.markerids.paac[id] = L.marker([NuBus.buses.paac[i].lat, NuBus.buses.paac[i].lon],{icon: paacbus});
            NuBus.markerids.paac[id].setZIndexOffset(100);
            NuBus.markers.addLayer(NuBus.markerids.paac[id]);
          }
          else{
            NuBus.markerids.paac[id].closePopup();
            NuBus.markerids.paac[id].unbindPopup();
          }
          NuBus.markerids.paac[id].bindPopup('PortAuthority <strong>' + NuBus.buses.paac[i].rt + '</strong> to <em>' + NuBus.buses.paac[i].des + '</em> (' + NuBus.buses.paac[i].vid + ') <br /><em>' + NuBus.buses.paac[1].time + '</em>');
          NuBus.markerids.paac[id].setIcon(paacbus);
          NuBus.markerids.paac[id].setLatLng([NuBus.buses.paac[i].lat, NuBus.buses.paac[i].lon]);
          NuBus.markerids.paac[id].updated = rightnow;
        }
      }

      // Delete stale buses
      for (var i in NuBus.markerids.acta){
        if (NuBus.markerids.acta[i].updated < rightnow - 5000){
          NuBus.map.removeLayer(NuBus.markerids.acta[i]);
          delete(NuBus.markerids.acta[i]);
        }
      }
      for (var i in NuBus.markerids.paac){
        if (NuBus.markerids.paac[i].updated < rightnow - 5000){
          NuBus.map.removeLayer(NuBus.markerids.paac[i]);
          delete(NuBus.markerids.paac[i]);
        }
      }

      // Continue fetching buses!
      window.setTimeout(fetchBuses, 5000);
    }
  }
}

