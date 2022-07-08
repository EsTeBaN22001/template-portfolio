const { src, dest, watch , series, parallel } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('autoprefixer');
const postcss    = require('gulp-postcss')
const sourcemaps = require('gulp-sourcemaps')
const cssnano = require('cssnano');
const terser = require('gulp-terser-js');
const squoosh = require('gulp-libsquoosh');
const notify = require('gulp-notify');
const cache = require('gulp-cache');
const webp = require('gulp-webp');

const paths = {
	scss: 'src/scss/**/*.scss',
	js: 'src/js/**/*.js',
	img: 'src/img/**/*'
}

// css es una función que se puede llamar automaticamente
function css() {
	return src(paths.scss)
		.pipe(sourcemaps.init())
		.pipe(sass())
		.pipe(postcss([autoprefixer(), cssnano()]))
		.pipe(sourcemaps.write('.'))
		.pipe( dest('public/build/css') );
}


function javascript() {
	return src(paths.js)
		.pipe(terser())
		.pipe(sourcemaps.write('.'))
		.pipe(dest('public/build/js'));
}

function img() {
	return src(paths.img)
		.pipe(cache(squoosh()))
		.pipe( webp() )
		.pipe(dest('public/build/img'))
		.pipe(notify({ message: 'Imagen Completada'}));
}

function watchArchives() {
	watch( paths.scss, css );
	watch( paths.js, javascript );
	watch( paths.img, img );
}

exports.css = css;
exports.watch = watchArchives;
exports.default = parallel(css, javascript,  img,  watchArchivos ); 