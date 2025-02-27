import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */

module.exports = {
    content: [
      './resources/**/*.vue', 
      './resources/**/*.blade.php',
      './storage/framework/views/*.php',
      './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    ],
    theme: {
      extend: {
        fontFamily: {
          sans: ['Figtree', ...defaultTheme.fontFamily.sans],
        },
      },
    },
    plugins: [],
  };
