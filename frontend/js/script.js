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

//Count up
document.addEventListener("DOMContentLoaded", () => {
  const hero = document.querySelector(".hero-left");
  const counters = document.querySelectorAll(".value");

  hero.addEventListener("animationend", startCounter, { once: true });

  function startCounter() {
    counters.forEach(counter => {
      const target = +counter.dataset.target;
      const duration = 2000;
      const startTime = performance.now();

      function update(now) {
        const progress = Math.min((now - startTime) / duration, 1);
        counter.textContent = Math.floor(progress * target);
        if (progress < 1) requestAnimationFrame(update);
      }

      requestAnimationFrame(update);
    });
  }
});

// Main Visual Slider
const slides = document.querySelectorAll(".main-visual-slide");
let current = 0;
setTimeout(() => {
  setInterval(() => {
    slides[current].classList.remove("is-active");
    current = (current + 1) % slides.length;
    slides[current].classList.add("is-active");
  }, 4000);
}, 4000);


// FAQメニュー開閉
document.querySelectorAll(".faq-question").forEach(button => {
  button.addEventListener("click", () => {
    const item = button.parentElement;
    item.classList.toggle("active");
  });
});
