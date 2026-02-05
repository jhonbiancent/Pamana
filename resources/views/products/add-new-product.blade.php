<x-navbar>
    @vite('resources/css/productspage.css')

    <div class="add-new-forms-container">
        <form class="add-new-forms">
            <!-- LEFT: PRODUCT INFO -->
            <div class="input-fields-container">
                <h2>Add New Product</h2>
                <p class="subtitle">Fill in the product details below</p>

                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" placeholder="iPhone 17 Pro">
                </div>

                <div class="form-group">
                    <label>Category</label>
                    <input type="text" placeholder="Electronics">
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="number" placeholder="3">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" placeholder="₱500">
                    </div>
                </div>

                <button class="submit-btn">Save Product</button>
            </div>

            <!-- RIGHT: IMAGE UPLOAD -->
            <div class="upload-images-container">
                <h3>Product Images</h3>

                <div class="main-image-container">
                    <span>Main Image</span>
                </div>

                <div class="side-image-container">
                    <div class="images-container">+</div>
                    <div class="images-container">+</div>
                    <div class="images-container">+</div>
                </div>
            </div>
        </form>
    </div>
</x-navbar>
