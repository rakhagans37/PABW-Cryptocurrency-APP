/** @type {import('tailwindcss').Config} */
module.exports = {
    plugins: [require("flowbite/plugin")],
    content: ["./**/*.{php,html,js}"],
    theme: {
        extend: {
            colors: {
                background: "#0C0A1E",
                secondaryBg: "#1F1B33",
                barColor: "#7F31FF",
            },
        },
        fontFamily: {
            sans: ["Inter", "sans-serif"],
            sora: ["Sora", "sans-serif"],
        },
    },
    plugins: [],
};
