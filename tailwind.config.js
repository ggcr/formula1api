module.exports = {
  purge: [
     './resources/**/*.blade.php',
     './resources/**/*.js',
     './resources/**/*.vue',
   ],
    darkMode: false, // or 'media' or 'class'
    theme: {
      extend: {
          fontFamily: {
              poppins: ['Poppins', 'Open-Sans'],
              formula: ['Formula1'],
          },
          backgroundImage: theme => ({
              'pink-pattern': "url('/img/FrozenDreams.png')",
              'Bottom-pattern': "url('/img/Bottom.png')",
              'deepblue-pattern': "url('/img/deepblue.png')",
              'morpheus-pattern': "url('/img/morpheus.png')",
              'near-pattern': "url('/img/near.png')",
              'rare-pattern': "url('/img/rare.png')",
              'saint-pattern': "url('/img/saint.png')",
              'wild-pattern': "url('/img/wild.png')",

          }),
          colors: {
              titlePink: '#500C52',
              whiteWave: '#f3f4f5',
          },

          width: {
              '43': '50rem',
          }
      },
    },
    variants: {
      extend: {},
    },
    plugins: [],
}
