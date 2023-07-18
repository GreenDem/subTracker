// Get the modal
var modal = document.getElementById("myModal");
// Get the button that opens the modal
var btn = document.querySelectorAll(".modalBtn");
// Get the <span> element that closes the modal
var dismiss = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.forEach(modal => {
modal.onclick = function () {
}})

// When the user clicks on close (x), close the modal
dismiss.onclick = function () {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
} 

let deleteModalSub = document.querySelectorAll('.modal-content')
let deleteModalSubName = document.getElementById('modalSubName')
let deleteModalSubHref = document.getElementById('href')


btn.forEach(trash => {
    trash.addEventListener('click', (e) =>{
        modal.style.display = "block";
        let bob =JSON.parse(e.target.parentElement.dataset.sub)
        deleteModalSubName.innerText = bob.label
        deleteModalSubHref.href = '/../index.php?action=subdeletedYes&id=' + bob.idSubscription
    })
})
