/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**.{js,php}",
    "./assets/js/**.js",
    "./modals/**/**.php",
    "./admin-page/**/**.{js,php}",
    "./users-page/**/**.{js,php}"
  ],
  darkMode: "class",
  theme: {
    extend: {},
  },
  plugins: [],
}
