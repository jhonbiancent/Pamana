<x-navbar>
    @vite('resources/css/products/cart.css')

    <div class="cart-container">
        <div class="cart-wrapper">

            <!-- LEFT: CART ITEMS -->
            <div class="cart-items">
                <h2>Your Cart</h2>
                <p class="subtitle">Review the items before checkout</p>

                <!-- CART ITEM -->
                <div class="cart-item">
                    <div class="item-image"></div>

                    <div class="item-details">
                        <h4>iPhone 17 Pro</h4>
                        <p class="category">Electronics</p>

                        <div class="price-qty">
                            <span class="price">₱65,000</span>

                            <div class="qty-control">
                                <button>-</button>
                                <input type="number" value="1">
                                <button>+</button>
                            </div>
                        </div>
                    </div>

                    <button class="remove-btn">✕</button>
                </div>

                <!-- CART ITEM -->
                <div class="cart-item">
                    <div class="item-image"></div>

                    <div class="item-details">
                        <h4>AirPods Pro</h4>
                        <p class="category">Accessories</p>

                        <div class="price-qty">
                            <span class="price">₱14,000</span>

                            <div class="qty-control">
                                <button>-</button>
                                <input type="number" value="2">
                                <button>+</button>
                            </div>
                        </div>
                    </div>

                    <button class="remove-btn">✕</button>
                </div>
            </div>

            <!-- RIGHT: ORDER SUMMARY -->
            <div class="order-summary">
                <h3>Order Summary</h3>

                <div class="summary-row">
                    <span>Subtotal</span>
                    <span>₱93,000</span>
                </div>

                <div class="summary-row">
                    <span>Shipping</span>
                    <span>₱150</span>
                </div>

                <div class="summary-row total">
                    <span>Total</span>
                    <span>₱93,150</span>
                </div>

                <button class="checkout-btn">Proceed to Checkout</button>
            </div>

        </div>
    </div>
</x-navbar>
