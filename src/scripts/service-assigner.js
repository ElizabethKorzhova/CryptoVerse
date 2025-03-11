import resourceImage1 from '../assets/images/resource1.png';
import resourceImage2 from '../assets/images/resource2.png';
import resourceImage3 from '../assets/images/resource3.png';

const images = [
    { 
        title: 'Crypto Basics',
        image: resourceImage1,
        description: `Learn the fundamentals of cryptocurrency and blockchain technology. We'll explain what cryptocurrencies are, how they work, and the underlying technology that makes them secure and decentralized.`,
    }, 
    { 
        title: 'Investing and Trading',
        image: resourceImage2,
        description: `Discover the strategies and tools you need to invest and trade cryptocurrencies effectively. From understanding market trends and managing risk to using trading platforms and analyzing charts, we'll equip you with the knowledge to make informed investment decisions.`,
    }, 
    { 
        title: 'Blockchain Applications',
        image: resourceImage3,
        description: `Explore the diverse applications of blockchain technology beyond cryptocurrencies. Understand how blockchain is revolutionizing industries such as finance, supply chain management, healthcare, and more. Uncover the potential for decentralized applications and smart contracts.`,
    }, 
]

const slides = document.querySelectorAll(".slider__item");

slides.forEach((slide, index) => {
    const slideNumber = slide.querySelector(".slider__number");
    const slideImage = slide.querySelector(".slider__image");
    const slideTitle = slide.querySelector(".slider__title");
    const slideDescription = slide.querySelector(".slider__description");

    const relevantData = images[index % images.length];

    const number = (index + 1  > 9) ? (index + 1) : ('0' + (index + 1));

    slideNumber.textContent = number;
    slideImage.src = relevantData.image;
    slideTitle.textContent = relevantData.title;
    slideDescription.textContent = relevantData.description;
});
