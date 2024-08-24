export default function navFilter() {
  const btnFilter = document.querySelector("#btn-filter");
  const closeFilter = document.querySelector("#close-filter")
  const filter = document.querySelector("#filter");

  btnFilter.addEventListener("click", (e) => {
    e.stopPropagation();

    filter.classList.add("open");
      
    document.body.classList.add("body-hidden");
    filter.addEventListener("click", (e) => e.stopPropagation());
    document.body.addEventListener("click", handleClose);
  });

  closeFilter.addEventListener("click", handleClose);

  function handleClose() {
    filter.classList.remove("open");
    document.body.classList.remove("body-hidden");

    document.body.removeEventListener("click", handleClose);
  }
}