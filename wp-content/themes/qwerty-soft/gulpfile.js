const gulp = require("gulp"),
  sass = require("gulp-sass")(require("sass")),
  autoPrefixer = require("gulp-autoprefixer"),
  terser = require("gulp-terser"),
  rename = require("gulp-rename"),
  babel = require("gulp-babel"),
  imageMin = require("gulp-imagemin"),
  cleanCSS = require("gulp-clean-css"),
  cache = require("gulp-cache"),
  del = require("del"),
  sourcemaps = require("gulp-sourcemaps"),
  concat = require("gulp-concat");
(webpack = require("webpack")), (webpackStream = require("webpack-stream"));

const dist = "dist",
  source = "src";

gulp.task("fonts", function () {
  return gulp.src(`assets/${source}/fonts/*`).pipe(gulp.dest(`assets/${dist}/fonts`));
});

gulp.task("styles", function () {
  return gulp
    .src([`assets/${source}/scss/**/*.scss`])
    .pipe(sourcemaps.init())
    .pipe(sass().on("error", sass.logError))
    .pipe(cleanCSS({ level: { 1: { specialComments: false } } }))
    .pipe(autoPrefixer(["last 5 versions", "> 1%", "ie 10", "ie 11"], { cascade: true }))
    .on("error", function (err) {
      console.log(err.toString());
      this.emit("end");
    })
    .pipe(
      rename({
        suffix: ".min",
      })
    )
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(`assets/${dist}/css`));
});

gulp.task("scripts", function () {
  return (
    gulp
      .src([`assets/${source}/js/**/*.js`])
      // .pipe(sourcemaps.init())

      // .pipe(babel(
      //     {
      //         "presets": [
      //             ["@babel/preset-env", {
      //                 "targets": {
      //                     "browsers": ["ie >= 11"]
      //                 },
      //                 "useBuiltIns": "entry",
      //                 "corejs": 3
      //             }]
      //         ]
      //     }
      // ))

      // .pipe(concat('app.js'))
      // .pipe(sourcemaps.write('.'))
      // .pipe(terser())
      .pipe(
        rename({
          suffix: ".min",
        })
      )
      .pipe(gulp.dest(`assets/${dist}/js`))
  );
});

gulp.task("images", function () {
  return gulp
    .src([`assets/${source}/images/**/*`])
    .pipe(
      cache(
        imageMin([
          imageMin.svgo({
            plugins: [{ optimizationLevel: 3 }, { progessive: true }, { interlaced: true }, { removeViewBox: false }, { removeUselessStrokeAndFill: false }, { cleanupIDs: false }],
          }),
          imageMin.gifsicle(),
          imageMin.optipng(),
        ])
      )
    )
    .pipe(gulp.dest(`assets/${dist}/images`));
});

gulp.task("watch", function () {
  /**
   * SCSS Watch
   */
  gulp.watch([`assets/${source}/scss/**/*.scss`], gulp.parallel("styles"));

  /**
   * JS Watch
   */
  gulp.watch([`assets/${source}/js/**/*.js`], gulp.parallel("scripts"));

  /**
   * Icons Watch
   */
  gulp.watch([`assets/${source}/images/**/*`], gulp.parallel("images"));

  /**
   * Php Watch
   */
  gulp.watch(["./**/*.php"]);
});

gulp.task("clean", function (cb) {
  return del([`assets/${dist}/css/`, `assets/${dist}/js/`, `assets/${dist}/fonts/`], cb);
});

gulp.task(
  "build-all",
  gulp.series("clean", "styles", "scripts", "images", "fonts", function (done) {
    done();
  })
);

gulp.task("default", gulp.series("build-all", "watch"));

// const gulp = require('gulp');
// const ftp = require('vinyl-ftp');

// function deploy() {
//     const conn = ftp.create({
//         host:     'ftp.qwerty-soft.com',
//         user:     'alex@dev.qwerty-soft.com',
//         password: '$bI@KLE+S;j&',
//         parallel: 10
//     });

//     return gulp.src(['dist/**/*'], { base: 'dist', buffer: false })
//         .pipe(conn.newer('/public_html')) // Загружать только новые или измененные файлы
//         .pipe(conn.dest('/public_html'));
// }

// exports.deploy = deploy;
