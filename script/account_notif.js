const dayFilter = document.getElementById("dayFilter");
const testimonies = document.querySelectorAll(".testimonies1, .testimonies2");

dayFilter.addEventListener("change", () => {
    const selected = dayFilter.value;
    let maxDays = 3;

    if (selected.includes("5")) maxDays = 5;
    if (selected.includes("10")) maxDays = 10;

    testimonies.forEach(testimony => {
        const days = parseInt(testimony.getAttribute("data-days"));
        if (days <= maxDays) {
            testimony.style.display = "block";
        } else {
            testimony.style.display = "none";
        }
    });
});

dayFilter.dispatchEvent(new Event("change"));
