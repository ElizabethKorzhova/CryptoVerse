import { gsap } from "gsap";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";

gsap.registerPlugin(ScrollToPlugin);

const animateScroll = (startItem, endItem) => {
    startItem.addEventListener('click', (e) => {
        e.preventDefault();
        gsap.to(window, {
            duration: 3, 
            scrollTo: endItem,
            autoKill: false,
            });
        });
};

document.addEventListener('DOMContentLoaded', ()=> {
    const links =  [...document.querySelectorAll('.scroll-item')];
    
    links.forEach((link)=> {
        const linkAnchor = link.getAttribute('href');

        if (linkAnchor.split('')[0] !== '#') return;

        animateScroll(link, linkAnchor);
    });
});

gsap.fromTo('.intro__background', { scale: 1.5 }, { scale: 1, duration: 3 });

document.addEventListener('mousemove', (e) => {
    e.preventDefault();
    
    const mouseX = event.clientX;
    const mouseY = event.clientY;
    
    const offsetX = mouseX - window.innerWidth / 2;
    const offsetY = mouseY - window.innerHeight / 2;
    
    const speedX = offsetX / 80; 
    const speedY = offsetY / 80;  
    
    gsap.to('.intro__background', {
        x: speedX,
        y: speedY,
        duration: 0.5,
        ease: 'power2.out' 
    });
});
