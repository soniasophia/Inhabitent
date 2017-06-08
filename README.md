# Project 5: Inhabitent

![Inhabitent](https://preview.ibb.co/fB4ETF/inhabitent_screenshot.png)

Inhabitent Camping Supply Co. website (Desktop)

## Project Objective
- Create a dynamic, multi-page website with a blog for a camping supply company called Inhabitent Camping Supply Co. using WordPress as a content management system.
- Create custom post types and custom taxonomies.

## Technologies Used
- Visual Studio Code for Mac (https://code.visualstudio.com/)
- Git and Git Bash
- jQuery (https://jquery.com/)
- Font Awesome (http://fontawesome.io/)
- Font Squirrel (https://www.fontsquirrel.com/)
- WordPress Theme Validator
- WordPress CMS
- Generate WP (https://generatewp.com/)
- Google Chrome Developer Tools
- Gulp (autoprefixer, cssnano, eslint, notify, plumber, rename, sass, uglify, browsersync)
- Sass

## Personal Learnings
- Learned how to create custom post types and custom taxonomies in WordPress.
- Learned about the main loop and queries that WordPress uses to retrieve and display posts and how to add to and/or modify them.
- Learned about the various WordPress template tags and hooks (actions and filters).
- Learned how to build a static front page (home page) and retrieve different post types to be displayed dynamically.

## Installation

### Install the dev dependencies

Next you'll need to run `npm install` **inside your theme directory** next to install the node modules you'll need for Gulp, etc.

### Update the proxy in `gulpfile.js`

Lastly, be sure to update your `gulpfile.js` with the appropriate URL for the Browsersync proxy (so change `inhabitent.dev` to the appropriate localhost URL).