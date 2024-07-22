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
          "300": "#1b2420",
          "400": "#7d8387",
          "500": "#242424",
          "600": "#060606",
          "700": "#232324",
          "1000": "rgba(255, 255, 255, 0.87)",
          "1100": "rgba(255, 255, 255, 0.76)",
        },
        black: "#000",
        mediumaquamarine: "#30b795",
        lightslategray: "#8f969f",
        whitesmoke: "#f8f8f8",
      },
      spacing: {},
      fontFamily: {
        "mona-sans": "'Mona Sans'",
        inter: "Inter",
        manrope: "Manrope",
        "ibm-plex-mono": "'IBM Plex Mono'",
      },
      borderRadius: {
        "4xs-4": "8.4px",
        "10xs": "3px",
        "21xl": "40px",
        "7xs-3": "5.3px",
        "lg-7": "18.7px",
      },
    },
    fontSize: {
      xl: "1.25rem",
      base: "1rem",
      "9xl": "1.75rem",
      "3xl": "1.375rem",
      "21xl": "2.5rem",
      "5xl": "1.5rem",
      "13xl": "2rem",
      "53xl": "4.5rem",
      "24xl": "2.688rem",
      "39xl": "3.625rem",
      lgi: "1.188rem",
      smi: "0.813rem",
      "lg-7": "1.169rem",
      inherit: "inherit",
    },
    screens: {
      mq1850: {
        raw: "screen and (max-width: 1850px)",
      },
      mq1725: {
        raw: "screen and (max-width: 1725px)",
      },
      mq1700: {
        raw: "screen and (max-width: 1700px)",
      },
      mq1350: {
        raw: "screen and (max-width: 1350px)",
      },
      mq1325: {
        raw: "screen and (max-width: 1325px)",
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
      mq900: {
        raw: "screen and (max-width: 900px)",
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
