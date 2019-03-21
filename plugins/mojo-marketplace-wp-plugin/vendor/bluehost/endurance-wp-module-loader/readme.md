# Endurance WordPress Module Loader
A component included in the Mojo Marketplace WordPress plugin which allows modules to be registered via code and enabled or disabled by users.

## Registering a Module
An Endurance module is very similar to a WordPress plugin in that you still use the normal WordPress hooks to integrate with WordPress. The primary difference is that an Endurance module registers itself with the [Mojo Marketplace WordPress plugin](https://github.com/mojoness/mojo-marketplace-wp-plugin) and can potentially be enabled/disabled from within WordPress or from the Bluehost dashboard.

Registering a new module is as simple as calling the `eig_register_module()` function. This function takes an array of arguments:

- **name** (required): The internal name used to reference the module. Similar to the internal name used for custom post types.
- **label** (required): The module label shown to end users. This should be internationalized.
- **callback** (required): The callback used to load the module when it is active.
- **isActive** (optional): The default state of the module on a fresh plugin installation. Defaults to false (inactive).
- **isHidden** (optional): Whether to show the plugin toggle in the admin interface. Defaults to false.

All registered modules are loaded on the `init` hook with a priority of 10. Therefore, any calls to `eig_register_module()` should be made before then. The best hook to use is the `after_setup_theme` hook.  The module's registered callback function is only run if the module is enabled by the user or is set to default to an active state.

The [Spam Prevention module bootstrap.php file](https://github.com/bluehost/endurance-wp-module-spam-prevention/blob/master/bootstrap.php) is a great example of how to register a module.

Internal modules used within the Mojo Marketplace WordPress plugin should live in their own GitHub repository and have a [bootstrap.php](https://github.com/bluehost/endurance-wp-module-spam-prevention/blob/master/bootstrap.php) file that handles the module registration and a [composer.json file](https://github.com/bluehost/endurance-wp-module-spam-prevention/blob/master/composer.json) that autoloads the bootstrap.php file. Internal modules are loaded into the Mojo Marketplace WordPress plugin via Composer.