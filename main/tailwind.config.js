/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js}", "./!(build|dist|.*)/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        white: "#fff",
        gainsboro: "#ddd",
        gray: "rgba(0, 0, 0, 0.87)",
        black: "#000",
      },
      spacing: {},
      fontFamily: {
        "mona-sans": "Mona-Sans",
      },
    },
    fontSize: {
      xl: "20px",
      base: "16px",
      "9xl": "28px",
      "3xl": "22px",
      inherit: "inherit",
    },
    screens: {
      mq975: {
        raw: "screen and (max-width: 975px)",
      },
      mq950: {
        raw: "screen and (max-width: 950px)",
      },
      mq700: {
        raw: "screen and (max-width: 700px)",
      },
      mq450: {
        raw: "screen and (max-width: 450px)",
      },
    },
  },
  corePlugins: {
    preflight: false,
  },
};
