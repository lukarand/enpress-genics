import 'popper.js';
import 'bootstrap/js/dist/util';
import 'bootstrap/js/dist/collapse';
import 'bootstrap/js/dist/dropdown';
import Carousel from './carousel';
import CardIcon from './card-icon';

const cardIcon = new CardIcon('.card-icon');
cardIcon.init();

const testimonials = new Carousel('.carousel-testimonials', {
  centerMode: true,
  spaceBetween: 30,
  loop: true,
  centerSlides: true,
  variableWidth: true,
  dots: true
});
testimonials.init();
