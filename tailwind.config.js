/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/index.html",
  ],
  theme: {
    extend: {
      borderColor: (theme) => ({
        DEFAULT: theme("colors.gray.300"),
      })
    }
  },
  plugins: [],
}
