import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";

export default function gallery() {
  Fancybox.bind('[data-fancybox="about-company"]', {});
  Fancybox.bind('[data-fancybox="gallery"]', {});
}
