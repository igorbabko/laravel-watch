/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        container: {
            center: true,
            // padding: "2rem",
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
        // ...
    ],
};
