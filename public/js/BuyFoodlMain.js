let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCart = document.querySelector('.listCart');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})

let products = [
    {
        id: 1,
        name: 'CHICKEN BURGER',
        image: 'burger.jpg',
        price: 480
    },
    {
        id: 2,
        name: 'BBQ CHICKEN',
        image: 'bbq chicken plate.jpg',
        price: 800
    },
    {
        id: 3,
        name: 'CHICKEN',
        image: 'chicken.jpeg',
        price: 190
    },
    {
        id: 4,
        name: 'PIZZA',
        image: 'pizza.jpg',
        price: 700
    },
    {
        id: 5,
        name: 'SALMON',
        image: 'salmon.jpeg',
        price: 1500
    },
    {
        id: 6,
        name: 'SANDWICH',
        image: 'Sandwich.jpeg',
        price: 80
    },
    {
        id: 7,
        name: 'SOUP',
        image: 'soup.jpeg',
        price: 430
    },
    {
        id: 6,
        name: 'Spaghetti',
        image: 'Spaghetti.jpeg',
        price: 120
    },
    {
        id: 1 ,
        name: 'Raja Burger',
        price: 160
    }


];
let listCarts  = [];
function initApp(){
    products.forEach((value, key) =>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="/food_Images/${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">${value.price.toLocaleString()} TK</div>
            <button onclick="addToCard(${key})">Add To Card</button>`;
        list.appendChild(newDiv);
    })
}
initApp();
function addToCard(key){
    if(listCarts[key] == null){
        // copy product form list to list card
        listCarts[key] = JSON.parse(JSON.stringify(products[key]));
        listCarts[key].quantity = 1;
    }
    reloadCard();
}
function reloadCard(){
    listCart.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCarts.forEach((value, key)=>{
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="/food_Images/${value.image}"/></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
                listCart.appendChild(newDiv);
        }
    })
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
}
function changeQuantity(key, quantity){
    if(quantity == 0){
        delete listCarts[key];
    }
    else{
        listCarts[key].quantity = quantity;
        listCarts[key].price = quantity * products[key].price;
    }
    reloadCard();
}
