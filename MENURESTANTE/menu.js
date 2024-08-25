
//serve para fixar a cor ao clicar ex: home ou cerveja
var menuItem = document.querySelectorAll('.item-menu')

function selectLink(){
    menuItem.forEach((item)=> 
    item.classList.remove('ativo')
    ) 
    this.classList.add('ativo')
}

menuItem.forEach((item)=> 
item.addEventListener('click', selectLink))

//serve para o botão expandir o menu quando clicar

var btnExp = document.querySelector('#btn-exp')
var menuSide = document.querySelector('.menu-lateral')

btnExp.addEventListener('click', function(){
    menuSide.classList.toggle('expandir')
})