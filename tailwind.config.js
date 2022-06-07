const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    mode: "jit",
    purge: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                gold: {
                    // DEFAULT: "#D4AF37",
                    DEFAULT: "#956C34",
                },
                orange: {
                    DEFAULT: "#B05118",
                },
            },
            boxShadow: {
                gray: "-10px -10px 0px 0px #F3F4F6",
                // gray: "-30px -30px 0px 0px #daddd3",
                // gold: "-30px -30px 0px 0px #D4AF37",
                gold: "-20px -20px 0px 0px #956C34",
                bottomRight: "20px 20px 0px 0px #956C34",
                bottomRightLight: "20px 20px 0px 0px rgba(149, 108, 52, .3)",
            },
        },
    },

    variants: {
        extend: {
            opacity: ["disabled"],
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
