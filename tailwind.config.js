import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
        // screens: {
        //     'sm': {'min': '340px', 'max': '767px'},
        //     'md': {'min': '768px', 'max': '1023px'},
        //     'lg': {'min': '1024px', 'max': '1279px'},
        //     'xl': {'min': '1280px', 'max': '1535px'},
        //     '2xl': {'min': '1536px'},
        // },
    },

    plugins: [forms],
};
