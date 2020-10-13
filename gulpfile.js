var gulp = require('gulp');
var sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');

sass.compiler = require('node-sass');

gulp.task('sass', function () {
  return gulp.src('./sass/style.scss')
    .pipe(sass({
      includePaths: require("node-normalize-scss").includePaths
    }))
    .pipe(gulp.dest('./'));
});

gulp.task('sass:watch', function () {
  gulp.watch('./sass/**/*.scss', gulp.series('sass'));
});

exports.default = () => (
    gulp.src('style.css')
        .pipe(autoprefixer({
            cascade: false
        }))
        .pipe(gulp.dest('./'))
);