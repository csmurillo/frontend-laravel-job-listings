module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        backgroundImage:{
          'header-desktop':"url('/images/bg-header-desktop.svg')",
          'header-mobile':"url('/images/bg-header-mobile.svg')"
        },
        fontFamily:{
          leagueSpartan:['League Spartan','sans-serif']
        },
        colors:{
          desDarkCyan:'hsl(180, 29%, 50%)',
          lightGrayCyanBg:'hsl(180, 52%, 96%)',
          lighGrayCyanTablet:'hsl(180, 31%, 95%)',
          darkGrayCyan:'hsl(180, 8%, 52%)',
          veryDarkGrayCyan:'hsl(180, 14%, 20%)'
        }
      },
    },
    plugins: [],
  }



