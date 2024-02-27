window.addEventListener('DOMContentLoaded', function() {
    var productsSection = document.querySelector('.products'); // Chọn phần tử .products
    var maxHeight = 500; // Chiều cao tối đa cho phần tử .products

    // Kiểm tra và điều chỉnh chiều cao của phần tử .products
    function adjustHeight() {
        var totalHeight = productsSection.scrollHeight; // Lấy chiều cao tổng của phần tử .products
        if (totalHeight > maxHeight) {
            productsSection.style.height = maxHeight + 'px'; // Đặt chiều cao tối đa cho phần tử .products
        }
    }

    adjustHeight(); // Gọi hàm điều chỉnh chiều cao khi trang được tải

    // Thêm sự kiện thay đổi kích thước cửa sổ để cập nhật lại chiều cao khi cần thiết
    window.addEventListener('resize', adjustHeight);
});
window.addEventListener('DOMContentLoaded', function() {
    var productsSection = document.querySelector('.products'); // Chọn phần tử .products

    // Lấy chiều cao tổng của phần tử .products và các sản phẩm
    var totalHeight = productsSection.scrollHeight;

    // Lấy chiều cao của phần tử .products
    var containerHeight = parseInt(window.getComputedStyle(productsSection).height);

    // Nếu chiều cao tổng lớn hơn chiều cao của phần tử .products
    if (totalHeight > containerHeight) {
        // Thêm padding-bottom để tạo không gian để kéo
        productsSection.style.paddingBottom = '20px'; // Thay đổi giá trị này tùy theo kích thước thanh cuộn mong muốn
    }
});



// Trong tập tin index.js
$(document).ready(function() {
    $('.add-to-cart').click(function(e) {
        e.preventDefault();

        var productId = $(this).data('product-id');
        var productName = $(this).data('product-name');
        var productColor = $(this).data('product-color');
        var productImage = $(this).data('product-image');
        var productPrice = $(this).data('product-price');

        $.ajax({
            url: addToCartUrl,
            method: 'POST',
            data: {
                product_id: productId,
                product_name: productName,
                product_color: productColor,
                product_image: productImage,
                product_price: productPrice,
                _token: csrfToken
            },
            success: function(response) {
                alert(response.message);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});

