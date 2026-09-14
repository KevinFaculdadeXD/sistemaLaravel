import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                paper:  '#EFE7D6', // fundo — papel envelhecido
                ink:    '#2B2419', // texto — tinta escura
                forest: '#33443A', // navbar, superfícies — verde estante
                walnut: '#7A4B32', // bordas, divisores — marrom nogueira
                brass:  '#B08D4F', // destaques, foco — latão
                garnet: '#7C2D3A', // botões de ação — vermelho couro
            },
        },
    },

    plugins: [forms],
};