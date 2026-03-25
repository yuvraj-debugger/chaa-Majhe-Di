import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'chaa-maroon': '#8C1C13',
                'chaa-yellow': '#F2C14E',
                'chaa-brown': '#5E2C1A',
                'chaa-warm': '#7A0C06',
                'chaa-cream': '#FDF9F3',
                'chaa-latte': '#F2E8D5',
            },
        },
    },

    plugins: [forms, typography],
};
