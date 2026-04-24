  const percentageText = document.getElementById('percentage');
    let count = 1;
    const speed = 50; // Lower is faster

    const counter = setInterval(() => {
      if (count <= 100) {
        percentageText.textContent = count + '%';
        count++;
      } else {
        clearInterval(counter);
      }
    }, speed);