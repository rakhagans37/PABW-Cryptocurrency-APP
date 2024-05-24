/** @type {import('tailwindcss').Config} */
module.exports = {
    plugins: [require("flowbite/plugin")],
    content: ["./**/*.{php,html,js}"],
    theme: {
        extend: {
            colors: {
                background: "#0C0A1E",
            },
        },
        fontFamily: {
            sans: ["Inter", "sans-serif"],
            sora: ["Sora", "sans-serif"],
        },
    },
    plugins: [],
};
