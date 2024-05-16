/** @type {import('tailwindcss').Config} */
module.exports = {
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
