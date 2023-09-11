import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                inter: "'Roboto', sans-serif",
            },
            colors: {
                primary: "#161621",
                "primary-light": "#2B2B38",
                secondary: "#F74346",
                gray: "#4A4B56",
                white: "#F1F1F1",
            },
            boxShadow: {
                input: "inset 0 7px 4px #16153A",
            },
        },
    },

    plugins: [],
};
