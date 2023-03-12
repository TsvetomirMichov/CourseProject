let menu = document.querySelector('.menu');
let nav = document.querySelector('.navbar');
let close = document.querySelector('.close');

let account_btn = document.querySelector('.account-btn');
let dropdown = document.querySelector('.dropdown');

menu.addEventListener('click', () => {
    nav.classList.add('open');
})

close.addEventListener('click', () => {
    nav.classList.remove('open');
})

account_btn.addEventListener('click', () => {
    dropdown.classList.toggle('open-dropdown');
})