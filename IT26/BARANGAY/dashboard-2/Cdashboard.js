const sidebar = document.querySelector('.sidebar');
const invi = document.querySelector('.invi-div');
const toggleBtn = document.querySelector('.toggle-btn');

toggleBtn.addEventListener('click', ()=>{
    sidebar.classList.toggle('active');
    invi.classList.toggle('active');
});

function getImagePreview(event)
{
  var image=URL.createObjectURL(event.target.files[0]);
  var imagediv= document.getElementById('preview');
  var newimg=document.createElement('img');
  imagediv.innerHTML='';
  newimg.src=image;
  imagediv.appendChild(newimg);
}