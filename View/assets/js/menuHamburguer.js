const menu = document.querySelector('ul.container');
const menuHamburguer = document.querySelector('.menuHamburguer').addEventListener('click', () => {
    menu.classList.toggle('ativo');
});