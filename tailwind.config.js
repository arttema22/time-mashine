import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'primary-50': 'lab(97.3623% -2.33802 -4.13098)',
                'primary-100': 'lab(94.3709% -4.56053 -8.23453)',
                'primary-200': 'lab(86.017% 19.8815 7.75869)',
                'primary-300': 'lab(76.5514% 36.422 15.5335)',
                'primary-400': 'lab(63.7053% 60.745 31.3109)',
                'primary-500': 'lab(63.3038% -18.433 -51.0407)',
                'primary-600': 'lab(48.4493% 77.4328 61.5452)',
                'primary-700': 'lab(40.4273% 67.2623 53.7441)',
                'primary-800': 'lab(33.7174% 55.8993 41.0293)',
                'primary-900': 'lab(28.5139% 44.5539 29.0463)',
                'primary-950': 'lab(13.003% 29.04 16.7519)',
            },
        },
    },

    plugins: [forms, typography],
};
