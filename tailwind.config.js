module.exports = {
  purge: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
  ],
  darkMode: 'class',
  theme: {
    extend: {
        fontFamily: {
            'hero': ['Helvetica'],
        }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
      require('@tailwindcss/forms'),
  ],
}
