// JavaScript Document
var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var sass        = require('gulp-sass');

// Static Server + watching scss/html files
gulp.task('serve', ['sass'], function() {

    browserSync.init({
        //server: "./app"
        proxy:"http://localhost/alumni/"
    });

    gulp.watch("./sara/scss/*.scss", ['sass']);
    gulp.watch("./sara/*.php").on('change', browserSync.reload);
     gulp.watch("./sara/js/*.js").on('change', browserSync.reload);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src("./sara/scss/*.scss")
        .pipe(sass())
        .pipe(gulp.dest("./sara"))
        .pipe(browserSync.stream());
});

gulp.task('default', ['serve']);






