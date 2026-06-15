const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const prefix = require('gulp-autoprefixer');
const minify = require('gulp-clean-css');
const uglify = require('gulp-uglify');

// Compile, prefix, and minify SCSS
function compileScss() {
  return src('src/scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(prefix('last 2 versions'))
    .pipe(minify())
    .pipe(dest('dist/css'));
}

// Optimize and minify JS
function compileJs() {
  return src('src/js/**/*.js')
    .pipe(uglify())
    .pipe(dest('dist/js'));
}

// Watcher Task to look for changes
function watchTask() {
  watch('src/scss/**/*.scss', compileScss);
  watch('src/js/**/*.js', compileJs);
}

// Default Gulp command
exports.default = series(
  compileScss,
  compileJs,
  watchTask
);
