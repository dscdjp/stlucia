import gulp from 'gulp';
import browserify from 'browserify';
import babelRegister from 'babel-register';
import babelify from 'babelify';
import watchify from 'watchify';
import browserSync from 'browser-sync';
import pngquant from "imagemin-pngquant";
import mozjpeg from 'imagemin-mozjpeg';

import gulpLoadPlugins from 'gulp-load-plugins';
const $ = gulpLoadPlugins();

// html
gulp.task('html', ()=>{
  gulp.src(['./**/*.+(html|php)'])
  .pipe($.plumber({
    handleError: function(err) {
      console.log(err);
      this.emit('end');
    }
  }));
});

// sass
gulp.task('sass', () => {
  gulp.src(['src/scss/**/*.scss','!src/scss/**/_*.scss'])
  .pipe($.plumber({
    handleError: function(err) {
      console.log(err);
      this.emit('end');
    }
  }))
  .pipe($.sass())
  .pipe($.pleeease({
      sass: true
  }))
  .pipe($.rename({
    suffix: '.min',
    extname: '.css'
  }))
  .pipe(gulp.dest('dest/css'));
});

// js
gulp.task('js', () => {
  gulp.src(['src/js/**/*.js','!src/js/**/_*.js'])
    .pipe($.plumber({
    handleError: function (err) {
      console.log(err);
      this.emit('end');
    }
  }))
  .pipe($.browserify({
    transform: ['babelify']
  }))
  .pipe($.uglify())
  .pipe($.rename({
    suffix: '.min'
  }))
  .pipe(gulp.dest('dest/js'));
});

// image
gulp.task('image', () => {
  gulp.src(['src/img/**/*.{png,jpg,gif,svg}'])
    .pipe($.plumber({
    handleError: function (err) {
      console.log(err);
      this.emit('end');
    }
  }))
  .pipe($.imagemin([
    pngquant({
      quality: '65-80',
      speed: 1,
      floyd:0
    }),
    $.imagemin.jpegtran({
      quality:85,
      progressive: true
    }),
    $.imagemin.svgo(),
    $.imagemin.optipng(),
    $.imagemin.gifsicle()
  ]))
  .pipe(gulp.dest('dest/img'));
});


// movie
gulp.task('movie', () => {
  gulp.src(['src/mov/**/*'])
  .pipe($.plumber({
    handleError: function(err) {
      console.log(err);
      this.emit('end');
    }
  }))
  .pipe(gulp.dest('dest/mov'));
});

// brower sync
gulp.task('browser-sync', () => {
  browserSync.init({
    port: 9000,
//    proxy: 'daiyu-r.com.local',
    server: {
      baseDir: "./",
      index  : "index.html"      //インデックスファイル
    }
  });
});

gulp.task('bs-reload', () => {
	browserSync.reload();
});

// default
gulp.task('default', ['browser-sync'], () => {
  $.watch('./**/*.+(html|php)', () => { return gulp.start(['html','bs-reload'])});
  $.watch('src/js/**/*.js', () => { return gulp.start(['js','bs-reload'])});
  $.watch('src/scss/**/*.scss', () => { return gulp.start(['sass','bs-reload'])});
  $.watch('src/img/**/*.+(png|jpg|gif|svg)', () => { return gulp.start(['image','bs-reload'])});
  $.watch('src/mov/**/*', () => { return gulp.start(['movie','bs-reload'])});
});
