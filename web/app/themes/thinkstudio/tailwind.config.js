/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    important : true,
    screens   : {
      md   : '768px',
      lg   : '1025px',
    },
    container : {
      center : true,
      screens: {
        xl: '77rem',
      },
    },
    extend: {
      colors: {
        'dark-blue': '#201E50',
        'red': '#BA2C73',
        'text-color': '#1D1E42',
        'white': '#FFFFFF',
        'border': '#4D4E7C'
      },
      fontSize: {
        'text': '15px'
      },
      lineHeight: {
        'text': '120%',
      }
    },
  },
  plugins: [],
};

export default config;
