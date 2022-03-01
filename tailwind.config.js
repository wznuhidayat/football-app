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
      },
      animation: {
        'fade-in-up': 'fadeinup 0.5s ease-out',
        'fade-in-up-1': 'fadeinup 1s ease-out',
        'fade-in-down': 'fade-in-down 0.5s ease-out'
      },
      keyframes: {
        fadeinup: {
          '0%': { opacity: '0',
             transform: 'translateY(+100px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        'fade-in-down': {
          '0%': {
              opacity: '0',
              transform: 'translateY(-10px)'
          },
          '100%': {
              opacity: '1',
              transform: 'translateY(0)'
          },
      }
      }
   },
  },
  plugins: [
    require('tailwindcss-animatecss')({
      classes: ['animate__animated', 'animate__fadeIn', 'animate__bounceIn', 'animate__lightSpeedOut'],
      settings: {
        animatedSpeed: 1000,
        heartBeatSpeed: 1000,
        hingeSpeed: 2000,
        bounceInSpeed: 750,
        bounceOutSpeed: 750,
        animationDelaySpeed: 1000
      },
      variants: ['responsive', 'hover', 'reduced-motion'],
    }),

  ],
}
