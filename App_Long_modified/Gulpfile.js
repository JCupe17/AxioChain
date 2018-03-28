var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var postcss = require('gulp-postcss');
var autoprefixer = require('autoprefixer');
var cssnano = require('cssnano');

var processors = [
    autoprefixer({browsers: ['last 2 versions', '> 1%', 'not ie <= 8']}),
    cssnano()
];

gulp.task('styles', function () {
    gulp.src('css/main.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss(processors))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('./css'));
});

gulp.task('default', function () {
    gulp.start('styles');
    gulp.watch('css/**/*.scss', ['styles']);
});