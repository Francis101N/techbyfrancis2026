
 window.addEventListener('DOMContentLoaded', function () {
    const welcomeModal = new bootstrap.Modal(document.getElementById('welcomeModal'), {
      backdrop: 'static',
      keyboard: false
    });
    welcomeModal.show();
  });
  
  
  document.addEventListener("DOMContentLoaded", function () {
    const secTwoLeft = document.querySelector(".sec-two-left");
    const observerOptions = {
      root: null,
      threshold: 0.5 
    };

    // Create an IntersectionObserver
    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          secTwoLeft.classList.add("visible");
          observer.unobserve(entry.target); 
        }
      });
    }, observerOptions);

    // Start observing the .sec-two-left element
    observer.observe(secTwoLeft);
  });

  document.addEventListener('DOMContentLoaded', function() {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('slide-in');
        }
      });
    });
    
    const image = document.querySelector('.second-cont img');
    observer.observe(image);
  });
  
   const cards = document.querySelectorAll('.blog-card');

   const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const card = entry.target;

        setTimeout(() => {
          card.classList.add('slide-in');

          // Wait 1 second after slide-in to start floating
          setTimeout(() => {
            card.classList.add('float');
          }, 1000);
        }, 500);

        observer.unobserve(card); 
      }
    });
  }, {
    threshold: 0.2
  });

  cards.forEach(card => {
    observer.observe(card);
  });

    function toggleOtherInput(selectElement) {
    const otherInput = document.getElementById('subject_other');
    if (selectElement.value === 'Other') {
      otherInput.style.display = 'block';
    } else {
      otherInput.style.display = 'none';
    }
  }

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