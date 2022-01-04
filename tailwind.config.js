module.exports = {
  purge: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
  ],
  darkMode: 'class',
  theme: {
    fontFamily: {
        'sans': [
            '"Didact Gothic"','ui-sans-serif','system-ui','-apple-system','BlinkMacSystemFont','"Segoe UI"','Roboto',
            '"Helvetica Neue"','Arial','"Noto Sans"','sans-serif','"Apple Color Emoji"','"Segoe UI Emoji"',
            '"Segoe UI Symbol"','"Noto Color Emoji"'
        ],
        'serif': [
            'Heebo', 'Georgia', '"Times New Roman"', 'serif',
        ],
        'mono': [
            '"Ubuntu Mono"', '"Courier New"', 'monospace',
        ],
    },
    extend: {
        fontFamily: {
            'hero': ['"Leckerli One"', 'script', 'Wingdings'],
        },
        spacing: {
            '1/2': '50%',
            '2/3': '66.666667%',
        },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
      require('@tailwindcss/forms'),
  ],
}
