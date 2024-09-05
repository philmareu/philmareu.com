/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
    extend: {
        fontFamily: {
            sans: ['"Comfortaa"', 'sans'],
            serif: ['"Josefin Slab"', 'serif'],
        },
    },
  },
  plugins: [],
}
