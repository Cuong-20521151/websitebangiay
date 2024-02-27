<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden sneaker</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap">

</head>
<body>
    <div class="background-container">
        <div class="container">
            <!-- Bảng sản phẩm -->
            <div class="table-container">
                <div class="header-yellow-bg"></div>
                <!-- Header của bảng sản phẩm -->
                <header>
                    <img src="{{ asset('css/image/nike.png') }}">
                    <h2>Our Products</h2>
                </header>
                <!-- Danh sách sản phẩm -->
                <section class="products">
                    <div class="product">
                        @foreach($products as $product)
                            <div class="product">
                                <div class="image-container">
                                    <img src="{{ $product->image }}" alt="{{ $product->name }}">
                                </div>
                                <h3>{{ $product->name }}</h3>
                                <p class="description">{{ $product->description }}</p>
                                <div class="add-product">
                                    <p class="price">${{ $product->price }}</p>
                                    <button class="add-to-cart">Add to cart</button>
                                </div>
                            </div>
                        @endforeach
    
                    </div>
                    <div class="product">
                        <div class="image-container">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1315882/air-zoom-pegasus-36-mens-running-shoe-wide-D24Mcz-removebg-preview.png" alt="Giày 1">
                        </div>
                        <h3>Nike Air Zoom Pegasus 36</h3>
                        <p class="description">The iconic Nike Air Zoom Pegasus 36 offers more cooling and mesh that targets breathability across high-heat areas. A slimmer heel collar and tongue reduce bulk, while exposed cables give you a snug fit at higher speeds.</p>
                        <div class="add-product">
                            <p class="price">$108.97</p>
                            <button class="add-to-cart">Add to cart</button>
                        </div>
    
                    </div>
                    <div class="product">
                        <div class="image-container">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1315882/air-zoom-pegasus-36-mens-running-shoe-wide-D24Mcz-removebg-preview.png" alt="Giày 1">
                        </div>
                        <h3>Nike Air Zoom Pegasus 36</h3>
                        <p class="description">The iconic Nike Air Zoom Pegasus 36 offers more cooling and mesh that targets breathability across high-heat areas. A slimmer heel collar and tongue reduce bulk, while exposed cables give you a snug fit at higher speeds.</p>
                        <div class="add-product">
                            <p class="price">$108.97</p>
                            <button class="add-to-cart">Add to cart</button>
                        </div>
    
                    </div>
                    <!-- Các sản phẩm khác tương tự -->
                </section>
            </div>
    
            <!-- Bảng giỏ hàng -->
            <div class="table-container">
                
                <div class="header-yellow-bg"></div>
                <!-- Header của bảng giỏ hàng -->
                <header>
                    <img src="{{ asset('css/image/nike.png') }}">
                    <div class="total">
                        <h2>Your Cart</h2>
                        <p>$50</p>
                    </div>
                </header>
                <!-- Danh sách sản phẩm trong giỏ hàng -->
                <section class="cart">
                    <div class="cart-item">
                        <div class="cart-container">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1315882/air-zoom-pegasus-36-mens-running-shoe-wide-D24Mcz-removebg-preview.png" alt="Giày 1">
                        </div>
                        <div class="cart-contain">
                            <h3>Tên sản phẩm 1</h3>
                            <p class="price">$108.97</p>
                            
                            <div class="cart-add-remove">
                                <div class="quantity">
                                    <div class="button-as"><img src="{{ asset('css/image/minus.png') }}"></div>
                                    <div class="button-text">1</div>
                                    <div class="button-as"><img src="{{ asset('css/image/plus.png') }}"></div>
                                </div>
                                <div class="remove-item"><img src="{{ asset('css/image/trash.png') }}"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Các sản phẩm khác trong giỏ hàng -->
                    
                </section>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <!-- Footer content goes here -->
    </footer>

    <!-- JavaScript -->
    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>
