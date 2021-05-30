const colors = require('tailwindcss/colors')
module.exports = {
    purge: [
        './public/**/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './app/**/*.php',
        ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            black: colors.black,
            white: colors.white,
            gray: colors.trueGray,
            indigo: colors.indigo,
            red: colors.rose,
            yellow: colors.amber,
            teal: colors.teal,
            blue: colors.blue,
            lblue: colors.lightBlue,
            cyan: colors.cyan,
        },
        extend: {
            backgroundImage: theme => (
                {
                    'sea': "url('/img/big_sea.png')",
                    'test': "url('/img/little_sea.png')",
                }
            )
        },
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}
