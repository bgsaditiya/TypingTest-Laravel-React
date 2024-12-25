import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.jsx',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors:{
            'tailwind' : '#38BDF8',
            'react' : '#58C4DC',
            'laravel' : '#FF2D20',
            },
        },
        // colors:{
        //     'mainBackground' : '#0f0f0f',
        // },
    },
    plugins: [],
};
