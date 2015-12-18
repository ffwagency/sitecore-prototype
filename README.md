# FFW Sitecore prototype
# By [FFW](http://www.ffwagency.com)

FFW Sitecore prototype is a base project for creating prototypes for sites developed in Sitecore at FFW.

This README will continually be updated to contain information about getting started with
the project.


## Getting started

### Node & NPM

To get started with a new project, you must make sure you have installed both [Node.js](http://nodejs.org/) and [Node Package Manager (npm)](https://www.npmjs.org/)
on your system.

Once both are installed, open up the project folder in Terminal and simply run the command:

	npm install

This will install all the development dependencies listed in the package.json file. Once all these are installed, you are ready to get started with Gulp.

### Gulp.js

[Gulp.js]([http://gulpjs.com/) is our task runner of choice. It is Gulp that does a lot of the heavy lifting for you when creating prototypes - such as compiling .scss and reloading the browser.

To use Gulp, you first have to install it globally via the Terminal:

	npm install -g gulp

Once Gulp is installed, you are ready to load up the prototype.

To make Gulp watch your .scss-files and compile them when they change, and automatically refresh the browser using BrowserSync, whenever your .css, .js or .php files change, open up the project folder in Terminal and use this command:

	gulp watch