let product = [
    {
        id : 0,
        image :"cake.jpeg",
        titel:"Cake",
        price:785
    },
    {
        id : 1,
        image :"italian-bread.webp",
        titel:"Italian Bread",
        price:120
    },
    {
        id : 2,
        image :"breads_pies.jpg",
        titel:"Bread Pie",
        price:75
    },
    {
        id : 3,
        image :"jera-biscuit.webp",
        titel:"Jera Biscuits",
        price:110
    },
    {
        id : 4,
        image :"plain-bread.png",
        titel:"Plain Bread",
        price:65
    },
    {
        id : 5,
        image :"plain-cake.jpg",
        titel:"Plain Cake",
        price:125
    }, {
        id : 6,
        image :"pound-cake.jpg",
        titel:"Pound Cake",
        price:160
    },
    {
        id : 7,
        image :"Til-Toast.jpg",
        titel:"Till Toast",
        price:180
    },
];
const bakeryItem = product.map((item)=>{
    return item;
});
var shoppingCart = [];

console.log(shoppingCart)
function addToCard(a){
    shoppingCart.push(bakeryItem[a]);
    displayCart();
}
function deleteElement(a){
    shoppingCart.splice(a,1);
    displayCart();
}

function displayCart(a){
    let i = 0;
    if(shoppingCart.length == 0){
        document.getElementById('cart-items').innerHTML = "<h2 style='color:white;'>Your Card Is Empty</h2>";
    }else{
        document.getElementById('cart-items').innerHTML = shoppingCart.map((item)=>{
            var {image,titel,price}=item;
            return (
                `<div class="cart-item">`+
                "<span class='fas fa-times' onclick='deleteElement("+(i++)+")'></span>"
               + 
               `<img src="../Asset/images/${image}"height="50px"width="50px" alt="">
                    <div class="content">
                        <h3>${titel}</h3>
                        <div class="price">tk ${price}</div>
                    </div>
                </div>`
            )
        }).join('');
    }
}