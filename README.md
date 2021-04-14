# Recruitment task

In this repository you will find Docker image with WordPress based project.

1. First of all, you need to clone the project repository and set it up using [instructions](#setup) from README.md file.
2. Once you have it running please write code that will display the list of all blog entries on a homepage.
3. The list should contain the title, publication date, tags and author information.
4. Lastly, please write logic in TypeScript that will make list elements activated (changed background, bold text) on click event.

## Setup

1. Copy `local.env.example` file and paste into root directory under the `local.env` name.
2. Go to `src` folder and install project dependencies via `yarn` command.
3. Create external docker volume `docker volume create --name=wp-boilerplate-db`
4. In root directory run Docker by `docker-compose up` command (Please ensure you are using latest Docker). Backend with CMS is available at `localhost:8080`.
5. In `src` folder use `yarn start` command which will run project at `localhost:3000`.

## Project information

### Technology

Below is a list of used technology in this project

- WordPress
- TypeScript
- SCSS

### Functions folder

Functions folder located under `app/themes/apptension-theme/functions`.

`rest-api-routes.php`

Register new route for WP REST API endpoint which is used in search preview. This is a place for defining what post type will be used or what data the endpoint will return.

`nav.php`

Place for registering location for menus. Currently defined Primary Navigation is a main menu in the navigation bar. In admin dashboard under `Appearance -> Menus` you can choose menu which will be show here.

### Plugins

`install-entrypoint.sh` file define plugins which will be installed as a starting point in certain project. Plugins come from
[WordPress repository](https://pl.wordpress.org/plugins) and to install some just pass a plugin slug. More information at [WP
-CLI commands](https://developer.wordpress.org/cli/commands/).
