
    const modal = document.getElementById("serviceModal");
    const openModal = document.getElementById("openModal");
    const closeModal = document.getElementById("closeModal");

    openModal.onclick = () => modal.style.display = "flex";
    closeModal.onclick = () => modal.style.display = "none";
    window.onclick = (e) => { if (e.target === modal) modal.style.display = "none"; };

    window.addEventListener("scroll", () => {
      document.getElementById("header").classList.toggle("scrolled", window.scrollY > 40);
    });
