/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}", "./index.html"],
  theme: {
    extend: {},
    fontFamily: {
      inter: ["Inter", "sans-serif"],
    },
    backgroundImage: {
      museum: "url('/src/img/museum.jpg')",
    },
  },
  plugins: [],
};
