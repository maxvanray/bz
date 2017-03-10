///////////////////////////////////////////////////////////////////////////
// Configuration
///////////////////////////////////////////////////////////////////////////

var config = {
	jsConcatFiles: [
		'./js/pagescripts.js',
		// './library/js/nav.js',
		// './library/js/section.js'
	]
};




///////////////////////////////////////////////////////////////////////////
// Required
///////////////////////////////////////////////////////////////////////////

var gulp = require('gulp'),
	autoprefixer = require('gulp-autoprefixer'),
	browserSync = require('browser-sync'),
	concat = require('gulp-concat'),
	del = require('del'),
	reload = browserSync.reload,
	rename = require('gulp-rename'),
	sass = require('gulp-sass'),
	sourcemaps = require('gulp-sourcemaps'),
	uglify = require('gulp-uglify'),
	util = require('gulp-util');


///////////////////////////////////////////////////////////////////////////
// Log Errors
///////////////////////////////////////////////////////////////////////////

function errorlog(err){
	console.error(err.message);
	this.emit('end');
}


///////////////////////////////////////////////////////////////////////////
// Scripts Tasks
///////////////////////////////////////////////////////////////////////////

gulp.task('scripts', function() {
	return gulp.src(config.jsConcatFiles)
	.pipe(sourcemaps.init())
	.pipe(concat('temp.js'))
	.pipe(uglify())
	.on('error', errorlog)
	// .pipe(uglify().on('error', util.log))
	.pipe(rename('main.min.js'))
	.pipe(sourcemaps.write('./maps'))
	.pipe(gulp.dest('./js'))
	.pipe(reload({stream:true}));
});


///////////////////////////////////////////////////////////////////////////
// Styles Tasks
///////////////////////////////////////////////////////////////////////////

gulp.task('styles', function() {
	gulp.src('sass/style.scss')
	.pipe(sourcemaps.init())
	.pipe(sass({outputStyle: 'expanded'}))//'compressed'}))//
	.on('error', errorlog)
	.pipe(autoprefixer({
        browsers: ['last 3 versions', 'Firefox < 20', 'IE 8', 'IE 9', 'IE 10'],
        cascade: false
    }))
	.pipe(sourcemaps.write('./maps'))
	.pipe(gulp.dest('css/'))
	.pipe(reload({stream:true}));
});


///////////////////////////////////////////////////////////////////////////
// HTML Tasks
///////////////////////////////////////////////////////////////////////////

gulp.task('html', function() {
	gulp.src('./**/*.html')
	.pipe(reload({stream:true}));
});


///////////////////////////////////////////////////////////////////////////
// PHP Tasks
///////////////////////////////////////////////////////////////////////////

gulp.task('php', function() {
	gulp.src('./**/*.php')
	.pipe(reload({stream:true}));
});


///////////////////////////////////////////////////////////////////////////
// Browser-Sync Tasks
///////////////////////////////////////////////////////////////////////////

gulp.task('browser-sync', function() {
	// browserSync({
	// 	server:{
	// 		baseDir: './'
	// 	}
	// });

	var files = [
			'**/*.php',
			'**/*.html',
			'**/*.{png,jpg,gif}',
			'**/*.{svg}'
		];
	browserSync.init(files, {

		// Read here http://www.browsersync.io/docs/options/
		proxy: "http://bzanelli.dev/",

		// port: 8080,

		// Tunnel the Browsersync server through a random Public URL
		// tunnel: true,

		// Attempt to use the URL "http://my-private-site.localtunnel.me"
		// tunnel: "ppress",

		// Inject CSS changes
		injectChanges: true
	});
});

///////////////////////////////////////////////////////////////////////////
// Watch Tasks
///////////////////////////////////////////////////////////////////////////

gulp.task('watch', function() {
	gulp.watch('sass/**/*.scss', ['styles']);
	gulp.watch(['js/**/*.js',"!js/main.min.js"], ['scripts']);
	gulp.watch('**/*.html', ['html']);
	gulp.watch('**/*.php', ['php']);
});


///////////////////////////////////////////////////////////////////////////
// Default Task
///////////////////////////////////////////////////////////////////////////

gulp.task('default', ['scripts', 'styles', 'html', 'php', 'browser-sync', 'watch']);
