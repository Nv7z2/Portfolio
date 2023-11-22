const { src, dest, watch } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const cleanCss = require('gulp-clean-css');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const babel = require('gulp-babel');
const terser = require('gulp-terser');
const rename = require('gulp-rename');

const compileStyles = () => {
  return src('assets/sass/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss([autoprefixer()]))
    .pipe(cleanCss())
    .pipe(rename({ suffix: '.min' }))
    .pipe(dest('assets/dist/css'));
}

const compileScripts = () => {
  return src('assets/js/*.js')
    .pipe(babel({
      presets: ['@babel/env']
    }))
    .pipe(terser())
    .pipe(rename({ suffix: '.min' }))
    .pipe(dest('assets/dist/js'));
}

const watchForChanges = () => {
  watch('assets/sass/**/*.scss', compileStyles);
  watch('assets/js/**/*.js', compileScripts);
}

exports.default = watchForChanges;
exports.compileStyles = compileStyles;
exports.compileScripts = compileScripts;
