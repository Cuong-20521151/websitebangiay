Anh/chị cần cài đặt một số câu lệnh như sau:
npm install
npm run dev
php artisan migrate
Anh/chị có thể mở xampp và chạy bài test này.
localhost/Website_ban_giay/produts
# Lưu ý
Vì máy em bị lỗi port của mySql trong xampp nên trong phần env. nên em đã đổi port từ 3306 thành 3307 như dưới đây:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3307
DB_DATABASE=websitebangiay
DB_USERNAME=root
DB_PASSWORD=

Ngoài ra, trong mySql cần tạo một Database có tên websitebangiay và thay nó vào phần DB_DATABASE.

Cảm ơn anh/chị đã xem!
