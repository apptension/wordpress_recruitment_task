#Recruitment task

In this repository you will find Docker image with WordPress based project. 
Your task is to clone the project repository and set it up using instructions from Readme.md file. 
Once you have it running please write html code that will display the list of all blog entries on a homepage. 
The list should contain the title, publication date, tags and author information. 
Lastly, please write logic for List javascript module that will make list elements activated (changed background, bold text) on click event.


#Technology
Below is a list of used technology in this project
* [TWIG](https://twig.symfony.com/doc/3.x/) template engine for PHP
* TypeScript
* SCSS

#Setup

1. Copy `local.env.example` file and paste into root directory under the `local.env` name.
2. Go to `src` folder and install project dependencies via `yarn` command.
3. In root directory run Docker by `docker-compose up` command (Please ensure you are using latest Docker). Backend with CMS is available at `localhost:8080`.
4. In `src` folder use `yarn start` command which will run project at `localhost:3000`.

#Project information

Starting point for this boilerplate is index.php file in apptension-theme folder. Over there is a mechanism which choose which
 Twig template will be used. It's based on the WordPress checking system of which template is generated. Over here is also a
  place to pass a data to a certain template. 


##Functions folder
Functions folder located under `app/themes/apptension-theme/functions`.
###rest-api-routes.php
Register new route for WP REST API endpoint which is used in search preview. This is a place for defining what post type will
 be used or what data the endpoint will return. 
###nav.php
Place for registering location for menus. Currently defined Primary Navigation is a main menu in the navigation bar. In admin
 dashboard under `Appearance -> Menus` you can choose menu which will be show here. 
###sidebar.php
Place for registering sidebars location. One is registered in the footer section. To add some content on that go to admin
 dashboard in `Appearance -> Widgets` section. 
###post types
Custom post types registration. `Job` post type is defined over here as a ready to use sample. It contains all possible fields
 to use. 
###twig.php
Contain WordPress functions which can be called in twig template. Twig will not allow calling a function in template until one
 has been defined.
###plugins
`install-entrypoint.sh` file define plugins which will be installed as a starting point in certain project. Plugins come from
 [WordPress repository](https://pl.wordpress.org/plugins) and to install some just pass a plugin slug. More information at [WP
 -CLI commands](https://developer.wordpress.org/cli/commands/).  