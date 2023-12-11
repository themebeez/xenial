const gulp = require('gulp');
const zip = require('gulp-zip');
const wpPot = require('gulp-wp-pot');
const sourcemaps = require('gulp-sourcemaps');
const sass = require('gulp-sass')(require('sass'));
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const notify = require('gulp-notify');
const plumber = require('gulp-plumber');
const rename = require('gulp-rename');
const shell = require('gulp-shell');

/*
===========================================================
=
= Change these constants according to your need
=
====================================================
*/

// #1 base script files path
var base__script__path = {
    base__script__src: [
        './assets/src/js/jQuery/*.js',
        './assets/src/js/libs/*.js',
        './assets/src/js/scripts/*.js',
        '!./assets/src/js/conditional/*.js',
        '!./assets/src/js/compatibility/*.js',
    ],
    base__script__build__path: "./assets/build/js/",
}
var compiled__base__script_build = "xenial-script.js";

// #1.1 base script files path
var compatibility__script__path = {
    compatibility__script__src: [

        './assets/src/js/compatibility/*.js',
    ],
    compatibility__script__build__path: "./assets/build/js/compatibility/",
}

// #2 base sass files path
var base__sass__path = {
    base__sass__src: [
        "./assets/src/scss/**/*.scss",
        "!./assets/src/scss/woocommerce/**",
        "!./assets/src/scss/compatibility/**",
    ],
    base__sass__build__path: "./assets/build/css/",
}
var compiled__base__sass__build__name = "xenial-style.css"; // what would you like to name your compiled CSS file

// #2.1 woocommerce sass file path
var woocommerce__sass__path = {
    woocommerce__sass__src: [

        "./assets/src/scss/woocommerce/**"
    ],
    compiled__woocommerce__sass__build__path: "./assets/build/css/woocommerce/",
}

var compiled__woocommerce__sass__build__name = 'woocommerce.css';

// #2.3 compatibility sass file path
var compatibility__sass__path = {
    compatibility__sass__src: [

        "./assets/src/scss/compatibility/**"
    ],
    compiled__compatibility__sass__build__path: "./assets/build/css/compatibility/",
}

// #3 path of php files to generate WordPress POT file

var project__name = 'Xenial';
var project__text__domain = 'xenial';

var php__file__path = [

    './*.php',
    './**.php',
    './**/*.php',
    '!./github/**',
    '!./node_modules/*.php',
    '!./.git/*.php',
    '!./inc/plugin-recommendation.php',
    '!./third-party/class-tgm-plugin-activation.php',
]

// #4 zip files & folders for production 

var output__compressed__file = 'xenial.zip';

const source__files__folders__to__compress = {

    source__files__folders: [

        './*',
        './*/**',

        '!./.gitignore',
        '!./.github/**',
        '!./.vscode',
        '!./assets/src/**',
        '!./gulpfile.js',
        '!./package.json',
        '!./package-lock.json',
        '!./node_modules/**',
        '!./composer.json',
        '!./composer.lock',
        '!./sftp-config.json'
    ],

    path__to__save__production__zip: "./",
}

/*
===========================================================
=
= Define task (Almost no changes required)
=
====================================================
*/

// # 1 Base script task

gulp.task('baseScriptsTask', function () {
    return gulp.src(base__script__path.base__script__src)
        .pipe(concat(compiled__base__script_build))
        .pipe(rename({ suffix: '.min' }))
        .pipe(uglify())
        .pipe(gulp.dest(base__script__path.base__script__build__path));
});

// # 1.1 Compatibility script task

gulp.task('compatibilityScriptsTask', function () {
    return gulp.src(compatibility__script__path.compatibility__script__src)
        //.pipe(concat())
        .pipe(rename({ suffix: '.min' }))
        .pipe(uglify())
        .pipe(gulp.dest(compatibility__script__path.compatibility__script__build__path));
});

// # 2 Base SASS task

