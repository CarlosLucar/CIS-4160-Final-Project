let carts = document.querySelectorAll(".add-cart");

console.log(carts);

let products = [
    {
        name: "iPhone X R ",
        tag:"iphone-x-red",
        price: 549,
        incart: 0
    },
    {
        name: "iPhone X R",
        tag:"iphone-xr-blue",
        price: 499,
        incart: 0
    },
    {
        name: "iPhone X R",
        tag:"iphone-xr-white",
        price: 499,
        incart: 0
    },
    {
        name: "iPhone SE",
        tag:"iphone-se-white",
        price: 399,
        incart: 0
    },
    {
        name: "iPhone SE",
        tag:"iphone-se-black",
        price: 449,
        incart: 0
    },
    {
        name: "iPhone SE",
        tag:"iphone-se-red",
        price: 549,
        incart: 0
    },
    {
        name: "iPhone 12 Pro Max",
        tag:"iphone-12-pro-max-gold",
        price: 1099,
        incart: 0
    },
    {
        name: "iPhone 12 Pro Max",
        tag:"iphone-12-pro-max-blue",
        price: 1199,
        incart: 0
    },
    {
        name: "iPhone 12 Pro Max",
        tag:"iphone-12-pro-max-silver",
        price: 1399,
        incart: 0
    },
    {
        name: "iPad Pro",
        tag:"ipad-pro-11-silver",
        price: 1899,
        incart: 0
    },
    {
        name: "iPad Pro",
        tag:"ipad-pro-12-spacegray",
        price: 2199,
        incart: 0
    },
    {
        name: "iPad mini",
        tag:"ipad-mini-gold",
        price: 549,
        incart: 0
    },
    {
        name:"iPad mini",
        tag:"ipad-mini-silver",
        price: 399,
        incart: 0
    }
];

for(let i=0;i < carts.length; i++){
    carts[i].addEventListener('click',() =>{ 
            cartNumbers(products[i]);
            totalCost(products[i]);
    });
};



function onLoadCartNumbers(){
    let productNumbers = localStorage.getItem('cartNumbers');

    if(productNumbers){
        document.querySelector('.cart spam').textContent = productNumbers;
    }
};

function cartNumbers(product){
    console.log("the product clicked is", product)
    let productNumbers = localStorage.getItem('cartNumbers');

    productNumbers = parseInt(productNumbers);

    if(productNumbers){
        localStorage.setItem('cartNumbers',productNumbers + 1);
        document.querySelector(".cart spam").textContent = productNumbers +1;
    } else{
        localStorage.setItem('cartNumbers',1);
        document.querySelector(".cart span").textContent = 1;
    }

    setItems(product);
};

function setItems(product){
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    if(cartItems != null){
        if(cartItems[product.tag] == undefined){
            cartItems = {
                ...cartItems,
                [product.tag]: product
            }
        }
        cartItems[product.tag].incart += 1; 
    } else{
        product.incart = 1;
        cartItems = {
            [product.tag]: product
        }
    }

    localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}

function totalCost(product){
    //console.log("the products price is", product.price);
    let cartCost = localStorage.getItem('totalCost');

    console.log("my cart cost is" , cartCost);
    
    if(cartCost != null){
        cartCost = parseInt(cartCost);
        localStorage.setItem("totalCost",cartCost + product.price)
    }else{
        localStorage.setItem("totalCost", product.price);
    }


}

function displayCart(){
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
    let productContainer = document.querySelector(".products");
    let cartCost = localStorage.getItem('totalCost');

    if(cartItems && productContainer ){
        productContainer.innerHTML = '';
        Object.values(cartItems).map(item =>{
            productContainer.innerHTML += `
            <div class="product"> 
                
                <img src="./images/${item.tag}.png">
                <span>${item.name}</span>

                <span><div class="price">$${item.price}</div></span>
                <span><div class="quanity">
                    ${item.incart}
                    </span>
                </div></span>
                <div class="total">
                    $${item.incart * item.price}.00
                </div>
            </div>
            `;
        });

        productContainer.innerHTML += `
            <div class="basketTotalContainer">
                <h4 class="basketTotalTitle">
                    Basket Total
                </h4>
                <h4 class="basketTotal">
                    $${cartCost}.00
                </h4>
        `;
    }
}


onLoadCartNumbers();
displayCart();