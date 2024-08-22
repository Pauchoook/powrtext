import Swiper from "swiper";
import { EffectFade, Pagination, Autoplay } from "swiper/modules";
import "swiper/css";
import "swiper/css/effect-fade";

export default function slider() {
  const heroSlider = document.querySelector(".hero__slider");

  if (heroSlider) {
    const swiper = new Swiper(heroSlider, {
      speed: 700,
      modules: [Autoplay, EffectFade, Pagination],
      autoplay: true,
      grabCursor: true,
      slidesPerView: "auto",
      slideToClickedSlide: true,
      spaceBetween: 6,
      effect: "fade",
      fadeEffect: { crossFade: true },
      pagination: {
        el: ".hero__slider-pagination",
        clickable: true
      }
    });
  }
}
