var gulp = require('gulp');

var rename = require('gulp-rename');
var runSequence = require('run-sequence');
var del = require('del');

var livereload = require('gulp-livereload');

gulp.task('sass', function() {
    var sass = require('gulp-sass');
    var cleanCSS = require('gulp-clean-css');
    var mmq = require('gulp-merge-media-queries');

    return gulp.src('sass/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(rename({suffix: '.min'}))
        .pipe(mmq({log: true}))
        .pipe(cleanCSS())
        .pipe(gulp.dest('css/'));
        //.pipe(livereload());
});

gulp.task('watch', function() {

    //livereload.listen();
    gulp.watch('sass/*.scss', ['sass']);

});

gulp.task('default', ['build']);