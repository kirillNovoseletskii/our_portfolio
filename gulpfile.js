const gulp = require('gulp');
const sass = require('gulp-sass');
const watch = require('gulp-watch');
const sourcemaps = require('gulp-sourcemaps');
 function style() {
  return (
      gulp
          .src("/sass/*.sass")

  
          .pipe(sass())
          .on("error", sass.logError)

          .pipe(gulp.dest("/styles/*.css"))
          );
        }
        function watchFiles() {
          gulp.watch("/sass/*.sass", style);
        }
exports.style = style;
exports.watchFiles = watchFiles;