gulp.task('baseSassTask', function () {
    var onError = function (err) {
        notify.onError({
            title: "Gulp",
            subtitle: "Failure!",
            message: "Error: <%= error.message %>",
            sound: "Beep"
        })(err);
        this.emit('end');
    };
    return gulp.src(base__sass__path.base__sass__src)
        .pipe(sourcemaps.init())
        .pipe(plumber({ errorHandler: onError }))
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(postcss([autoprefixer('last 2 version'), cssnano()])) // PostCSS plugins
        .pipe(concat(compiled__base__sass__build__name))
        .pipe(sourcemaps.write('.')) // write sourcemaps file in current directory
        .pipe(gulp.dest(base__sass__path.base__sass__build__path)); // put final CSS in build folder
});

// # 2.1 WooCommerce SASS task

gulp.task('woocommerceSassTask', function () {
    var onError = function (err) {
        notify.onError({
            title: "Gulp",
            subtitle: "Failure!",
            message: "Error: <%= error.message %>",
            sound: "Beep"
        })(err);
        this.emit('end');
    };
    return gulp.src(woocommerce__sass__path.woocommerce__sass__src)
        .pipe(sourcemaps.init())
        .pipe(plumber({ errorHandler: onError }))
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(postcss([autoprefixer('last 2 version'), cssnano()]))
        .pipe(concat(compiled__woocommerce__sass__build__name))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(woocommerce__sass__path.compiled__woocommerce__sass__build__path));
});


// # 2.2 Compatibility SASS task

gulp.task('compatibilitySassTask', function () {
    var onError = function (err) {
        notify.onError({
            title: "Gulp",
            subtitle: "Failure!",
            message: "Error: <%= error.message %>",
            sound: "Beep"
        })(err);
        this.emit('end');
    };
    return gulp.src(compatibility__sass__path.compatibility__sass__src)
        .pipe(sourcemaps.init())
        .pipe(plumber({ errorHandler: onError }))
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(postcss([autoprefixer('last 2 version'), cssnano()]))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(compatibility__sass__path.compiled__compatibility__sass__build__path));
});

// # 3 Generate WordPress POT file

gulp.task('xenialPotFile', function () {
    return gulp.src(php__file__path)
        .pipe(wpPot({
            domain: project__text__domain,
            package: project__name
        }))
        .pipe(gulp.dest('languages/' + project__text__domain + '.pot'));
});

// # 4 Generate Production Zip File 

gulp.task('zipProductionFiles', function () {
    return gulp.src(source__files__folders__to__compress.source__files__folders)
        .pipe(zip(output__compressed__file))
        .pipe(gulp.dest(source__files__folders__to__compress.path__to__save__production__zip))
});


//=========================================
// = C O M M A N D S                      = 
//=========================================
//
// 1. Command: gulp zip (zips the production files)
// 2. Command: gulp makepot (will generate language file)
// 3. Command: gulp assets (Compiles all assets)
//
//=========================================

// Run Task: none, just echo message for default command

gulp.task('default', shell.task(

    'echo ===== ⛔️ Ooops! gulp default command is disabled in this project. These are the available commands: gulp zip, gulp makepot & gulp assets. =====',
));

// #1 Run Task: Zip production files

gulp.task('zip', gulp.series('zipProductionFiles', (done) => {

    done();
}));

// #2 Run Task: Make WordPress POT file

gulp.task('makepot', gulp.series('xenialPotFile', (done) => {

    done();
}));

// #3 Run Task: Compile static assets

gulp.task('assets', gulp.series('baseScriptsTask', 'compatibilityScriptsTask', 'baseSassTask', 'woocommerceSassTask', 'compatibilitySassTask', (done) => {

    gulp.watch(base__script__path.base__script__src, gulp.series('baseScriptsTask'));
    gulp.watch(compatibility__script__path.compatibility__script__src, gulp.series('compatibilityScriptsTask'));
    gulp.watch(base__sass__path.base__sass__src, gulp.series('baseSassTask'));
    gulp.watch(woocommerce__sass__path.woocommerce__sass__src, gulp.series('woocommerceSassTask'));
    gulp.watch(compatibility__sass__path.compatibility__sass__src, gulp.series('compatibilitySassTask'));
    done();
}));



