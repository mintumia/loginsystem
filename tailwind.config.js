/** @type {import('tailwindcss').Config} */
export default {
  content: [
      './resources/views/**/*.blade.php',
      './resources/views/*.php',
      "./resources/**/*.{html,js,php}",


  ],
  theme: {
    extend: {},
  },
  plugins: [require('@tailwindcss/forms')],
}

