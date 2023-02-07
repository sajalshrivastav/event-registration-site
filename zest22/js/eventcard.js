const readMoreBtns = document.querySelectorAll(".btn");
const article = document.getElementById("article");
readMoreBtns.forEach((e) =>
  e.addEventListener("click", () => {
    e.parentNode.classList.toggle("active");
    if (e.textContent === "read less") {
      e.textContent = "read more";
    } else {
      e.textContent = "read less";
    }
  })
);
