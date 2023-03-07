/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.{js,ts,jsx,tsx}",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        roboto:['Roboto Mono', 'monospace'],
        poppins:['Poppins', 'sans-serif'],
        oswand:['Oswald', 'sans-serif'],
        raleway:['Raleway', 'sans-serif'],
        incosolata:[ 'Inconsolata', 'monospace'],
        opensans:['Open Sans', 'sans-serif'],
        itim:['Itim', 'cursive'],
      },
    },
  },
  plugins: [],
}