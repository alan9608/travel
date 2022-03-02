const colors = require('tailwindcss/colors')
module.exports = {
    mode:'jit',
    purge: [                               //CONFIGURE CORRECTLY
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
      ],
      darkMode: false,
    theme: {
        extend: {
            backgroundImage: theme => (
                {
                    'sea': "url('/img/big_sea.png')",
                    'test': "url('/img/little_sea.png')",
                }
            ),
            zIndex: {
                '-10': '-10',
            },
            colors: {
                'cool-gray': colors.coolGray,
                'indigo': colors.indigo
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}
