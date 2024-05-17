/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        screens: {
            esm: "415px",
            sm: "480px",
            es: "510px",
            md: "768px",
            lg: "976px",
            mlg: "1060px",
            xl: "1300px",
        },
        extend: {
            colors: {
                dark: "black",
                light: "white",
                whitesmoke: "rgba(245, 245, 245, 0.722)",
                blue: "rgb(32, 99, 201)",
                cyan: "rgb(12,43,122)",
                bluesmoke: "rgba(56, 23, 29, 0.561)",
                trans: "rgba(243, 243, 243, 0.822)",
                darkgrey: "rgb(80 80 80)",
            },
        },
    },
    plugins: [],
};
