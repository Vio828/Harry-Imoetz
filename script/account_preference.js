window.addEventListener("load", () => {
  const inputContainers = document.querySelectorAll(".add");

  inputContainers.forEach(container => {
    const input = container.querySelector(".isi1 input");
    const button = container.querySelector(".kotaks button");

    button.addEventListener("click", () => {
      const value = input.value.trim();
      if (!value) return;

      const parentFont = container.previousElementSibling;
      const savedContainer = document.querySelector(".kotak3");
      const pElements = savedContainer.querySelectorAll("p");

      if (parentFont.classList.contains("font1")) {
        const headingText = parentFont.querySelector("h3").textContent;

        if (headingText.includes("Default Delivery Address")) {
          pElements[0].textContent = value; 
        } else if (headingText.includes("Drop-Off Instructions")) {
          pElements[1].textContent = value; 
        } else if (headingText.includes("Packaging Request")) {
          pElements[2].textContent = value; 
        }
      }

      input.value = ""; 
    });
  });
});
