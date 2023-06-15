//https://stackblitz.com/edit/daisyui-vue-vite-nmbyr6/?file=src%2FApp.vue,vite.config.js,tailwind.config.js
module.exports = {
    content: ['./src/**/*.{vue,js,ts}'],
    plugins: [require('daisyui')],
    daisyui: {
        themes: [
            {
                'storkmentor': {
                    'primary': '#f6623e',
                    'secondary': '#454545',
                    'ternary': '#61a6ab',
                    'accent': '#fff7c3',
                    'base-100': '#ffffff',
                    'info': '#2094f3',
                    'success': '#22B522',
                    'warning': '#ff9900',
                    'error': '#D54B21',
                },
                'storkmentor-dark': {
                    'primary': '#f6623e',
                    'secondary': '#454545',
                    'ternary': '#61a6ab',
                    'accent': '#fff7c3',
                    'base-100': '#454545',
                    'info': '#2094f3',
                    'success': '#61a6ab',
                    'warning': '#ff9900',
                    'error': '#ff5724',

                },
            },
        ],
    },
};
