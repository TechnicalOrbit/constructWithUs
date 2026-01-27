const cursor = document.querySelector(".cursor");
const cursorDot = document.querySelector(".cursor-dot");

document.addEventListener("mousemove", (e) => {
  cursor.style.left = e.clientX + "px";
  cursor.style.top = e.clientY + "px";

  cursorDot.style.left = e.clientX + "px";
  cursorDot.style.top = e.clientY + "px";
});

/* Focus effect on links & buttons */
document.querySelectorAll("a, button").forEach((el) => {
  el.addEventListener("mouseenter", () => {
    outline.classList.add("active");
  });

  el.addEventListener("mouseleave", () => {
    outline.classList.remove("active");
  });
});
