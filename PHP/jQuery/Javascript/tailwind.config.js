const colors = require('tailwindcss/colors')

module.exports = {
    purge: [],
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                // Colors you want to add go here
                rose: colors.rose,
                cyan: colors.cyan
            }
        },


        screens: {
            'lg': '960px',
            'sm': '375px'
        },
        variants: {
            extend: {},
        },
        plugins: [

        ],
    }

}
