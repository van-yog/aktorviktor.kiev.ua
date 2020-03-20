let gulp = require("gulp");
let fileinclude = require("gulp-file-include");
let concat = require("gulp-concat");
let imagemin = require("gulp-imagemin");
let clean = require("gulp-clean");
let cssmin = require("gulp-cssmin");
let rename = require("gulp-rename");
   let minify = require("gulp-minify");
  

let browserSync = require("browser-sync").create();
let reload = browserSync.reload;

gulp.task("clean", function() {
  return gulp.src("build", { read: false }).pipe(clean());
});

gulp.task("html", function() {
  return gulp
    .src("./*.html")
    .pipe(fileinclude())
    .pipe(gulp.dest("build"));
});

gulp.task("css", function() {
  return gulp
    .src("./src/css/*.css")
    .pipe(concat("style.css"))
    .pipe(cssmin())
    .pipe(rename({ suffix: ".min" }))
    .pipe(gulp.dest("build/src/css"));
});

gulp.task("js", function() {
  return gulp
    .src("./src/js/*.js")
    .pipe(concat("libs.js"))
    .pipe(minify())
    .pipe(gulp.dest("build/src/js"));
});

gulp.task("img", function() {
  return gulp
    .src("./src/img/**")
    .pipe(imagemin())
    .pipe(gulp.dest("build/src/img"));
});

gulp.task("build", gulp.series("js", "css", "img", "html"));

gulp.task("webserver", function() {
  browserSync.init({
    server: "./build"
  });

  gulp.watch("./*.html", gulp.series("html")).on("change", reload);
  gulp.watch("./src/css/*.css", gulp.series("css")).on("change", reload);
  gulp.watch("./src/js/*.js", gulp.series("js")).on("change", reload);
  gulp.watch("./src/img/*.*", gulp.series("img")).on("change", reload);
});

gulp.task("default", gulp.series("build", "webserver"));
