/**
 * Created by master on 24.03.2017.
 */
'use strict';

var gulp = require('gulp'),
    watch = require('gulp-watch'),
    uglify = require('gulp-uglify'),
    sourceMaps = require('gulp-sourcemaps'),
    cssmin = require('gulp-minify-css'),
    imageMin = require('gulp-imagemin'),
    pngQuant = require('imagemin-pngquant'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer');


var path = {
    // куда
    build: {
        js: 'assets/js/dist/',
        img: 'assets/images/',
        css: 'assets/css/'
    },

    src: {
        js: 'assets/js/*.js',
        img: 'assets/images/*.*',
        style: 'assets/scss/common.scss'
    }
};

var config = {

    server: {
      baseDir: "/assets/"
    },
    tunnel: true,
    host: 'localhost',
    port: 9000,
    logPrefix: "Frontend_Devil"
};

gulp.task('js:build', function() {

    gulp.src(path.src.js)
        .pipe(sourceMaps.init())
        .pipe(uglify())
        .pipe(sourceMaps.write())
        .pipe(gulp.dest(path.build.js))
        .pipe(reload({stream: true}))

});

gulp.task('style:build', function() {

    gulp.src(path.src.style)
        .pipe(sourceMaps.init())
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(cssmin())
        .pipe(sourceMaps.write())
        .pipe(gulp.dest(path.build.css))
        .pipe(reload({stream: true}))

});

gulp.task('image:build', function() {
   gulp.src(path.src.img)
       .pipe(imageMin({
           progressive: true,
           svgoPlugins: [{removeViewBox: false}],
           use: [pngQuant()],
           interplaced: true
       }))
       .pipe(gulp.dest(path.build.img))
       .pipe(reload({stream: true}))
});