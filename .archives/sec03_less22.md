# Section 3 - Lesson 22
# Creating A Gulp Task For Javascript

## webpack-stream

- Cài đặt: ```npm install --save-dev webpack-stream```
- Tác dụng của package là build file js với phần tên đã được hash. 
- Nếu truyền vào mode là production thì sẽ min file js đó.
- Nếu truyền vào config dưới, sẽ build ra file đích có tên là __bundle.js__.
  ```js
  output: {
    filename: 'bundle.js'
  }
  ```
  
- Nếu truyền vào config __devtool__, file build ra sẽ được gắn với sourcemap để debug ở môi trường dev.
  ```js
  devtool: !PRODUCTION ? 'inline-source-map' : false
  ```

## babel-loader

- Cài đặt: ```npm install --save-dev babel-loader```
- Package hỗ trợ việc dịch JS bằng babel và Webpack. Chi tiết tự đi mà gg search.

## gulp-uglify

- Cài đặt: ```npm install --save-dev gulp-uglify```
- Tác dụng: mã hóa tên hàm trong file đích :)