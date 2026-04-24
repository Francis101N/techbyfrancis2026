
  document.addEventListener("DOMContentLoaded", function () {
    const slideElements = document.querySelectorAll('.slide-left');

    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          obs.unobserve(entry.target); // Stop observing once it's visible
        }
      });
    }, { threshold: 0.3 });

    slideElements.forEach(el => observer.observe(el));
  });


  document.querySelector("form").addEventListener("submit", function () {
    setTimeout(function () {
      document.getElementById("cv_password").value = "";
    }, 1); // Wait just enough for server redirect or form process
  });



// CV DOWNLOAD
 document.getElementById('cvForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const password = document.getElementById('cv_password').value;
    const correctPassword = '197200';
    const errorMsg = document.getElementById('errorMsg');

    if (password === correctPassword) {
      // Hide error
      errorMsg.style.display = 'none';

      // Trigger download
      const link = document.createElement('a');
      link.href = 'FILES/francis cv.docx'; 
      link.download = 'francis N cv.docx';
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);

      // Clear input
      document.getElementById('cv_password').value = '';
    } else {
      // Show error
      errorMsg.textContent = 'Incorrect password. Access denied.';
      errorMsg.style.display = 'block';

      // Refocus the input field
      document.getElementById('cv_password').focus();
    }
      setTimeout(() => {
        errorMsg.textContent = '';
      }, 5000);
  });

  // RESUME DOWNLOAD
 document.getElementById('resumeForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const password = document.getElementById('resume_password').value;
    const correctPassword = '197200';
    const errorMsg = document.getElementById('errorMsg2');

    if (password === correctPassword) {
      // Hide error
      errorMsg.style.display = 'none';

      // Trigger download
      const link = document.createElement('a');
      link.href = 'FILES/Francis Nwankwo CV.pdf'; 
      link.download = 'Francis Nwankwo CV.pdf';
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);

      // Clear input
      document.getElementById('resume_password').value = '';
    } else {
      // Show error
      errorMsg.textContent = 'Incorrect password. Access denied.';
      errorMsg.style.display = 'block';

      // Refocus the input field
      document.getElementById('resume_password').focus();
    }
      setTimeout(() => {
        errorMsg.textContent = '';
      }, 5000);
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
