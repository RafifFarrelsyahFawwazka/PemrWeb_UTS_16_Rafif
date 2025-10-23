
document.addEventListener('DOMContentLoaded', () => {
    console.log("Halaman web Infinix telah dimuat!");
});


const modal = document.getElementById('productModal');
const modalTitle = document.getElementById('modalTitle');
const modalDescription = document.getElementById('modalDescription');
const modalProductImage = document.getElementById('modalProductImage');



function showProductDetail(title, description, imagePath) {
    modalTitle.textContent = title;
    modalDescription.textContent = description;
    
    modalProductImage.src = imagePath;
    modalProductImage.alt = title;
    
    modal.style.display = 'block';
}




function closeModal() {
    modal.style.display = 'none';
}

window.onclick = function(event) {
    if (event.target == modal) {
        closeModal();
    }
}