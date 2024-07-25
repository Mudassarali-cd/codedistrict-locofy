/**
 *   Gulp with TailwindCSS - An CSS Utility framework build setup with SCSS
 *   Author : Code District
 *   URL : https://codedistrict.com
 **/

/*
  Usage:
  1. npm install //To install all dev dependencies of package
  2. npm run dev //To start development and server for live preview
  3. npm run prod //To generate minifed files for live server
*/

const { src, dest, watch, series, parallel } = require("gulp");
const clean = require("gulp-clean"); //For Cleaning build/dist for fresh export
const options = require("./config"); //paths and other options from config.js
const browserSync = require("browser-sync").create();

const sass = require("gulp-sass")(require("sass")); //For Compiling SASS files
const postcss = require("gulp-postcss"); //For Compiling tailwind utilities with tailwind config
const concat = require("gulp-concat"); //For Concatinating js,css files
const uglify = require("gulp-terser"); //To Minify JS files
// const imagemin = require("gulp-imagemin"); //To Optimize Images
// const mozjpeg = require("imagemin-mozjpeg"); // imagemin plugin
// const pngquant = require("imagemin-pngquant"); // imagemin plugin
// const purgecss = require("gulp-purgecss"); // Remove Unused CSS from Styles
const logSymbols = require("log-symbols"); //For Symbolic Console logs :) :P
const includePartials = require("gulp-file-include"); //For supporting partials if required

//Load Previews on Browser on dev
function livePreview(done) {
  browserSync.init({
    proxy: "http://localhost:8000", // Replace with your local PHP server address
    port: options.config.port || 5000,
    open: false, // Prevents BrowserSync from automatically opening a browser
    notify: false, // Disables the BrowserSync notification
  });
  done();
}

// Triggers Browser reload
function previewReload(done) {
  console.log("\n\t" + logSymbols.info, "Reloading Browser Preview.\n");
  browserSync.reload();
  done();
}

//Development Tasks
function devHTML() {
  return src(`${options.paths.src.base}/**/*[.html, .php]`)
    .pipe(includePartials())
    .pipe(dest(options.paths.dist.base))
    .pipe(browserSync.stream()); // Reloads browsersync
}

function devStyles() {
  const tailwindcss = require("tailwindcss");
  const autoprefixer = require("autoprefixer");
  return src(`${options.paths.src.assetsScss}/**/*.scss`)
    .pipe(sass().on("error", sass.logError))
    .pipe(postcss([tailwindcss(options.config.tailwindjs), autoprefixer()]))
    .pipe(concat({ path: "style.css" }))
    .pipe(dest(options.paths.dist.assetsScss));
}

function devScripts() {
  return src([
    `${options.paths.src.assetsJs}/jquery-plugins/jquery.min.js`, // Include jQuery file
    `${options.paths.src.assetsJs}/jquery-plugins/lottie.min.js`, // Include lottie icons animation file
    // `${options.paths.src.assetsJs}/jquery-plugins/image-comparison-slider.min.js`, // Include jQuery any image comparison slider file
    // `${options.paths.src.assetsJs}/jquery-plugins/swiper-bundle.min.js`, // Include jQuery swiper slider file
    // `${options.paths.src.assetsJs}/jquery-plugins/gsap.js`, // Include jQuery gsap file
    `${options.paths.src.assetsJs}/*.js`,
  ])
    .pipe(concat("scripts.js"))
    .pipe(uglify()) // Minify the concatenated file
    .pipe(dest(options.paths.dist.assetsJs));
}

function devImages() {
  return src(`${options.paths.src.assetsImages}/**/*`).pipe(
    dest(options.paths.dist.assetsImages)
  );
}
function devLottieIcons() {
  return src(`${options.paths.src.assetsLottieIcons}/**/*`).pipe(
    dest(options.paths.dist.assetsLottieIcons)
  );
}
function devFontIcons() {
  return src(`${options.paths.src.assetsFontIcons}/**/*`).pipe(
    dest(options.paths.dist.assetsFontIcons)
  );
}

function devVideos() {
  return src(`${options.paths.src.assetsVideos}/**/*`).pipe(
    dest(options.paths.dist.assetsVideos)
  );
}

function devFonts() {
  return src(`${options.paths.src.assetsFonts}/**/*`).pipe(
    dest(options.paths.dist.assetsFonts)
  );
}
function devFavicon() {
  return src(`${options.paths.src.assetsFavicon}/**/*`).pipe(
    dest(options.paths.dist.assetsFavicon)
  );
}

// function devThirdParty() {
//   return src(`${options.paths.src.thirdParty}/**/*`).pipe(
//     dest(options.paths.dist.thirdParty)
//   );
// }

