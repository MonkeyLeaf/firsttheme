# Section 3 - Lesson 16
# Development vs Production in Gulp Tasks

## Cài đặt biến môi trường

- cài đặt package __yargs__. Package này dùng để truyền biến môi trường từ bên ngoài vào app.
- Cú pháp cài đặt ```npm install yargs --save-dev```
- Khai báo 1 tham số bằng __yargs__, ta dùng cú pháp sau: ```yargs.argv.prod``` với __prod__ là tên tham số.
- Để truyền được tham số vào __gulp__. Sử dụng cmd sau ```gulp hello --prod=1234```

## Tạo nơi chứa các file build bởi Gulp

- tạo thư mục __src__ và các thư mục con __assets__ (__images__, __js__, __scss__).
- đây sẽ là nơi chứa các file đã được xử lý thông qua __gulp__ như nén, minify,...


