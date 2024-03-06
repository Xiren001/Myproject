const wrapper = document.querySelector(".wrapper");
const wrappers = document.querySelector(".wrappers");
const loginLink = document.querySelector(".login-link");
const registerLink = document.querySelector(".register-link");
const btnPopup = document.querySelector(".btnLogin-popup");
const btnPopupContact = document.querySelector(".btnContact-popup");
const iconClose = document.querySelector(".icon-close");
const closes = document.querySelector(".closes");

function clearContact(){
  const formContact = document.getElementById('con-form');
  formContact.submit();
  formContact.reset();
}
registerLink.addEventListener("click", () => {
  wrapper.classList.add("active");
});
loginLink.addEventListener("click", () => {
  wrapper.classList.remove("active");
});
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

