let cart = document.querySelector('.shopping-cart');
let cartItems = document.querySelector('.cart-items');
cart.addEventListener("click",()=>{
    cartItems.classList.toggle('active');
    userItem.classList.remove('active');
})
let user = document.querySelector('.users');
let userItem = document.querySelector('.user');
user.addEventListener('click',()=>{
    userItem.classList.toggle('active');
    cartItems.classList.remove('active');
});
