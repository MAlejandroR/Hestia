const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            height: {
                "5v": "5vh",
                "10v": "10vh",
                "15v": "15vh",
                "65v": "65vh",
                "20v": "20vh",
                "30v": "30vh",
                "40v": "40vh",
                "50v": "50vh",
                "60v": "60vh",
                "70v": "70vh",
                "75v": "75vh",
                "80v": "80vh",
                "90v": "90vh",
                "100v": "100vh",
            },
            width: {
                "10v": "10vw",
                "15v": "15vw",
                "65v": "65vw",
                "20v": "20vw",
                "30v": "30vw",
                "40v": "40vw",
                "49v": "49vw",
                "50v": "50vw",
                "60v": "60vw",
                "70v": "70vw",
                "75v": "75vw",
                "80v": "80vw",
                "90v": "90vw",
                "100v": "100vw",
                "2/5":"40%",
                "1/3": "33%"
            },
            colors:{
                "hestia":    "#b7236a"
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            height:{
                "15v": "15vh",
                "10v": "10vh",
                "65v": "65vh",
                "75v": "75vh"
            },
            colors:{
                "hestia":"#b7236a"
            },
            fontFamily:{
                'hestia':['Exo 2', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto'
                    , 'Helvetica Neue', 'Arial', 'sans-serif',
                    'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol',
                    'Noto Color Emoji'],
            }
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
    plugins: [require("daisyui")],
};
