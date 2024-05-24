/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        Kanit: ['Kanit'], 
        poppins: ['poppins']
      },
      colors: {
        primary: '#F2789F'
      }
    },
  },
  plugins: [],
}

