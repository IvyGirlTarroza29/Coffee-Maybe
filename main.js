let cart = [];

function addToCart(productName, productPrice) {
    // Check if the product is already in the cart
    let product = cart.find(item => item.name === productName);
    if (product) {
        product.quantity += 1;
    } else {
        cart.push({ name: productName, price: productPrice, quantity: 1 });
    }
    updateCart();   
}

function updateCart() {
    let cartItems = document.getElementById('cartItems');
    if (!cartItems) {
        cartItems = document.createElement('ul');
        cartItems.id = 'cartItems';
        document.body.appendChild(cartItems);
    }
    cartItems.innerHTML = '';

    cart.forEach(item => {
        let li = document.createElement('li');
        li.textContent = `${item.name} - P${item.price} x ${item.quantity}`;
        cartItems.appendChild(li);
    });

    let cartTotal = document.getElementById('cartTotal');
    if (!cartTotal) {
        cartTotal = document.createElement('div');
        cartTotal.id = 'cartTotal';
        document.body.appendChild(cartTotal);
    }
    const total = cart.reduce((sum, item) => sum + item.price * item.quantity, 0);
    cartTotal.textContent = `Total: P${total}`;
}

