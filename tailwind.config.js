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
                inter: "'Inter', sans-serif",
            },
            colors: {
                primary: "#31305F",
                "primary-dark": "#1C1C45",
                "primary-light": "#393868",
                text: "#5B598E",
                border: "#424171",
            },
            backgroundImage: {
                login: "url(../../../public/images/background.png)",
            },
            boxShadow: {
                input: "inset 0 7px 4px #16153A",
            },
        },
    },

    plugins: [],
};
