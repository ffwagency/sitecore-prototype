var gulp          = require('gulp');
var gutil         = require('gulp-util');
var browserSync   = require('browser-sync');
var reload        = browserSync.reload;
var connect       = require('gulp-connect-php');
var sass          = require('gulp-sass');
var plumber       = require('gulp-plumber');
var autoprefixer  = require('gulp-autoprefixer');
var minifyCss     = require('gulp-minify-css');
var concat 		  = require('gulp-concat');
var uglify 		  = require('gulp-uglify');



var onError = function (err) {
	console.log(
		'ERROR! Oh no, it seems that something went wrong!',
		'\n- Plugin: ' + gutil.colors.red(err.plugin),
		'\n- Error: ' + gutil.colors.red(err.message)
	)
};

gulp.task('scripts', function() {
  	gulp.src(['./js/modules/*js', './js/base.js'])
  		.pipe(plumber(onError))
		.pipe(concat('script.min.js'))
		.pipe(uglify())
		.pipe(gulp.dest('./js/'))
		.pipe(reload({stream:true}));
});

gulp.task('sass', function() {
  	gulp.src('scss/screen.scss')
		.pipe(plumber(onError))
		.pipe(sass())
		.pipe(autoprefixer('last 3 versions', 'ie 8', 'ie 9'))
		.pipe(minifyCss({
		  keepSpecialComments: 0
		}))
		.pipe(gulp.dest('css/'))
		.pipe(reload({stream:true}));
	gulp.src('scss/dev.scss')
		.pipe(plumber(onError))
		.pipe(sass())
		.pipe(autoprefixer('last 3 versions', 'ie 8', 'ie 9'))
		.pipe(minifyCss({
		  keepSpecialComments: 0
		}))
		.pipe(gulp.dest('css/'))
		.pipe(reload({stream:true}));
});

gulp.task('watch', function() {

	connect.server({}, function (){
		browserSync({
			proxy: 'localhost:8000',
			ghostMode: false
		});
	});

	gulp.watch('./scss/**/*.scss', ['sass']);

	gulp.watch(['./**/*.php']).on('change', function(file) {
		console.log('File changed:' + gutil.colors.cyan(file.path));
		browserSync.reload();
	})

	gulp.watch('./js/**/*.js', ['scripts']);

});

gulp.task('default', ['watch']);











