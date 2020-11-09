
const modal = document.querySelector('#my-modal');
const modalBtn = document.querySelector('#modal-btn');
const closeBtn = document.querySelector('.close');

//open
modalBtn.addEventListener('click', openModal)
function openModal() {
    modal.style.display = 'block';
  };
  
  //close
closeBtn.addEventListener('click', closeModal)
function closeModal() {
    modal.style.display = 'none';
  };

window.addEventListener('click', outsideClick)
function outsideClick(e) {
    if (e.target == modal) {
      modal.style.display = 'none';
    }
  };









