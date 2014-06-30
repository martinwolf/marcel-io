var gulp         = require('gulp'),
    sass         = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    rename       = require('gulp-rename'),
    cssmin       = require('gulp-cssmin'),
    jshint       = require('gulp-jshint'),
    concat       = require('gulp-concat'),
    uglify       = require('gulp-uglify'),
    addsrc       = require('gulp-add-src'),
    svgstore     = require('gulp-svgstore'),
    svgmin       = require('gulp-svgmin'),
    svgsprites   = require('gulp-svg-sprites'),
    watch        = require('gulp-watch'),
    livereload   = require('gulp-livereload'),
    notify       = require('gulp-notify');

var svg = svgsprites.svg;


gulp.task('sass', function() {
    gulp.src('./scss/style.scss')
        .pipe(sass({
            onError: function(err) {
                         return notify().write(err);
                     }
        }))
        .pipe(autoprefixer("last 2 version", "ie 9"))
        .pipe(cssmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('./dist/css'));
});


gulp.task('js', function() {
    gulp.src('./js/scripts.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'))
        .pipe(addsrc('./js/*/*.js'))
        .pipe(concat('scripts.min.js'))
        //.pipe(uglify())
        .pipe(gulp.dest('./dist/js'));
});


gulp.task('svgmin', function() {
    gulp.src('./img/svg/*.svg')
        .pipe(svgmin())
        .pipe(gulp.dest('./dist/img/'));
});


gulp.task('svgshapes', function() {
    gulp.src('./img/svgshapes/*.svg')
        .pipe(svgmin())
        .pipe(svgstore({fileName: 'shapes.svg', prefix: 'shape-', onlySvg: true}))
        .pipe(gulp.dest('./dist/img/'));
});


var spriteconfig = {
    className: ".shape--%f",
    generatePreview: false
};

gulp.task('svgsprites', function() {
    gulp.src('./img/svgshapes/*.svg')
        .pipe(svg(spriteconfig))
        .pipe(gulp.dest('./dist/img/'));
});


gulp.task('watch', function() {
    livereload.listen();

    gulp.watch('./scss/**/*.scss', ['sass']).on('change', livereload.changed);
    gulp.watch('./js/**/*.js', ['js']).on('change', livereload.changed);
    gulp.watch('./**/*.php').on('change', livereload.changed);
    gulp.watch('./**/*.html').on('change', livereload.changed);
});


gulp.task('build', ['sass', 'js']);
