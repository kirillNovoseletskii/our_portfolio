const gulp = require('gulp');
const sass = require('gulp-sass');
const watch = require('gulp-watch');
 function style() {
  return (
      gulp
          .src("./styles/sass/index.scss")

  
          .pipe(sass())
          .on("error", sass.logError)

          .pipe(gulp.dest("./styles/css/index.css"))
          );
        }
        function watchFiles() {
          gulp.watch("./styles/sass/index.scss", style);
        }
exports.style = style;
exports.watchFiles = watchFiles;