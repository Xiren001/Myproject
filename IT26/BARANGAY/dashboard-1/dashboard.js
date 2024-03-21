const sidebar = document.querySelector('.sidebar');
const invi = document.querySelector('.invi-div');
const condiv = document.querySelector('.contents-div');
const dashcon = document.querySelectorAll('.dashboard-content');
const toggleBtn = document.querySelector('.toggle-btn');

toggleBtn.addEventListener('click', ()=>{
    sidebar.classList.toggle('active');
    invi.classList.toggle('active');
    condiv.classList.toggle('active');
    
    dashcon.forEach(content => {
        content.classList.toggle('active');
      });
});