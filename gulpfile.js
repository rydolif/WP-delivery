var syntax        = 'sass'; // Syntax: sass or scss;

var gulp          = require('gulp'),
		gutil         = require('gulp-util' ),
		sass          = require('gulp-sass'),
		browsersync   = require('browser-sync'),
		concat        = require('gulp-concat'),
		uglify        = require('gulp-uglify'),
		cleancss      = require('gulp-clean-css'),
		rename        = require('gulp-rename'),
		autoprefixer  = require('gulp-autoprefixer'),
		notify        = require("gulp-notify"),
		rsync         = require('gulp-rsync'),
		svgstore      = require('gulp-svgstore'),
		svgmin        = require('gulp-svgmin'),
		cheerio       = require('gulp-cheerio'),
		rename        = require('gulp-rename'),
		plumber       = require('gulp-plumber');

gulp.task('browser-sync', function() {
	browsersync({
		proxy: "http://localhost:81/delivery/",
		notify: false
	})
});

gulp.task('styles', function() {
	return gulp.src('delivery/assets/'+syntax+'/**/*.'+syntax+'')
	.pipe(sass({ outputStyle: 'expand' }).on("error", notify.onError()))
	.pipe(rename({ suffix: '.min', prefix : '' }))
	.pipe(autoprefixer(['last 15 versions']))
	.pipe(cleancss( {level: { 1: { specialComments: 0 } } })) // Opt., comment out when debugging
	.pipe(gulp.dest('delivery/assets/css'))
	.pipe(browsersync.reload( {stream: true} ))
});

gulp.task('js', function() {
	return gulp.src([
		'delivery/assets/libs/jquery/dist/jquery.min.js',  			//----jquery
		'delivery/assets/libs/jquery.validate.js', 					//----форма
		'delivery/assets/libs/jquery.mask.min.js', 					//----форма
		'delivery/assets/libs/jscrollpane/jquery.jscrollpane.js',
		'delivery/assets/libs/jscrollpane/jquery.mousewheel.js',
		'delivery/assets/libs/jquery.popupoverlay.js', 				//----модалки
		// 'delivery/assets/libs/slick/slick.js', 					//----слайдер
		 // 'delivery/assets/libs/flipclock/flipclock.js',
		'delivery/assets/libs/swiper/swiper.min.js', 			//----слайдер
		'delivery/assets/libs/fancybox/jquery.fancybox.js', 		//----картінка прикліку
		// 'delivery/assets/libs/jquery.spincrement.min.js', 		//----цифри анімованні
		// 'delivery/assets/libs/isotope.pkgd.min.js', 				//----сетка елементов + фильтр
		'delivery/assets/js/common.js', // Always at the end
	])
	.pipe(plumber())
	.pipe(concat('scripts.min.js'))
	.pipe(uglify()) // Mifify js (opt.)
	.pipe(gulp.dest('delivery/assets/js'))
	.pipe(browsersync.reload({ stream: true }))
});

gulp.task('rsync', function() {
	return gulp.src('delivery/assets/**')
	.pipe(rsync({
		root: 'delivery/assets/',
		hostname: 'username@yousite.com',
		destination: 'yousite/public_html/',
		// include: ['*.htaccess'], // Includes files to deploy
		exclude: ['**/Thumbs.db', '**/*.DS_Store'], // Excludes files from deploy
		recursive: true,
		archive: true,
		silent: false,
		compress: true
	}))
});


gulp.task('watch', ['styles', 'js', 'browser-sync'], function() {
	gulp.watch('delivery/assets/'+syntax+'/**/*.'+syntax+'', ['styles']);
	gulp.watch(['libs/**/*.js', 'delivery/assets/js/common.js'], ['js']);
	gulp.watch('delivery/assets/*.html', browsersync.reload);
	gulp.watch('delivery/**/*.php', browsersync.reload);
});

//--------------------------------svg-sprite-----------------------------
gulp.task('symbols', function() {
  return gulp.src('delivery/img/icon/*.svg')
    .pipe(svgmin())
    .pipe(svgstore({
      inlineSvg: true
    }))
    .pipe(cheerio({
      run: function($) {
        $('[fill]').removeAttr('fill');
        $('[style]').removeAttr('style');
        $('[class]').removeAttr('class');
        $('title').remove();
        $('defs').remove();
        $('style').remove();
        $('svg').attr('style', 'display:none');
      }
    }))
    .pipe(rename('symbols.html'))
    .pipe(gulp.dest('delivery/img'));
});

gulp.task('default', ['watch']);
