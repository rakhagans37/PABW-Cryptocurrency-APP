/** @type {import('tailwindcss').Config} */
module.exports = {
    plugins: [require("flowbite/plugin")],
    content: ["./**/*.{php,html,js}"],
    theme: {
        extend: {
            colors: {
                background: "#0C0A1E",
                secondaryBg: "#1F1B33",
                thirdBg: "#2D2D35",
                barColor: "#7F31FF",
                greenCustom: "#14C784",
                grayText: "#C0B5B5",
                redCustom: "#CE0000",
            },
        },
        fontFamily: {
            sans: ["Inter", "sans-serif"],
            sora: ["Sora", "sans-serif"],
        },
    },
    plugins: [],
};
