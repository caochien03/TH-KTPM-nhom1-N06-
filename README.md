**---Môi trường cần thiết----**

- cài đặt xampp, composer
- kéo code về thư mục xampp\htdocs

**-- Chạy các câu lệnh --**
- Để cài các gói cần thiết : composer install
- sửa file .env.example thành .env
- Tạo khóa bí mật cho ứng dụng Laravel bằng lệnh: php artisan key:generate
- Chạy lệnh để tạo các bảng trong cơ sở dữ liệu: php artisan migrate
- Chạy seeder để nhập dữ liệu mẫu vào cơ sở dữ liệu: php artisan db:seed
- Khởi chạy server nội bộ của Laravel: php artisan serve

