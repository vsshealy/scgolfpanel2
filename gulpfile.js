/**
 * gulpfile.js
 * @package scgolfpanel
 * @author Scott Shealy
 * @version 1.0.0
 * @copyright 2022
**/

    // PLUGINS
        var
            gulp = require('gulp'),
            sass = require('gulp-sass'),
            autoprefixer = require('gulp-autoprefixer'),
            mediaqueries = require('gulp-group-css-media-queries'),
            minifycss = require('gulp-clean-css'),
            plumber = require('gulp-plumber'),
            rename = require('gulp-rename'),
            sourcemaps = require('gulp-sourcemaps'),
            concat = require('gulp-concat')
        ;

    // FILE PATHS
        var paths = {
            root: '.',

            sass: {
                src: './sass/style.scss',
                dir: './sass/**/**/*.scss',
                dest: '.'
            },

            js: {
                src: '/js/**/*.js',
                dir: '/js/**/*.js',
                dest: '.'
            }
        }

    // TASK | CSS
        function compileCSS() {
            return gulp
                .src(paths.sass.src, {allowEmpty: true})
                .pipe(plumber())
                .pipe(sourcemaps.init({loadMaps: true}))
                .pipe(sass({outputStyle: 'expanded'}))
                .pipe(autoprefixer('last 4 versions'))
                .pipe(sourcemaps.write())
                .pipe(mediaqueries())
                .pipe(gulp.dest(paths.sass.dest))

                .pipe(rename({suffix: '.min'}))
                .pipe(minifycss())
                .pipe(gulp.dest(paths.sass.dest))
        }

    // TASK | JS
        function compileJS() {
            return gulp
                .src(paths.js.src, {allowEmpty: true})
                .pipe(plumber())
                .pipe(concat('scripts.js'))
                .pipe(gulp.dest(paths.js.dest))
        }

    // TASK | WATCHFILES
        function watchFiles() {
            gulp.watch(paths.sass.dir, compileSass),
            gulp.watch(paths.js.dir, compileJS)
        }

    // EXECUTE TASKS
        gulp.task('build', compileCSS, compileJS);
        gulp.task('default', gulp.series('build', watchFiles));