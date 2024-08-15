/** @type {import('tailwindcss').Config} */

const colors = require("tailwindcss/colors");

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                purple: {
                    100: "#F3F2F7",
                },
                green: {
                    100: "#BAEADA",
                    900: "#00B074",
                },
                yellow: {
                    100: "#F2F1D3",
                    900: "#B0AB29",
                },
                orange: {
                    100: "#F5DEBD",
                    900: "#DC8E1A",
                },
            },
        },
    },
    plugins: [],
};
