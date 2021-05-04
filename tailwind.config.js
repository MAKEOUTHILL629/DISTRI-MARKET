const defaultTheme = require('tailwindcss/defaultTheme')
module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        'primary': '#f4f9f9',
        'primary-dark': '#D0E5E5',
        'secondary': '#ccf2f4',
        'secondary-dark': '#A6E1E5',
        'tertiary': '#a4ebf3',
        'tertiary-dark': '#8ADAE3',
        'quaternary': '#aaaaaa',
        'quaternary-dark': '#919191',
      },
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
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
