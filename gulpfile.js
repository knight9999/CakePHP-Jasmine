var gulp = require('gulp');
var del = require('del');
var coffee = require('gulp-coffee');
var merge = require('merge-stream');
var plumber = require('gulp-plumber');

gulp.task('clean',function() {
  del.sync( [ 'webroot/js/**' , '!webroot/js' , '!webroot/js/.gitkeep'] );
});

gulp.task('copy',function() {
  var jasmine = gulp.src(['node_modules/jasmine-ajax/**',
                    'node_modules/jasmine-core/**',
                    'node_modules/jasmine-jquery/**']
                    , {base: "node_modules"}).pipe( gulp.dest("webroot/js") );
  return jasmine;
});

gulp.task('compile',function() {
  return gulp.src(['Src/coffee/**/*.coffee'])
          .pipe(plumber())
          .pipe(coffee())
          .pipe(gulp.dest('webroot/js/'));

});

gulp.task('serve',['copy','compile'],function() {
  gulp.watch(['Src/coffee/**'],['compile']);
//  gulp.watch(['Src/fixtures/**'],['copy'])
});
