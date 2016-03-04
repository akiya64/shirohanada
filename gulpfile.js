var gulp = require('gulp');
var stylus = require('gulp-stylus');
var sourcemaps = require('gulp-sourcemaps');
var nib = require('nib');

gulp.task('stylus', function() {
	gulp.src('stylus/style.styl')
		.pipe(sourcemaps.init())
		.pipe(stylus({
			use: [nib()]
			}))
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest(''));
});

gulp.task('watch', function(){
	gulp.watch('stylus/style.styl',[stylus])
});


