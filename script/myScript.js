const openModalButtons = document.querySelectorAll('[data-modal-target]')
const closeModalButtons = document.querySelectorAll('[data-close-button]')
const overlay = document.getElementById('overlay')

openModalButtons.forEach(button => {
    button.addEventListener('click', () => {
        const modal = document.querySelector(button.dataset.modalTarget)
        openModal(modal)
    })
})

closeModalButtons.forEach(button => {
    button.addEventListener('click', () => {
        const modal = button.closest('.add-modal-box')
        closeModal(modal)
    })
})

function openModal(modal){
    if (modal == null) return
    modal.classList.add('active')
    overlay.classList.add('active')
}

function closeModal(modal){
    if (modal == null) return
    modal.classList.remove('active')
    overlay.classList.remove('active')
}

// ------- EDIT MODAL --------

const openEditButtons = document.querySelectorAll('[data-edit-open-button]')
const closeEditButtons = document.querySelectorAll('[data-edit-close-button]')
const overlay2 = document.getElementById('overlay')


openEditButtons.forEach(button => {
    button.addEventListener('click', () => {
        const modal2 = document.querySelector(button.dataset.editOpenButton)
        openModal2(modal2)
    })
})

closeEditButtons.forEach(button => {
    button.addEventListener('click', () => {
        const modal2 = button.closest('.edit-modal-box')
        closeModal2(modal2)
    })
})

function openModal2(modal2){
    if (modal2 == null) return
    modal2.classList.add('active')
    overlay2.classList.add('active')
}

function closeModal2(modal2){
    if (modal2 == null) return
    modal2.classList.remove('active')
    overlay2.classList.remove('active')
}

// ---- DELETE MODAL ----


const openDeleteButtons = document.querySelectorAll('[data-delete-open-button]')
const closeDeleteButtons = document.querySelectorAll('[data-delete-close-button]')
const overlay3 = document.getElementById('overlay')


openDeleteButtons.forEach(button => {
    button.addEventListener('click', () => {
        const modal3 = document.querySelector(button.dataset.deleteOpenButton)
        openModal2(modal3)
    })
})

closeDeleteButtons.forEach(button => {
    button.addEventListener('click', () => {
        const modal3 = button.closest('.delete-modal-box')
        closeModal3(modal3)
    })
})

function openModal3(modal3){
    if (modal3 == null) return
    modal3.classList.add('active')
    overlay3.classList.add('active')
}

function closeModal3(modal3){
    if (modal3 == null) return
    modal3.classList.remove('active')
    overlay3.classList.remove('active')
}
























