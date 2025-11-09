// ================= MODAL FUNCTIONALITY =================
const modal = document.getElementById("serviceModal");
const openModal = document.getElementById("openModal");
const closeModal = document.getElementById("closeModal");

openModal.onclick = () => {
  modal.classList.add("show");
};

closeModal.onclick = () => {
  modal.classList.remove("show");
};

window.onclick = (e) => {
  if (e.target === modal) {
    modal.classList.remove("show");
  }
};

// Optional: Smooth header scroll class
window.addEventListener("scroll", () => {
  document.getElementById("header").classList.toggle("scrolled", window.scrollY > 40);
});

// header scroll handler
(function(){
  const header = document.querySelector('header');
  const hero = document.querySelector('.hero');
  const openModalBtn = document.getElementById('openModal');
  const modal = document.getElementById('serviceModal');
  const closeModal = document.getElementById('closeModal');

  function onScroll(){
    if(window.scrollY > 30) header.classList.add('scrolled');
    else header.classList.remove('scrolled');
  }
  document.addEventListener('scroll', onScroll, {passive:true});
  onScroll();

  // Modal open/close
  if(openModalBtn && modal){
    openModalBtn.addEventListener('click', e=>{
      e.preventDefault();
      modal.classList.add('show');
      document.body.style.overflow = 'hidden';
    });
  }
  if(closeModal){
    closeModal.addEventListener('click', ()=>{
      modal.classList.remove('show');
      document.body.style.overflow = '';
    });
  }
  // close modal on overlay click
  if(modal){
    modal.addEventListener('click', (ev)=>{
      if(ev.target === modal){
        modal.classList.remove('show');
        document.body.style.overflow = '';
      }
    });
  }

  // Floating labels: toggle "valid" state based on input value
  document.querySelectorAll('.input-group input, .input-group textarea').forEach(inp=>{
    function check(){
      if(inp.value && inp.value.trim() !== '') inp.classList.add('has-value');
      else inp.classList.remove('has-value');
    }
    inp.addEventListener('input', check);
    inp.addEventListener('blur', check);
    // init
    check();
  });
})();
