var candlewick = document.getElementById("candlewick");

var smoke = document.getElementById("smoke");



setInterval(function() {

  candlewick.src = "candlewick_lit.jpg"; // Change l'image de la mèche allumée

  smoke.style.opacity = 1; // La fumée devient visible

  setTimeout(function() {

    candlewick.src = "candlewick.png"; // Change l'image de la mèche éteinte

    smoke.style.opacity = 0; // La fumée redevient invisible

  }, 1000 * 60 * 3); // 3 minutes pour que la mèche brûle

}, 1000 * 60 * 30); // 30 minutes pour réinitialiser la mèche