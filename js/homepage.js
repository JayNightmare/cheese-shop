import confetti from "https://esm.run/canvas-confetti@1";


function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function (event) {
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

window.addEventListener('load', function () {
    document.querySelectorAll('.squares').forEach(card => {
        var cardPosition = card.getBoundingClientRect().top;
        var screenPosition = window.innerHeight;
        if (cardPosition < screenPosition) {
            card.classList.add('visible');
        }
    });



});

setTimeout(function () { confetti({ particleCount: 100, spread: 100, origin: { y: 0.6 }, zIndex: 0 }) }, 500);


// Search bar

// JavaScript code

function search_animal() {
    let input = document.getElementById("searchbar").value;
    input = input.toLowerCase();
    let x = document.getElementsByClassName("animals");

    for (i = 0; i < x.length; i++) {
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display = "none";
        } else {
            x[i].style.display = "list-item";
        }
    }
}
