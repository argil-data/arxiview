/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/components/**/*.js',
        './src/views/**/*.blade.php'
    ],
    safelist: [  ],
    // darkMode: 'media', // or 'class' or 'media'
    // important: true,
    theme: {
        rotate: {
            '-180': '-180deg',
            '-90': '-90deg',
            '-45': '-45deg',
            '0': '0',
            '45': '45deg',
            '90': '90deg',
            '135': '135deg',
            '180': '180deg',
            '225': '225deg',
            '270': '270deg',
        },
        screens: {
            'mobile': {'max': '700px'},
            'xs': '475px',
            ...defaultTheme.screens,
            'desktop' : {'min': '1920px'},
        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            white: '#fff',
            black: '#000',
            main: '#333',
        },
        borderWidth: {
            DEFAULT: '1px',
            '0': '0',
            '1': '1px',
            '2': '2px',
            '3': '3px',
            '4': '4px',
            '6': '6px',
            '8': '8px',
        },
        extend: {
            fontSize: {
            'xl':'1.15rem',
            },
            fontFamily: {
                sans: ['Beatrice'],
                body: ['Beatrice']
            },
            fontWeight: {
                DEFAULT: 300,
                normal: 300,
                medium: 500,
                bold: 700,
            },
            typography: (theme) => ({
                DEFAULT: {
                    css: {
                        color: theme('colors.font'),
                        h2: {
                            color: theme('colors.font'),
                            fontWeight: 'font-normal',
                        },
                        h3: {
                            color: theme('colors.green.500'),
                            fontWeight: 'font-medium',
                        },
                        strong: {
                            color: theme('colors.font'),
                        },
                        a: {
                            color: theme('colors.green.500'),
                            textDecoration: 'none',
                            '&:hover': {
                                color: theme('colors.font'),
                                textDecoration: 'none',
                            },
                            '&:focus': {
                                color: theme('colors.font'),
                                textDecoration: 'none',
                            }
                        },
                    },
                },
            }),
            width: {
                '1/12':'8.333%',
                '1/15':'6.666%',
                '1/20': '5%',

                '1/7': '14.2857143%',
                '2/7': '28.5714286%',
                '3/7': '42.8571429%',
                '4/7': '57.1428571%',
                '5/7': '71.4285714%',
                '6/7': '85.7142857%',

                '1/8': '12.5%',
                '2/8': '25%',
                '3/8': '37.5%',
                '4/8': '50%',
                '5/8': '62.5%',
                '6/8': '75%',
                '7/8': '87.5%',

                '1/9': '11.111%',
                '2/9': '22.222%',
                '3/9': '33.333%',
                '4/9': '44.444%',
                '5/9': '55.555%',
                '6/9': '66.666%',
                '7/9': '77.777%',
                '8/9': '88.888%',

                '1/10': '10%',
                '2/10': '20%',
                '3/10': '30%',
                '4/10': '40%',
                '5/10': '50%',
                '6/10': '60%',
                '7/10': '70%',
                '8/10': '80%',
                '9/10': '90%',

                '1/11': '9.09090%',
                '2/11': '18.1818%',
                '3/11': '27.2727%',
                '4/11': '36.3636%',
                '5/11': '45.4545%',
                '6/11': '54.5454%',
                '7/11': '63.6363%',
                '8/11': '72.7272%',
                '9/11': '81.8181%',
                '10/11': '90.9090%',
                // continue from 13 to 20 ... is there a way to automate this?
            },
            height:{
                "screen/2": "50vh",
                "screen/3": "calc(100vh / 3)",
                "screen/4": "calc(100vh / 4)",
                "screen/5": "calc(100vh / 5)",

                '1/8': '12.5%',
                '2/8': '25%',
                '3/8': '37.5%',
                '4/8': '50%',
                '5/8': '62.5%',
                '6/8': '75%',
                '4/5': '80.0%',
                '7/8': '87.5%',
            },
            minHeight:{
                "screen/60": "60vh",
                "screen/70": "70vh",
                "screen/80": "80vh",
                "screen/2": "50vh",
                "screen/3": "calc(100vh / 3)",
                "screen/4": "calc(100vh / 4)",
                "screen/5": "calc(100vh / 5)",
            },
            margin:{
                '1/12': '8.333%',
                '2/12': '16.666%',
            },
            minWidth:{
            '0': '0',
            '1/20': '5%',
            '1/10': '10%',
            '1/8': '12.5%',
            '1/6': '16.666%',
            '1/4': '25%',
            '1/2': '50%',
            '3/5': '60%',
            '3/4': '75%',
            'full': '100%',
            },
            maxWidth:{
                '0': '0',
                '1/10': '10%',
                '1/8': '12.5%',
                '1/6': '16.666%',
                '1/4': '25%',
                '1/2': '50%',
                '3/5': '60%',
                '3/4': '75%',
                '4/5': '80%',
                'full': '100%',
            },
            maxHeight:{
                '0': '0',
                '1/4': '25%',
                '1/2': '50%',
                '3/4': '75%',
                'full': '100%',
            },
        },
    },
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography'), require('@tailwindcss/aspect-ratio')],
};
