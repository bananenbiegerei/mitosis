import * as TW from './tailwindhelpers';
import Alpine from 'alpinejs';
// import Swiper JS
import Swiper from 'swiper/bundle';

window.Alpine = Alpine;
Alpine.start();


const swiper = new Swiper('.home-top-swiper', {
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});