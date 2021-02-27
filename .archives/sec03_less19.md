# Section 3 - Lesson 19
# Compressing Images & Copying Files

## gulp-imagemin

- Cài đặt package: ```npm install gulp-imagemin --save-dev```
- Tác dụng của package là nén ảnh được dùng trong theme xuống để tối ưu lưu trữ và truy xuất.
- Sử dụng code sau để thực hiện nén ảnh:
  ```js
  export const images = () => {
    return gulp.src(paths.images.src)
        .pipe(gulpif(PRODUCTION, imagemin()))
        .pipe(gulp.dest(paths.images.dest));
  }
  ```

## Copy file từ assets vào build 

- Trong quá trình xây dựng theme, nhiều khi ta muốn chỉ đơn thuần là copy các thư mục chứa các tài nguyên cần thiết vào 
  thư mục __dist__. Khi đó ta phải dùng __pipeline__ copy để giải quyết vấn đề.
- Cấu hình cho việc đó như sau:
  ```json
  {
    "other": {
      "src": ["src/assets/**/*", "!src/assets/{images,js,scss}", "!src/assets/{images,js,scss}/**/*"],
      "dest": "dist/assets"
    }
  }
  ```
- Trong config trên, ở __src__ nếu muốn copy file ở đường dẫn nào thì điền theo format trong ví dụ, 
  nếu ko muốn file trong đường dẫn đó được copy. Đơn giản là thêm dấu __!__ vào trước đường dẫn.