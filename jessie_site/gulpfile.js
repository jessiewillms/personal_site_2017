// "use strict";

// Include gulp
var gulp = require('gulp');

// npm install gulp npm install gulp-notify gulp-jshint gulp-sass gulp-concat gulp-uglify gulp-rename gulp-autoprefixer
var sass = require('gulp-sass');

// Compile Our Sass
gulp.task('css-task', function() {
  return gulp.src('styles/*.scss')
    .pipe(sass({
        'sourcemap=none': true,
        errLogToConsole: true
    }))
    .on("error", notify.onError(function(error) {
        return "Message to the notifier: " + error.message;
    }))
    .pipe(sass().on('error', sass.logError))
    // .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1'))
    .pipe(gulp.dest('styles'))
    .pipe(notify('You are good at programming and have nice hair!'))
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('styles/*.scss', ['css-task']);
});

// Default Task
gulp.task('default', ['css-task', 'watch']);