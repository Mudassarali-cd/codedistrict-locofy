/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js}", "./!(build|dist|.*)/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        white: "#fff",
        gainsboro: "#ddd",
        gray: {
          "100": "#7e8387",
          "200": "rgba(0, 0, 0, 0.87)",
        },
        black: "#000",
        mediumaquamarine: "#30b795",
        whitesmoke: "#f8f8f8",
        mediumaquamarine: "#30b795",
      },
      spacing: {},
      fontFamily: {
        "mona-sans": "Mona-Sans",
        inter: "Inter",
        inter: "Inter",
      },
      borderRadius: {
        "4xs-4": "8.4px",
      },
      borderRadius: {
        "4xs-4": "8.4px",
      },
    },
    fontSize: {
      xl: "20px",
      base: "16px",
      "9xl": "28px",
      "21xl": "40px",
      "5xl": "24px",
      "13xl": "32px",
      lgi: "19px",
      "21xl": "40px",
      "5xl": "24px",
      "13xl": "32px",
      "13xl": "32px",
      lgi: "19px",
      "21xl": "40px",
      "5xl": "24px",
      "13xl": "32px",
      inherit: "inherit",
    },
    screens: {
      mq1850: {
        raw: "screen and (max-width: 1850px)",
      },
      mq1350: {
        raw: "screen and (max-width: 1350px)",
      },
      mq975: {
        raw: "screen and (max-width: 975px)",
      },
      mq950: {
        raw: "screen and (max-width: 950px)",
      },
      mq925: {
        raw: "screen and (max-width: 925px)",
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