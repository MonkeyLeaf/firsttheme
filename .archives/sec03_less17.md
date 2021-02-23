# Section 3 - Lesson 17
# Creating a Gulp Task For Styles

## Chuẩn bị

- Tạo các file __bundle.scss__ và __header.scss__ trong thư mục __scss__ theo cấu trúc như trong app.
  
## gulp-sass

- Cài đặt package: ```npm install gulp-sass --save-dev```
- tạo block code sau để tạo file __bundle.css__ trong ```dist/asset/scss/```:
  ```js
  export const styles = () => {
    return gulp.src('src/assets/scss/bundle.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('dist/asset/css'));
  }
  ```
- Khi chạy lệnh ```gulp styles```, một file __bundle.css__ được tạo ra đúng như đường dẫn trên.

## gulp-clean-css

- Cài đặt package: ```npm install gulp-clean-css --save-dev```
- Thêm dòng code này vào block:
  ```js
  export const styles = () => {
    return gulp.src('src/assets/scss/bundle.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(gulp.dest('dist/asset/css'));
  }
  ```
- Tác dụng của package này là sẽ xóa các khoảng trắng trong file css sau khi build sass sang css.

## gulp-if

- Cài đặt package: ```npm install gulp-if --save-dev```
- Bổ sung dòng code sau vào __pipe__ sau:
  ```js
  pipe(gulpif(PRODUCTION, cleanCSS({compatibility: 'ie8'})))
  ```
- Tác dụng của __gulp-if__ để phụ trợ việc sử dụng các câu lệnh trong __pipe__ theo từng điều kiện nhất định.
- Ví dụ ở block code trên, nếu __PRODUCTION__ tồn tại, pipe __cleanCSS__ mới được khởi chạy.

- continue in 10:13