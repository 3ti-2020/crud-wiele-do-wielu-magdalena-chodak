
document.addEventListener('DOMContentLoaded', () => {
    const todoList = document.querySelector('#todoList');
    const todoForm = document.querySelector('#todoForm');
    const todoSearch = document.querySelector('#todoSearch');
    const todoInput = todoForm.querySelector('input');

    function addTask(text) {
		console.log("Dodaję zadanie do listy");
       
    }

    todoForm.addEventListener('submit', e => {
        e.preventDefault();

        if (todoInput.value !== '') {
            addTask(todoInput.value);
            todoInput.value = '';
        }
    });

    todoList.addEventListener("click", e => {
        if (e.target.classList.contains("element-delete")) {
            e.target.closest(".element").remove();
        }
    });

    
});
