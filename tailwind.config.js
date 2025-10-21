/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.php", // alle PHP templates scannen
    "./src/**/*.js", // eventuele JS-componenten
  ],
  theme: {
    extend: {
      colors: {
        primary: "#283a96", // jouw donkerblauw
        secondary: "#ffffff", // wit
      },
      fontFamily: {
        sans: ["Montserrat", "sans-serif"],
      },
      container: {
        center: true,
        padding: "1rem",
      },
    },
  },
  plugins: [],
};
