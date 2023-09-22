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
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                white: "#F9F9F9",
                gray: "#21242D",
                "gray-l": "#313541",
                "gray-d": "#16181E",
                "30%": "#00B9AE",
                "30%-d": "#07837b",
            },
        },
    },
};
