var gulp = require('gulp');
var stylus = require('gulp-stylus');
var sourcemaps = require('gulp-sourcemaps');
var nib = require('nib');

//VCCWのテーマフォルダへ書き出す
gulp.task('stylus', function() {
	gulp.src('stylus/style.styl')
		.pipe(sourcemaps.init())
		.pipe(stylus({
			use: [nib()]
			}))
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest('../vccw/www/wp-content/themes/shirohanada'));
});

gulp.task('stylus-single', function() {
	gulp.src('stylus/style.styl')
		.pipe(sourcemaps.init())
		.pipe(stylus({
			use: [nib()]
			}))
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest('css/single'));
});

gulp.task('proto-stylus', function() {
	gulp.src('stylus/style.styl')
		.pipe(sourcemaps.init())
		.pipe(stylus({
			use: [nib()]
			}))
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest('css/'));
});

gulp.task('watch', function(){
	gulp.watch('stylus/*',[stylus])
});


