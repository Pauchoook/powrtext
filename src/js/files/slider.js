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
        clickable: true,
      },
    });
  }

  const offerSlider = document.querySelector(".offer__slider");
  if (offerSlider) {
    const buttonsPagination = document.querySelectorAll(".offer__pagination-btn");
    const swiper = new Swiper(offerSlider, {
      speed: 700,
      modules: [Autoplay, Pagination],
      autoplay: true,
      grabCursor: true,
      slideToClickedSlide: true,
      spaceBetween: 10,
      pagination: {
        el: ".offer__slider-pagination",
        clickable: true,
        type: "custom",
        bulletClass: "offer__pagination-btn",
      },
      on: {
        init: () => {
          const firstBtnPagination = document.querySelector(".offer__pagination-btn");
          firstBtnPagination.classList.add("active");
        },
        slideChange: ({ activeIndex }) => {
          buttonsPagination.forEach((btn) => btn.classList.remove("active"));
          buttonsPagination[activeIndex].classList.add("active");
        },
      },
    });
  }

  const cooperationSlider = document.querySelector(".cooperation__slider");
  if (cooperationSlider) {
    const swiper = new Swiper(cooperationSlider, {
      speed: 700,
      modules: [Autoplay],
      autoplay: true,
      grabCursor: true,
      slidesPerView: "auto",
      spaceBetween: 30,
      breakpoints: {
        744: {
          spaceBetween: 50,
        }
      }
    });
  }
}
