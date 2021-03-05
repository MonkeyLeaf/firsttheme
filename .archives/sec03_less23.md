# Section 3 - Lesson 23
# Creating A Gulp Task For Javascript cont

## vinyl-named

- Cài đặt: ```npm install --save-dev vinyl-named```
- Đặt tên cho các tệp. Chi tiết đọc docs :)

## chèn js file vào admin

- Trong file __lib/enqueue-assets.php__ thêm đoạn code sau vào function __firsttheme_admin_assets__:
  ```
  wp_enqueue_script('firsttheme-admin-scripts', get_template_directory_uri() . '/dist/assets/js/admin.js', array(), '1.0.0',true);
  ```