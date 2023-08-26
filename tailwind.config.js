import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './node_modules/tw-elements/dist/js/**/*.js'
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['ui-sans-serif', 'Helvetica', 'Arial', 'sans-serif'],
                serif: ['Patua One', 'ui-serif', 'Times New Roman', 'Times', 'serif'],
                mono: ['ui-monospace'],
            },
        },
    },

    plugins: [
        require("tw-elements/dist/plugin.cjs"),
        require('@tailwindcss/typography')
    ]
};
