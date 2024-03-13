import confetti from "https://esm.run/canvas-confetti@1";


function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
    if (!event.target.matches('.btn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains("show")) {
                openDropdown.classList.remove("show");
            }
        }
    }
}
  
window.addEventListener('load', function() {
    document.querySelectorAll('.squares').forEach(card => {
      var cardPosition = card.getBoundingClientRect().top;
      var screenPosition = window.innerHeight;
      if (cardPosition < screenPosition) {
        card.classList.add('visible');
    }
    });


    
}); 

setTimeout(function(){confetti({ particleCount: 100, spread: 100, origin: { y: 0.6 } })}, 500);