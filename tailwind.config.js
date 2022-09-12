module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            maxHeight: {
                128: "32rem",
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [require("daisyui")],
};
