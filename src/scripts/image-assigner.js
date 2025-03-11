import brandLogo from '../assets/icons/logo.svg';
import linkedInLogo from '../assets/icons/linkedin.svg';
import twitterLogo from '../assets/icons/twitter.svg';
import telegramLogo from '../assets/icons/telegram.svg';

document.querySelectorAll('.logo__image').forEach(logoElement => logoElement.src = brandLogo);
document.querySelector('.linkedin').src = linkedInLogo;
document.querySelector('.twitter').src = twitterLogo;
document.querySelector('.telegram').src = telegramLogo;
