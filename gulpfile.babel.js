import { series } from "gulp";

const dir = {
  src: "src/",
  build: ".",
  imageAlter: "",
};

// php settings
const php = {
  src: dir.src + "template/**/*.php",
  build: dir.build,
};

const phpTask = (done) => {
  done();
};

const hello = (done) => {
  console.log("test");
  done();
};

exports.default = series(hello);
// exports.hello = gulp.series(hello);
