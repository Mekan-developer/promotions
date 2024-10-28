import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
		'./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
		 './storage/framework/views/*.php',
		 './resources/**/*.blade.php',
		 './resources/**/**/*.blade.php',
		 './resources/**/*.js',
		 './resources/**/*.vue',
		 "./node_modules/flowbite/**/*.js",
		 "./vendor/robsontenorio/mary/src/View/Components/**/*.php"
	],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            filter: {
                'custom-gray': 'invert(60%) sepia(12%) saturate(3082%) hue-rotate(176deg) brightness(90%) contrast(90%)',
                'custom-white': 'invert(0%) sepia(12%) saturate(3082%) hue-rotate(176deg) brightness(90%) contrast(90%)',
            }
        },
    },
    plugins: [
		require('tailwindcss-filters'),
		require('flowbite/plugin'),
		require("daisyui")
	],
};
