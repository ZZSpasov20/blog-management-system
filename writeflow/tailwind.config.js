import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors:{
                backgroundColor: "var(--backgroundColor)",
                backgroundElevatedColor: "var(--backgroundElevatedColor)",
                textColor: "var(--textColor)",
                textSubduedColor: "var(--textSubduedColor)",

            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                logoFont: ['Great Vibes', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
};
