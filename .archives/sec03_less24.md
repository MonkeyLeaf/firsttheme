# Section 3 - Lesson 24
# Adding JavaScript Plugins The Right Way

## jquery

- Cài đặt: ```npm install jquery --save```
- Trong trường hợp dùng template có sẵn thì ko cần phải sử dụng jquery từ npm install!!!

## Các cách để nhúng thư viện JS vào code WP

- Cách 1: nhúng thư viện JS từ node_modules vào file js cú pháp ES6.
  + Cách thực hiện: thêm đoạn code ```import 'jquery';``` vào file __src/assets/js/bundle.js__. Sau đó chạy lệnh ```gulp scripts```
  
4:44