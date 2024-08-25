import noUiSlider from "nouislider";
import "nouislider/dist/nouislider.css";

export default function range() {
  const slider = document.getElementById("range-price");
  const minPrice = document.getElementById("min-price");
  const maxPrice = document.getElementById("max-price");

  if (slider) {
    noUiSlider.create(slider, {
      start: [0, 10000],
      setp: 1,
      connect: true,
      range: {
        min: 0,
        max: 10000,
      },
    });
    slider.noUiSlider.on("update", (values, handle) => {
      const [min, max] = values;
      minPrice.value = Math.round(min);
      maxPrice.value = Math.round(max);
    });
  }
}
