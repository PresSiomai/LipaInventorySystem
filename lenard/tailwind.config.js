const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php", "!./node_modules/**"],
  theme: {
    extend: {
      colors: {
        primary: {
          lighter: "rgb(var(--color-primary-lighter) / <alpha-value>)",
          lightest: "rgb(var(--color-primary-lightest) / <alpha-value>)",
          DEFAULT: "rgb(var(--color-primary) / <alpha-value>)",
          darker: "rgb(var(--color-primary-darker) / <alpha-value>)",
        },
        secondary: {
          lighter: "rgb(var(--color-secondary-lighter) / <alpha-value>)",
          DEFAULT: "rgb(var(--color-secondary) / <alpha-value>)",
          darker: "rgb(var(--color-secondary-darker) / <alpha-value>)",
        },
      },
      fontFamily: {
        sans: ["Poppins", ...defaultTheme.fontFamily.sans],
      },
    },
  },
  plugins: [],
};
