<?php 
$cssLinks = [
    "../Asset/css/menu.css","../Asset/css/thank.css","../Asset/css/address.css","../Asset/css/resarvation.css",
    "../Asset/css/payment.css","../Asset/css/login.css","../Asset/css/fastfood.css","../Asset/css/drink.css",
    "../Asset/css/contact.css","../Asset/css/categorey.css","../Asset/css/about.css","../Asset/css/user.css",
    "../Asset/css/home-page.css","../Asset/css/shoping_cart.css","../Asset/css/bakery.css"
];
foreach($cssLinks as $cssLink){
    echo '<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Canteen</title>
    <link rel="stylesheet" href="'.$cssLink.'">';
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>';
}
