const burgerButton = document.querySelector('.burger');
const header =  document.querySelector('.header');

burgerButton.addEventListener('click', (e) => {
    e.preventDefault();
    burgerButton.classList.toggle('opened');
    header.classList.toggle('opened');
})
