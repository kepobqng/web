function openModal() {
    const modal = document.getElementById("loveModal");
    const content = modal.querySelector(".modal-content");
  
    modal.style.display = "block";
  
    content.classList.remove("animate-in");
    void content.offsetWidth;
    content.classList.add("animate-in");
  }
  
  function closeModal() {
    document.getElementById("loveModal").style.display = "none";
  }

  function openGalleryModal() {
    const modal = document.getElementById("galleryModal");
    const content = modal.querySelector(".modal-content");
  
    modal.style.display = "block";
  
    content.classList.remove("animate-in");
    void content.offsetWidth; // Trigger reflow
    content.classList.add("animate-in");
  }
  
  function closeGalleryModal() {
    document.getElementById("galleryModal").style.display = "none";
  }
  
  
  window.onclick = function(event) {
    const modal = document.getElementById("loveModal");
    const galleryModal = document.getElementById("galleryModal");
    if (event.target == modal) {
      modal.style.display = "none";
      if (event.target == galleryModal) galleryModal.style.display = "none";
}

    }
  


  

  