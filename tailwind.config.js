module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'poppins' : ["'Poppins'","'sans-serif'"]
      }
      ,  width: {
        '128': '32rem',
      }
    },
  },
  plugins: [],
}
