function search_animal() {
    let input = document.getElementById("searchbar").value;
    input = input.toLowerCase();
    let x = document.getElementsByClassName("cheeses");

    // Check if the input is empty and hide all elements if it is
    if (input === '') {
        for (let i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        return; // Exit the function early
    }

    for (let i = 0; i < x.length; i++) {
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display = "none";
        } else {
            x[i].style.display = "list-item";
        }
    }
}
