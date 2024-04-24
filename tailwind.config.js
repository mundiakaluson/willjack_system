/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue"
    ],
  theme: {
    extend: {
        backgroundSize: {
                'size-200': '200% 200%',
            },
        backgroundPosition: {
            'pos-0': '0% 0%',
            'pos-100': '100% 100%',
        },
        gridTemplateRows: {
            '[auto, auto, 1fr]': 'auto auto 1fr',
        },

    },
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
    ],
  darkMode: 'false',
}

