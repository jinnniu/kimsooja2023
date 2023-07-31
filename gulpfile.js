const { src, dest, watch, series } = require("gulp");

const sass = require("gulp-sass")(require("sass"));
// sass.compiler = require('node-sass');

function css() {
  return src("./src/scss/index.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(dest("./assets/css/"));
}
exports.css = css;

const concat = require("gulp-concat");
function js() {
  return src("./src/js/*.js")
    .pipe(concat("script.js"))
    .pipe(dest("./assets/js/"));
}
exports.js = js;

exports.watch = function () {
  watch("./src/scss/**/*.scss", series(css));
  watch("./src/js/*.js", js);
};
