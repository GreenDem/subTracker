let deleteModal = document.querySelectorAll('.deleteModal')
let deleteModal1 = document.querySelectorAll('.deleteModal1')
let deleteModal2 = document.querySelectorAll('.deleteModal2')
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
deleteModal1.forEach(trash => {
    trash.addEventListener('click', (e) =>{
        let bob =JSON.parse(e.target.parentElement.dataset.category)
        deleteModalName.innerText = bob.category
        deleteModalhref.href = '/../index.php?action=catDeleted&id=' + bob.idCategory
    })
})
deleteModal2.forEach(trash => {
    trash.addEventListener('click', (e) =>{
        let bob =JSON.parse(e.target.parentElement.dataset.rate)
        deleteModalName.innerText = bob.rates
        deleteModalhref.href = '/../index.php?action=rateDeleted&id=' + bob.idRate
    })
})
