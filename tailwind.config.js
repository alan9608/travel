const colors = require('tailwindcss/colors')
module.exports = {
    mode:'jit',
    purge: [                               //CONFIGURE CORRECTLY
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './config/*.php',
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
