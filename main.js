'use strict';
const switcher = document.querySelector('.btn-theme');
switcher.addEventListener('click', function() {
    document.body.classList.toggle('dark-theme');
    document.body.classList.toggle('light-theme');

const className = document.body.className;
if (className == "light-theme") {
this.textContent = "Escuro";
} else {
    this.textContent = "Claro";
}
console.log('current class name: ' + className);
});