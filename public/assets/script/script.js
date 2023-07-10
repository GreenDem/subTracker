let images = document.querySelectorAll('.card')

images.forEach(image => {
    image.addEventListener('mouseover', () => {
        image.style.scale = '1.2'
    })
    image.addEventListener('mouseleave', () => {
        image.style.scale = '1'
    })
}
)

let deleteModal = document.querySelectorAll('.deleteModal')
let deleteModalInfo = document.querySelector('dataDelete')
let deleteModalName = document.getElementById('modalName')
let deleteModalhref = document.getElementById('href')


deleteModal.forEach(trash => {
    trash.addEventListener('click', (e) =>{
        let bob =JSON.parse(e.target.parentElement.dataset.user)
        deleteModalName.innerText = bob.lastname + ' '+ bob.firstname
        deleteModalhref.href = '/../index.php?action=aDeleted&id=' + bob.idUser
    })
})
