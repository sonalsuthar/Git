document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("serviceModal");
  const openModalBtn = document.getElementById("openModal");
  const closeModalBtn = document.getElementById("closeModal");

  // Open modal
  if (openModalBtn && modal) {
    openModalBtn.addEventListener("click", (e) => {
      e.preventDefault();
      modal.style.display = "flex";
      document.body.style.overflow = "hidden";
    });
  }

  // Close modal (X button)
  if (closeModalBtn && modal) {
    closeModalBtn.addEventListener("click", () => {
      modal.style.display = "none";
      document.body.style.overflow = "auto";
    });
  }

  // Close modal when clicking outside content
  window.addEventListener("click", (e) => {
    if (e.target === modal) {
      modal.style.display = "none";
      document.body.style.overflow = "auto";
    }
  });

  // Optional: add “Esc” key to close modal
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && modal.style.display === "flex") {
      modal.style.display = "none";
      document.body.style.overflow = "auto";
    }
  });
});


document.addEventListener("DOMContentLoaded", () => {
  const header = document.querySelector("header");
  window.addEventListener("scroll", () => {
    header.classList.toggle("scrolled", window.scrollY > 50);
  });

  // Smooth Scroll
  document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener("click", function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute("href")).scrollIntoView({
        behavior: "smooth"
      });
    });
  });
});

// Animation on Scroll
const faders = document.querySelectorAll(".animate-fadeInUp");  
const appearOptions = {
  threshold: 0,
  rootMargin: "0px 0px -100px 0px"
};  
const appearOnScroll = new IntersectionObserver(function(
  entries,
  appearOnScroll
) { {
  entries.forEach(entry => {
    if (!entry.isIntersecting) {  
      return;
    } else {
      entry.target.classList.add("fadeInUp");
      appearOnScroll.unobserve(entry.target);
    }
  });
}}, appearOptions);

faders.forEach(fader => {
  appearOnScroll.observe(fader);
});