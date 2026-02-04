<x-navbar>
    @vite('resources/css/productspage.css')
    <div class="add-new-forms-container">
        <form action="" class="add-new-forms">
            <div class="input-fields-container">
                <label for="product-name">Name</label>
                <input type="text" placeholder="Iphone 17 pro">
                <label for="product-category">Category</label>
                <input type="text" placeholder="Electronics">
                <label for="product-quantity">Quantity</label>
                <input type="number" placeholder="3">
                <label for="product-price">Price</label>
                <input type="text" placeholder="500">
            </div>
            <div class="upload-images-container">
                <div class="main-image-container"></div>
                <div class="side-image-container">
                    <div class="images-container"></div>
                    <div class="images-container"></div>
                    <div class="images-container"></div>
                </div>

            </div>
        </form>
    </div>
</x-navbar>