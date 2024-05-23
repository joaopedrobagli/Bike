document.addEventListener('DOMContentLoaded', function() {
    const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
    const cartItemsList = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');
    const cartIcon = document.getElementById('cart-icon');
    const cart = document.getElementById('cart');
    const checkoutBtn = document.getElementById('checkout-btn');
    const cartItemCount = document.getElementById('cart-item-count');
    let total = 0;
    let itemCount = 0;

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            const productName = this.getAttribute('data-product-name');
            const productPrice = parseFloat(this.getAttribute('data-product-value'));
            const productImage = this.getAttribute('data-product-image');

            if (!productName || isNaN(productPrice)) {
                console.error('Invalid product data:', { productName, productPrice });
                return;
            }

            total += productPrice;
            itemCount++;

            cartTotal.innerText = `R$ ${total.toFixed(2)}`;
            cartItemCount.innerText = itemCount;

            const cartItem = document.createElement('li');
            cartItem.innerHTML = `
                <img src="${productImage}" alt="${productName}" class="cart-item-image">
                <span>${productName}</span> - <span>R$ ${productPrice.toFixed(2)}</span>
            `;
            cartItemsList.appendChild(cartItem);

            console.log(`Added to cart: ${productName} - R$ ${productPrice.toFixed(2)}`);
        });
    });

    cartIcon.addEventListener('click', function() {
        cart.classList.toggle('hidden');
    });

    checkoutBtn.addEventListener('click', function() {
        alert(`Total da Compra: R$ ${total.toFixed(2)}`);
        // Adicione aqui a lógica para enviar a compra para um servidor, etc.
    });

    // Adicionar um evento de clique ao ícone do carrinho para rolar até a seção do carrinho
    cartIcon.addEventListener('click', function(event) {
        event.preventDefault();
        cart.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
});
