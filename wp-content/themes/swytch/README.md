# Swytch - Fullstack WordPress developer task

Custom WordPress theme that displays the 50 most popular accessories from the Swytch dev API. Design based on [Figma wireframes](https://www.figma.com/file/q0M01nE6AGo7aIB2OaVfyn/Full-Stack-WordPress-Developer---task-design---Zoe?node-id=14%3A481&t=josd0ns2wQJop1Zs-0) provided by Swytch.

## Initial set-up
These instructions explain how to initialise the Swytch theme in an existing WordPress installation.
1. Download the zip folder for this theme. Move the `composer.json`, `package.json`, `postcss.config.js` and `tailwind.config.js` from the zip folder root directory into your project root directory of your WordPress installation. Move the `wp-content/themes/swytch` folder to the `wp-content/themes` section of your WordPress installation. 
2. Add a `.env` file to your root directory and make sure this is included in your `.gitignore` file. Define your API_USER and API_KEY variables.
3. Add the following code to your `wp-config.php` file under the custom values section (line 84):

```
require_once 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

define('API_USER', getenv('API_USER'));
define('API_KEY', getenv('API_KEY'));
```

4. Make sure you are still in the root directory and run `npm install`. When the node packages have installed run `npm run build` to generate the `style.css` source file, and run `composer install` to generate the `composer.lock` file in your root directory.
5. Change your directory to the theme folder (you can do this by running `cd wp-content/themes/swytch`) and run `composer install` to generate another `composer.lock` file.
6. Log in to your WordPress backend, navigate to Appearance > Themes and make sure the Swytch theme is activated.
7. Navigate to Pages > Add New and change the page template to 'Popular accessories'. You don't need to add any additional content to the page, but the **_template must be set correctly_** as this is currently the only theme template that generates any content. Publish the page and you should be able to browse through a list of the top 50 most popular accessories generated from the Swytch dev API.