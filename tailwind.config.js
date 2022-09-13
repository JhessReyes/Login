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

// module.exports = {
 //   content: [
  //    "./resources/**/*.blade.php",
 //     "./resources/**/*.js",
  //    "./resources/**/*.vue",
  //    "./node_modules/flowbite/**/*.js",
  //  ],
//theme: {
  //    extend: {},
  //  },
//plugins: [require("daisyui"), require('flowbite/plugin')],
 // } */