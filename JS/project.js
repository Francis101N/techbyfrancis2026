   window.addEventListener('DOMContentLoaded', function () {
    const welcomeModal = new bootstrap.Modal(document.getElementById('welcomeModal'), {
      backdrop: 'static',
      keyboard: false
    });
    welcomeModal.show();
  });
  
  window.addEventListener('DOMContentLoaded', () => {
    setTimeout(() => {
      const articles = document.querySelectorAll('.animated-article');
      articles.forEach((article, index) => {
        // Add a staggered delay if desired
        setTimeout(() => {
          article.classList.add('slide-in-left');
        }, index * 200); 
      });
    }, 2000); 
  });

   const backToTop = document.getElementById("backToTop");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 300) {
      backToTop.classList.add("show");
    } else {
      backToTop.classList.remove("show");
    }
  });

  backToTop.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });