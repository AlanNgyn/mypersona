/******/ (() => { // webpackBootstrap
/*!*******************************!*\
  !*** ./resources/js/modal.js ***!
  \*******************************/
var modal = document.getElementById('myModal');
var span = document.getElementsByClassName('close')[0];
if (!localStorage.getItem('modalShown')) {
  modal.style.display = "block";
  localStorage.setItem('modalShown', 'true');
}
window.onclick = function (event) {
  if (event.target === modal) {
    modal.style.display = "none";
  }
};
/******/ })()
;