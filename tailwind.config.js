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
                primary: {
                    100: "rgba(0, 176, 116, 0.20)",
                    900: "rgba(0, 176, 116, 1)",
                    hover: "rgba(13, 143, 98, 1)",
                },
                purple: {
                    100: "#F3F2F7",
                },
                yellow: {
                    100: "#F2F1D3",
                    900: "#B0AB29",
                },
                orange: {
                    100: "#F5DEBD",
                    900: "#DC8E1A",
                },
                gray: {
                    900: "rgba(55,67,80,1)",
                    700: "rgba(55,67,80,0.75)",
                    500: "rgba(55,67,80,0.5)",
                    200: "rgba(55,67,80,0.35)",
                    100: "rgba(55,67,80,0.15)",
                },
            },
        },
    },
    plugins: [],
};
