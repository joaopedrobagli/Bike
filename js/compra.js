document.addEventListener('DOMContentLoaded', function() {
    const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
    const cartItemsList = document.getElementById('cart-items-list');
    const cartTotal = document.getElementById('cart-total');
    const checkoutBtn = document.getElementById('checkout-btn');
    const cartIcon = document.getElementById('cart-icon');
    let total = 0;
    let itemCount = 0;

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            const product = this.parentElement;
            const productName = product.getAttribute('data-product-name');
            const productPriceString = product.getAttribute('data-price');
            console.log("Preço como string:", productPriceString); // Verifique o valor do preço como string
            const productPrice = parseFloat(productPriceString); // Convertendo para um número
            console.log("Preço como número:", productPrice); // Verifique o valor do preço como número
            total += productPrice;
            itemCount++;
            cartTotal.innerText = total.toFixed(2);
            document.getElementById('cart-item-count').innerText = itemCount;
    
            const cartItem = document.createElement('li');
            cartItem.innerText = productName;
            cartItemsList.appendChild(cartItem);
        });
    });
    

    cartIcon.addEventListener('click', function() {
        cart.classList.toggle('hidden');
    });

    checkoutBtn.addEventListener('click', function() {
        alert(`Total da Compra: R$ ${total.toFixed(2)}`);
        // Aqui você pode adicionar lógica para enviar a compra para um servidor, etc.
    });

    // Adicionar um evento de clique ao ícone do carrinho para rolar até a seção do carrinho
    cartIcon.addEventListener('click', function(event) {
        // Impedir o comportamento padrão do link
        event.preventDefault();

        // Rolar até a seção do carrinho com uma animação suave
        cart.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
});
