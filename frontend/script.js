// spメニュー開閉
const hamburger = document.getElementById("hamburger");
const spMenu = document.getElementById("spMenu");
hamburger?.addEventListener("click", () => {
  spMenu.classList.toggle("is-open");
});
// メニュー押したら閉じる
spMenu?.querySelectorAll("a").forEach((a) => {
  a.addEventListener("click", () => spMenu.classList.remove("is-open"));
});

// Main Visual Slider
const slides = document.querySelectorAll(".main-visual-slide");
let current = 0;
setTimeout(() => {
  setInterval(() => {
    slides[current].classList.remove("is-active");
    current = (current + 1) % slides.length;
    slides[current].classList.add("is-active");
  }, 5000);
}, 5000);


// FAQメニュー開閉
document.querySelectorAll(".faq-question").forEach(button => {
  button.addEventListener("click", () => {
    const item = button.parentElement;
    item.classList.toggle("active");
  });
});
