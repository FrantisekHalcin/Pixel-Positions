/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                'prime': 'rgb(0,35,124)'
            }
        },
    },
    plugins: [],
}

