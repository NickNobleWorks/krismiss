; 'use strict';

// Get our plugins
var gulp  = require('gulp'),
    gutil = require('gulp-util'),
    scss = require('gulp-sass'),
    comb = require('gulp-csscomb'),
    prefix = require('gulp-autoprefixer');

// Get tabs on our files
var paths = {
      scss: './scss/**.scss',
      css: './css/',
      js: './js/*.js',
      imgs: './**',
      fonts: './fonts/**',
      templates: './templates/*.template.html',
    };


// Default `gulp` listening to stuff as you work
// -----------------------------------------------

gulp.task('default', ['styles',  'watch']); 

gulp.task('watch', function() {

  gulp.watch(paths.scss, ['styles']);

});


// Compile styles
gulp.task('styles', function() {
  return gulp.src(paths.scss)
    .pipe(scss())
    .on('error', function (err) {
      gutil.log(err);
      this.emit('end');
    })
    .pipe(prefix())
    .pipe(comb())
    .pipe(gulp.dest(paths.css))
  ;
});