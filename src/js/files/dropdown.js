export default function dropdown() {
  if (window.matchMedia('(min-width: 744px)').matches) {
    const buttons = document.querySelectorAll(".dropdown-btn");
    if (buttons.length) {
      buttons.forEach(btn => {
        btn.addEventListener("click", (e) => {
          e.stopPropagation();
  
          const parent = btn.closest(".dropdown");
          const dropdown = parent.querySelector(".dropdown__el");
  
          if(parent.classList.contains("open")) {
            closeDropdown();
          } else {
            dropdown.addEventListener("click", (e) => e.stopPropagation());
            parent.classList.add("open");
            dropdown.classList.add("open");
            document.addEventListener("click", closeDropdown);
          }
        });
      })
  
      function closeDropdown() {
        const currentParentDropdown = document.querySelector(".dropdown.open");
        if (currentParentDropdown) {
          const dropdown = currentParentDropdown.querySelector(".dropdown__el");
  
          currentParentDropdown.classList.remove("open");
          dropdown.classList.remove("open");
        }
        document.removeEventListener("click", closeDropdown);
      }
    }
  }
}