const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    darkMode: 'media',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            boxShadow: {
                sm: '0 1px 2px 0 rgba(0, 0, 0, 0.05)',
                DEFAULT: '0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)',
                md: '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
                lg: '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
                xl: '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)',
                '2xl': '0 25px 50px -12px rgba(0, 0, 0, 0.25)',
                '3xl': '0 35px 60px -15px rgba(0, 0, 0, 0.3)',
                inner: 'inset 0 2px 4px 0 rgba(0, 0, 0, 0.06)',
                none: 'none',
            },
            fontFamily: {
                heading: ['Montserrat', ...defaultTheme.fontFamily.sans],
                body: ['Raleway', ... defaultTheme.fontFamily.serif],
            },
            colors: {
                'rad-red': {
                    50: '#9b6c6f',
                    100: '#8a5457',
                    200: '#7a3b3e',
                    300: '#692326',
                    400: '#590B0F',
                    500: '#50090d',
                    600: '#47080c',
                    700: '#3e070a',
                    800: '#350609',
                    900: '#2c0507',
                },
                'defero-red': {
                    50: '#e4797d',
                    100: '#df6267',
                    200: '#db4c52',
                    300: '#d6363c',
                    400: '#D22027',
                    500: '#bd1c23',
                    600: '#a8191f',
                    700: '#93161b',
                    800: '#7e1317',
                    900: '#691013',
                },
                'blue-it-away': {
                    50: '#6b7684',
                    100: '#525f70',
                    200: '#3a485b',
                    300: '#213147',
                    400: '#091B33',
                    500: '#08182d',
                    600: '#071528',
                    700: '#061223',
                    800: '#05101e',
                    900: '#040d19',
                },
                'blue-skies-ahead': {
                    50: '#94cceb',
                    100: '#83c3e8',
                    200: '#71bbe5',
                    300: '#5fb2e2',
                    400: '#4EAADF',
                    500: '#4699c8',
                    600: '#3e88b2',
                    700: '#36769c',
                    800: '#2e6685',
                    900: '#27556f',
                },
                'silver-linings': {
                    40: '#9e9f9f',
                    100: '#8e8f8f',
                    200: '#7e7e7e',
                    300: '#6e6f6f',
                    400: '#5E5F5F',
                    500: '#545555',
                    600: '#4b4c4c',
                    700: '#414242',
                    800: '#383939',
                    900: '#2f2f2f',
                },
                'grayful-for-it': {
                    50: '#cfcece',
                    100: '#c7c6c6',
                    200: '#bfbebe',
                    300: '#b7b6b6',
                    400: '#afaeae',
                    500: '#9d9c9c',
                    600: '#8c8b8b',
                    700: '#7a7979',
                    800: '#696868',
                    900: '#575757',
                },
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
            cursor: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
