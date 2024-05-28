/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./resources/testing.blade.php",
    "./resources/forgatepassword.blade.php",
    "./resources/daftarakun.blade.php",
    "./resources/daftarakun-2.blade.php",
    "./resources/daftarakun-3.blade.php",

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
  plugins: ["prettier-plugin-tailwindcss"],
}

