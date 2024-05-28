function addToCart(bookTitle) {
    const cartItems = document.getElementById('cart-items');
    const cartItem = document.createElement('li');
    cartItem.className = 'cart-item';
    cartItem.textContent = bookTitle;
    cartItems.appendChild(cartItem);
}
