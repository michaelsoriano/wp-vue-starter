# wp-vue-starter

A basic WordPress (starter) theme that uses VueJS as the front-end rendering framework. Theme templates are Vue components and supports the loop, home, page, single, search, 404, paging and comments. Looks like a traditional "blog" and "Bootstrap" - which is serves as a good starting point for many projects.

More information can be found in this post: http://michaelsoriano.com/wordpress-starter-theme-using-vuejs/

## USES THE FOLLOWING

- vuejs
- vue-router
- axios
- bootstrap 4 (css) 


## EDIT CSS DIRECTLY

- open /css/dist/main.css
- delete sourceMappingURL=main.css.map at the bottom of the file


## TO EDIT CSS USING SASS

- npm init
- npm i -g gulp-cli
- npm i -D gulp gulp-sass gulp-sourcemaps gulp-clean-css
- gulp watch
- edit /css/src/main.scss

## TO EDIT THE JAVASCRIPT

- open /js/main.js

## ROADMAP

- Pagination - complete
- Search - complete
- 404 - complete
- Comment Form - complete
- Archive pages: tag, category
- Header Menu - complete
