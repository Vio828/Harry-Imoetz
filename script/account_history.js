document.addEventListener("DOMContentLoaded", () => {
  const dayFilter = document.getElementById("dayFilter");
  const items = document.querySelectorAll(".item");

  function filterItems() {
    const selectedDays = parseInt(dayFilter.value, 10); // convert dropdown value to number
    items.forEach(item => {
      const itemDays = parseInt(item.dataset.days, 10); // convert item data-days to number
      if (itemDays <= selectedDays) {
        item.classList.remove("hidden");
      } else {
        item.classList.add("hidden");
      }
    });
  }

  dayFilter.addEventListener("change", filterItems);

  // initial filter on page load
  filterItems();
});
