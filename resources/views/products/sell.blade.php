    
<x-navbar_index>
    @vite('resources/css/productspage.css')
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sell your Products</title>
    </head>
    <body class="products_page">
        <div class="filters-container">
            <form action="">
                <i class="fa-solid fa-list"></i>
                <select name="" id="">
                    <option value="">Categories</option>
                    <option value="">Categories</option>
                    <option value="">Categories</option>
                </select>
                <button>Near You</button>
                <button>Top Products</button>
                <button>Daily Discover</button>
                <button>Cheap Deals</button>
            </form>
                <div class="pagination-container">
                    <a href="/add-new-product" class="btn-add-products"><i class="fa-solid fa-add"></i> Add Products</a>
                    <button><i class="fa-solid fa-chevron-left"></i></button>
                    <button><i class="fa-solid fa-chevron-right"></i></button>
                </div>
        </div>
        <div class="product_container">
            @foreach ($product_name as $products)
                <div class="product_card">
                    <span class="sale_percentage">
                      -{{$products->product_sale_off}}%
                    </span>
                    <img src="{{$products->product_image}}" alt="">
                    <h2>{{$products->product_name}}</h2>
                    <div class="discount_container">
                        @if ($products->product_sale == true)
                        <div class="sale_off"><i class="fa-solid fa-peso-sign"></i> {{$products->product_sale_off}} off</div>
                        @endif
                        @if ($products->product_near == true)
                        <div class="near"> near you</div>
                        @endif
                        @if ($products->product_near == true)
                        <div class="near"> free shipping</div>
                        @endif
                    </div>
                    {{-- <p><i class="fa-solid fa-store"></i> {{$products->seller->seller_shop_name}}</p> --}}
                    <div class="soldColumn">
                        <p class="price"><i class="fa-solid fa-peso-sign"></i> {{number_format($products->product_price, 0, '.', ',')}}</p>
                        @if ($products->product_sold > 1000)
                        <p class="sold">sold {{ number_format($products->product_sold / 1000, 1) }}k</p>
                         @else
                        <p class="sold">sold {{$products->product_sold}}</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </body>
</x-navbar_index>
