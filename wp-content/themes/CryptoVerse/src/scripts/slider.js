import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules'
import 'swiper/css';
import 'swiper/css/pagination';

const swiper = new Swiper('.slider', {
    loop: false,
    slidesPerView: 1,
    spaceBetween: 20,
    centeredSlides: true,
    modules: [Navigation, Pagination],
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        600: {
            slidesPerView: 1,
            spaceBetween: 32,
            centeredSlides: false,
        },
        900: {
            slidesPerView: 2, 
            spaceBetween: 32,
            centeredSlides: false,
        },
        1300: { 
            slidesPerView: 3, 
            spaceBetween: 32,
            centeredSlides: false,
        },
    },
});