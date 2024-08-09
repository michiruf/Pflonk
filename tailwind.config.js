/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
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
                mytheme: {
                    "primary": "#facc15",
                    "secondary": "#fde047",
                    "accent": "#ff00ff",
                    "neutral": "#e0f2fe",
                    "base-100": "#ffffff",
                    "info": "#67e8f9",
                    "success": "#bef264",
                    "warning": "#fde047",
                    "error": "#f87171",
                    "--rounded-btn": "0", // border width of buttons
                },
            },
            'light',
            'dark',
        ],
    },
}

