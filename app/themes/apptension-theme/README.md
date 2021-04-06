# WP Starter Theme with Sass + Webpack
This theme is a starter theme for WordPress that utilises modern development workflows and tools, like SASS, Webpack, Babel, Browsersync.

## <del>Install via WordPress</del> <small>(not yet published on WordPress Themes)</small>
1. <del>In your admin panel, go to `Appearance -> Themes` and click the `Add New` button</del>
2. <del>Type in `WP Starter Theme with Sass + Webpack` in the search form and press the `Enter` key on your keyboard</del>
3. <del>Click on the `Activate` button to use your new theme right away</del>

## Install via Github
1. In Terminal/CMD, from the WordPress Themes folder `/wp-content/themes/`, run `git clone https://github.com/dominicfallows/WP-Starter-Theme-Sass-Webpack.git`
2. In your admin panel, go to `Appearance -> Themes` click `Activate` on the `WP Starter Theme with Sass + Webpack` theme

## Developing with the theme
1. Make sure you have [Node + NPM](https://nodejs.org/en/download/) and [Yarn Package Manager](https://yarnpkg.com/lang/en/docs/install/) installed globally
2. Open the `src` folder of the theme in your terminal/console
3. Run `yarn install`
4. Update the `$dev_hostname` value in `header.php` to your local development hostname
5. Run `yarn start` - to start the Webpack development scripts
6. Edit files in `src` and WP PHP files in the theme, the browser will reload (with browser-sync) as you make changes

## Production build of the theme
`yarn start` from above creates uncompressed (un-minified) development versions of the CSS and JS files. Before pushing your files to a production environment you should create production ready versions. To do this: 

1. Run `yarn build`
2. Comment out the `wp_enqueue_script` and `wp_enqueue_style` function lines under the *Development styles and scripts* comment in `functions/enqueue.php`
3. Un-comment the `wp_enqueue_script` and `wp_enqueue_style` function lines under the *Production styles and scripts* lines in `functions/enqueue.php`

## License
[MIT](https://opensource.org/licenses/MIT)

## Copyright
WP Starter Theme with Sass + Webpack, Copyright 2017 Dominic Fallows, 
Distributed under the terms of the MIT license
