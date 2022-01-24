const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        './resources/js/**/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                '2xs': '.65rem',
            },
        },
        theme: {
            screens: {
                'tablet': '640px',
                // => @media (min-width: 640px) { ... }

                'laptop': '1024px',
                // => @media (min-width: 1024px) { ... }

                'desktop': '1280px',
                // => @media (min-width: 1280px) { ... }
            },
        }
    },

    variants: {
        extend: {
            /*opacity: ['disabled'],
            scale: ['active'],
            textColor: ['hover', 'active'],
            backgroundColor: ['active','odd','even'],
            fontWeight: ['hover', 'active', 'focus'],
            borderWidth: ['first', 'last', 'hover'],
            borderRadius: ['first', 'last'],
            boxShadow: ['dark'],
            padding: ['focus', 'hover'],
            zIndex: ['hover'],
            brightness: ['hover', 'focus']*/
        },
        scrollbar: ['dark']
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography'), require('tailwind-scrollbar')],
};
