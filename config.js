const config = {
  tailwindjs: "./tailwind.config.js",
  port: 9050,
  purgecss: {
    content: ["src/**/*.{html,js,php}"],
    safelist: {
      standard: [/^pre/, /^code/],
      greedy: [/token.*/],
    },
  },
  imagemin: {
    png: [0.7, 0.7], // range between min (0) and max (1) as quality - 70% with current values for png images,
    jpeg: 70, // % of compression for jpg, jpeg images
  },
};

// tailwind plugins
const plugins = {
  typography: true,
  forms: true,
  containerQueries: true,
};

// base folder paths
const basePaths = ["src", "dist", "build"];

// folder assets paths
const folders = [
  "assets/scss",
  "assets/js",
  "assets/images",
  "assets/videos",
  "assets/fonts",
  "assets/favicon",
  "assets/lottieIcons",
];

const paths = {
  root: "./",
};

basePaths.forEach((base) => {
  paths[base] = {
    base: `./${base}`,
  };
  // console.log(paths[base], ' paths path')
  folders.forEach((folderName) => {
    // const toCamelCase = folderName.replace(/\b-([a-z])/g, (_, c) =>
    //   c.toUpperCase()
    // );
    const toCamelCase = folderName
      .replace(/[/\s]/g, "-")
      .replace(/-(.)/g, (_, c) => c.toUpperCase());

    // console.log(toCamelCase);
    paths[base][toCamelCase] = `./${base}/${folderName}`;
    // console.log(paths[base][toCamelCase] = `./${base}/${folderName}`, ' folder path')
  });
});

module.exports = {
  config,
  plugins,
  paths,
};
