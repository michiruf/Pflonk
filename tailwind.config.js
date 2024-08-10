/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require('daisyui'),
    ],
    daisyui: {
        themes: [
            {
                light: {
                    ...require('daisyui/src/theming/themes')['light'],
                    '--rounded-btn': '0', // btn border-radius
                    '--rounded-box': '0', // card border-radius
                }
            },
            // {
            //     dark: {
            //         ...require('daisyui/src/theming/themes')['dark'],
            //         '--rounded-btn': '0', // btn border-radius
            //         '--rounded-box': '0', // card border-radius
            //     }
            // }
        ],
    },
}

