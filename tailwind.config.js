/** @type {import('tailwindcss').Config} */
import preset from "./vendor/filament/support/tailwind.config.preset";
import defaultTheme from "tailwindcss/defaultTheme";
import plugin from "tailwindcss/plugin";

export default {
    presets: [preset],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./app/Filament/**/*.php",
        "./resources/views/filament/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
    ],

    theme: {
        extend: {
            lineHeight: {
                DEFAULT: "18px",
            },
            backgroundImage: {
                "header-gradient":
                    "linear-gradient(black,rgba(0,0,0,.9),rgba(0,0,0,.8),rgba(0,0,0,.8),rgba(0,0,0,.75),rgba(0,0,0,.75),rgba(0,0,0,.7),rgba(0,0,0,.6),rgba(0,0,0,.5),rgba(0,0,0,.4),rgba(0,0,0,.3),rgba(0,0,0,.2),rgba(0,0,0,.1),rgba(0,0,0,0))",
                "arrow-black-right":
                    "url('/resources/icons/arrow-black-right.svg')",
            },
            colors: {
                black: "#262626",
                cream: '#FAF6EE',
                primary: '#005c4d',
                hover:'#0f2e29',
            },
        },
        fontFamily: {
            sans: ["Fund", "sans-serif"],
        },
        fontSize: {
            ...defaultTheme.fontSize,
            sm: [defaultTheme.fontSize.sm[0], "1.125rem"],
            'field-title': ['2.625em', {
                lineHeight: '54px',
                letterSpacing: '-0.3px',
                fontWeight: '400',
            }],
            'field-subtitle': ['1.25em', {
                lineHeight: '30px',
                letterSpacing: '0.6px',
                fontWeight: '400',
            }],
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        function ({ addBase }) {
            addBase({
                html: {
                    color: "#262626",
                },
            });
        },
    ],
};
