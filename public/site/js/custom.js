AOS.init({
  once: true,
});

function animateCounter(pElement) {
  const target = +pElement.getAttribute("data-target");
  let current = 0;
  const increment = target / 50;

  const updateCounter = () => {
    current += increment;
    if (current < target) {
      pElement.textContent = Math.ceil(current);
      requestAnimationFrame(updateCounter);
    } else {
      pElement.textContent = `+${target}`;
    }
  };

  updateCounter();
}

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const pElement = entry.target.querySelector("p");
        animateCounter(pElement);
        observer.unobserve(entry.target);
      }
    });
  },
  { threshold: 0.5 }
);

const numericElement = document.querySelector(".numeric");
if (numericElement) {
  observer.observe(numericElement);
}

// responsive menu

document.querySelector(".res-menu").addEventListener("click", () => {
  document.querySelector(".overlay").classList.add("show");
  document.querySelector(".responsive-menu").classList.add("show");
});

document.querySelector(".overlay").addEventListener("click", () => {
  document.querySelector(".overlay").classList.remove("show");
  document.querySelector(".responsive-menu").classList.remove("show");
});

document.querySelector(".close-menu").addEventListener("click", () => {
  document.querySelector(".overlay").classList.remove("show");
  document.querySelector(".responsive-menu").classList.remove("show");
});
