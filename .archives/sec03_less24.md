# Section 3 - Lesson 24
# Adding JavaScript Plugins The Right Way

## jquery

- Cài đặt: ```npm install jquery --save```
- Trong trường hợp dùng template có sẵn thì ko cần phải sử dụng jquery từ npm install!!!

## Các cách để nhúng thư viện JS vào code WP

- Cách 1: nhúng thư viện JS từ node_modules vào file js cú pháp ES6.
  + Cách thực hiện: thêm đoạn code ```import 'jquery';``` vào file __src/assets/js/bundle.js__. Sau đó chạy lệnh ```gulp scripts```.
  
- Cách 2: kích hoạt thư viện __jquery__ có sẵn trong __wp-includes__
  + Cách thực hiện:  thêm đoạn code ```wp_enqueue_script('jquery');``` vào file __lib/enqueue-assets.php__ bên trong function __*-assets__.
  + Trong trường hợp thư viện tích hợp vào WP ko tồn tại (ở đây là jquery). Hàm __wp_enqueue_script__ có tham số thứ 2 có thể truyền link của thư viện tương tự của bạn vào.
  
- Cách 3: thêm jquery vào dưới dạng dependency.
  + Cách thực hiện: thêm __jquery__ vào mảng __$den__ của hàm __wp_enqueue_script__ như sau:
    ```
    wp_enqueue_script('firsttheme-scripts', get_template_directory_uri() . '/dist/assets/js/bundle.js', array('jquery'), '1.0.0', true);
    ```
    
## Sử dụng $ trong code js 

- Với các cách nhúng ở trên, chúng ta không thể dùng $ trong code jquery. Ví dụ như:
  ```js
  $('body').on('click', function () {
    alert(true);
  });
  ```
- Thay vào đó ta phải dùng __jQuery__. Để có thể dùng đc $ trong code js-jquery. Ta cần gán như sau:
  ```js
  const $ = jQuery;
  ```
  
- Trong trường hợp nhúng jquery bằng cách số 1, bạn có thể dùng cách này để sử dụng đc $ trong code jquery.
  ```js
  import $ from 'jquery';
  ```

- Khi chúng ta sử dụng cách nhúng số 2 và 3 nhưng vẫn muốn áp dụng cách gán __$__ từ __jQuery__ trong file js. Ta làm như sau:
  + Thêm option __externals__ vào function scripts()
    ```js
    externals: {
      jquery: 'jQuery'
    }
    ```
  + NHư vậy, khi build scripts, gulp sẽ ko build kèm jquery nữa nhưng vẫn có thể duy trì cú pháp để sử dụng __$__