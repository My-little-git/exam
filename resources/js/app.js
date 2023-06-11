import './bootstrap';

import.meta.glob([
    '../images/**',
    '../fonts/**',
]);

const authCarouselElement = document.getElementById('authCarousel');
const authCarousel = new bootstrap.Carousel(authCarouselElement, {});

const nextButtons = document.querySelectorAll('.next-slide');
const prevButtons = document.querySelectorAll('.prev-slide');


nextButtons.forEach(button => {
    button.addEventListener('click', e => {
        const activeTab = document.querySelector('.active.carousel-item');
        const inputs = activeTab.querySelectorAll('input');

        let errors = 0;

        inputs.forEach(input => {

            if (!input.checkValidity()){
                input.classList.add('is-invalid');
                input.value = '';
                errors++
                input.addEventListener('input', e => {
                    input.classList.remove('is-invalid');
                })
            }
        })

        if (!errors){
            authCarousel.next();
        }
    });
});

prevButtons.forEach(button => {
    button.addEventListener('click', e => {
        authCarousel.prev();
    });
});
