# Zoepix Boilerplate

## Initial set-up
- Clone the Zoepix git repo.
- Remove non-relevant themes from `wp-content/themes` and rename the `zoepix` theme with your new project name.
- In your root directory, add new scripts in `package.json` that point towards your new project.
- Make sure you are still in the root directory and run `npm install`. When the node packages have installed run `npm run build-{{ project }}` to generate the `style.css` source file, and run `composer install` to generate the `composer.lock`.
- Add an `.env` file to your root directory and add `WP_SITEURL='http://localhost:8888/zoepix/wp'`.
- Make sure there isn't a `wp-config.php` file in your root folder and run through the [WordPress configuration steps](https://www.youtube.com/watch?v=OriRDlUbAFg&t=1116s&ab_channel=FounderCopilot).
- Move `wp-config.php` from `wp` into your root directory and add this below line 84:
```
/* Add any custom values between this line and the "stop editing" line. */
require_once 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load()

define('WP_SITEURL', getenv('WP_SITEURL'));

/* That's all, stop editing! Happy publishing. */
define('CONTENT_DIR', '/wp-content');
define('WP_CONTENT_DIR', dirname(__FILE__) . CONTENT_DIR);

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/wp' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
```

## Update project specifics
- In `webpack.config.js` update path names.
- In project folder update project name and description in `composer.json` and run `composer.json`.
- In `functions.php` update the global variable names.
- Update `README.md`.
- Add relevant `screenshot.png`.
- Update theme desription in `style.css`.

## Initialise git repo
- `git init`
- `git commit -m "Initial commit"`
- `git branch -M main`
- `git remote add origin https://github.com/zoet24/{{ project }}.git`
- `git push -u origin main`


## Useful articles
- [Timber starter theme - Via Studio](https://via.studio/journal/building-a-wordpress-theme-with-timber)
- [Setting up FontAwesome with Wordpress](https://fontawesome.com/v5/docs/web/use-with/wordpress/install-manually)