function watchFiles() {
  watch(`${options.paths.src.base}/**/*.{html,php}`).on(
    "change",
    series(devHTML, devStyles, previewReload)
  );
  watch(
    [options.config.tailwindjs, `${options.paths.src.assetsScss}/**/*.scss`],
    series(devStyles, previewReload)
  );
  watch(
    `${options.paths.src.assetsJs}/**/*.js`,
    series(devScripts, previewReload)
  );
  watch(
    `${options.paths.src.assetsImages}/**/*`,
    series(devImages, previewReload)
  );
  watch(
    `${options.paths.src.assetsLottieIcons}/**/*`,
    series(devLottieIcons, previewReload)
  );
  watch(
    `${options.paths.src.assetsFontIcons}/**/*`,
    series(devFontIcons, previewReload)
  );
  watch(
    `${options.paths.src.assetsVideos}/**/*`,
    series(devVideos, previewReload)
  );
  watch(
    `${options.paths.src.assetsFonts}/**/*`,
    series(devFonts, previewReload)
  );
  watch(
    `${options.paths.src.assetsFavicon}/**/*`,
    series(devFavicon, previewReload)
  );
  // watch(
  //   `${options.paths.src.thirdParty}/**/*`,
  //   series(devThirdParty, previewReload)
  // );
  console.log("\n\t" + logSymbols.info, "Watching for Changes..\n");
}

function devClean() {
  console.log(
    "\n\t" + logSymbols.info,
    "Cleaning dist folder for fresh start.\n"
  );
  return src(options.paths.dist.base, { read: false, allowEmpty: true }).pipe(
    clean()
  );
}

//Production Tasks (Optimized Build for Live/Production Sites)
function prodHTML() {
  return src(`${options.paths.src.base}/**/*.{html,php}`)
    .pipe(includePartials())
    .pipe(dest(options.paths.build.base));
}

function prodStyles() {
  const tailwindcss = require("tailwindcss");
  const autoprefixer = require("autoprefixer");
  const cssnano = require("cssnano");
  return src(`${options.paths.src.assetsScss}/**/*.scss`)
    .pipe(sass().on("error", sass.logError))
    .pipe(
      postcss([
        tailwindcss(options.config.tailwindjs),
        autoprefixer(),
        cssnano(),
      ])
    )

    .pipe(dest(options.paths.build.assetsScss));
}

function prodScripts() {
  return src([
    `${options.paths.src.assetsJs}/libs/**/*.js`,
    `${options.paths.src.assetsJs}/**/*.js`,
  ])
    .pipe(concat({ path: "scripts.js" }))
    .pipe(uglify())
    .pipe(dest(options.paths.build.assetsJs));
}

// function prodImages() {
//   const pngQuality = Array.isArray(options.config.imagemin.png)
//     ? options.config.imagemin.png
//     : [0.7, 0.7];
//   const jpgQuality = Number.isInteger(options.config.imagemin.jpeg)
//     ? options.config.imagemin.jpeg
//     : 70;
//   const plugins = [
//     pngquant({ quality: pngQuality }),
//     mozjpeg({ quality: jpgQuality }),
//   ];

//   return src(options.paths.src.assetsImages + "/**/*")
//     .pipe(imagemin([...plugins]))
//     .pipe(dest(options.paths.build.assetsImages));
// }

function prodFonts() {
  return src(`${options.paths.src.assetsFonts}/**/*`).pipe(
    dest(options.paths.build.assetsFonts)
  );
}

function prodClean() {
  console.log(
    "\n\t" + logSymbols.info,
    "Cleaning build folder for fresh start.\n"
  );
  return src(options.paths.build.base, { read: false, allowEmpty: true }).pipe(
    clean()
  );
}

function buildFinish(done) {
  console.log(
    "\n\t" + logSymbols.info,
    `Production build is complete. Files are located at ${options.paths.build.base}\n`
  );
  done();
}

exports.default = series(
  devClean, // Clean Dist Folder
  parallel(
    devStyles,
    devScripts,
    devImages,
    devLottieIcons,
    devFontIcons,
    devVideos,
    devFonts,
    devHTML,
    devFavicon
  ), //Run All tasks in parallel
  livePreview, // Live Preview Build
  watchFiles // Watch for Live Changes
);

exports.prod = series(
  prodClean, // Clean Build Folder
  parallel(
    prodStyles,
    prodScripts,
    // prodImages,
    prodHTML,
    prodFonts
    // prodThirdParty
  ), //Run All tasks in parallel
  buildFinish
);
