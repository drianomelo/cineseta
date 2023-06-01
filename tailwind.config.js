/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}", "./index.html"],
  theme: {
    extend: {},
    fontFamily: {
      inter: ["Inter", "sans-serif"],
      kaisei: ["Kaisei Decol", "serif"],
    },
    backgroundImage: {
      museum: "url('/src/img/museum.jpg')",
      "img-1": "url('/src/img/1.jpg')",
      "img-2": "url('/src/img/2.jpg')",
      "img-3": "url('/src/img/3.jpg')",
      "img-4": "url('/src/img/4.jpg')",
    },
    lineHeight: {
      h1: "75px",
    },
  },
  plugins: [],
};
