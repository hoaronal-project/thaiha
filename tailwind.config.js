module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        brown: {
          50: '#fdf8f6',
          100: '#f2e8e5',
          200: '#eaddd7',
          300: '#e0cec7',
          400: '#D37F54',
          500: '#bfa094',
          600: '#a18072',
          700: '#B01117',
          800: '#846358',
          900: '#43302b',
        },
      }
    },
    fontFamily: {
      sans: ['Roboto', 'sans-serif']
    },
  },
  plugins: [],
}
