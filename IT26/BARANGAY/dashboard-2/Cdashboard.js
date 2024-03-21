const sidebar = document.querySelector('.sidebar');
const invi = document.querySelector('.invi-div');
const toggleBtn = document.querySelector('.toggle-btn');

toggleBtn.addEventListener('click', ()=>{
    sidebar.classList.toggle('active');
    invi.classList.toggle('active');
});
