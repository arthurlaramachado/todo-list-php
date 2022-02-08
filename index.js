window.onload = () => {
    let modal = document.getElementById("myModal");
    let addItemBtn = document.getElementById("add-item");
    let span = document.getElementById("modal-close-btn");

    // Opens modal
    addItemBtn.onclick = function () {
        modal.style.display = "block";
    }

    // Closes modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
}