const wrapper = document.querySelector(".wrapper");
const wrappers = document.querySelector(".wrappers");
const btnPopup = document.querySelector(".btnLogin-popup");
const btnPopupContact = document.querySelector(".btnContact-popup");
const iconClose = document.querySelector(".icon-close");
const closes = document.querySelector(".closes");

function clearContact(){
  const formContact = document.getElementById('con-form');
  formContact.submit();
  formContact.reset();
}

btnPopup.addEventListener("click", () => {
  wrapper.classList.add("active-popup");
  wrappers.classList.remove("active-popup");
});
btnPopupContact.addEventListener("click", () => {
  wrappers.classList.add("active-popup");
  wrapper.classList.remove("active-popup");
});
iconClose.addEventListener("click", () => {
  wrapper.classList.remove("active-popup");
});
closes.addEventListener("click", () => {
  wrappers.classList.remove("active-popup");
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
function getImagePreview1(event)
{
  var image=URL.createObjectURL(event.target.files[0]);
  var imagediv= document.getElementById('preview1');
  var newimg=document.createElement('img');
  imagediv.innerHTML='';
  newimg.src=image;
  imagediv.appendChild(newimg);
}

