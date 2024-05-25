/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./resources/testing.blade.php",
    "./resources/forgatepassword.blade.php"
  ],
  theme: {
    extend: {
      fontFamily: {
        Kanit: ['Kanit'], 
        poppins: ['poppins']
      },
      colors: {
        primary: '#F2789F',
        secondery: '#7BD3EA'
      }
    },
  },
  plugins: [],
}

