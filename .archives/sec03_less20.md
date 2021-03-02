# Section 3 - Lesson 20
# Cleaning Files & Serializing Tasks

## Cleaning Files with del package

- Cài đặt package: ```npm install --save-dev del```
- package có tác dụng xóa bỏ các folder, ở đây là folder __dist__ bao gồm các file đã build.
- Cú pháp như sau:
  ```js
  export const clean = () => del(['dist']);
  ```
  
## Serializing Tasks

- Trong quá trình build, để tiết kiệm thời gian và đảm bảo ko có sai sót trong quá trình gọi các lệnh (tạo css, copy images,...)
- Chúng ta sử dụng hàm __series__ của gulp để sắp xếp việc thực thi các hàm theo tuần tự.
- Cú pháp như sau:
  ```js
  export const dev = gulp.series(clean, gulp.parallel(styles, images, copy), watch);
  export const build = gulp.series(clean, gulp.parallel(styles, images, copy));
  ```
  
- Dòng code trên cho thấy đang có 2 lệnh build khác nhau cho môi trường dev(dev) và prod(build). Sự khác nhau ở đây là 
  môi trường dev sẽ được bổ sung thêm hàm watch để theo dõi sự thay đổi của code.
- Chi tiết code hàm __watch__ như sau:
  ```js
  export const watch = () => {
    gulp.watch('src/assets/scss/**/*.scss', styles);
    gulp.watch(paths.images.src, images);
    gulp.watch(paths.other.src, copy);
  }
  ```
  
- Hàm __watch__ sẽ theo dõi sự thay đổi của css, ảnh và các file khác. 
  Sau đó tiến hành build sau mỗi lần thay đổi một các tự động.
  
- Sau khi export hàm __dev__ làm default của __gulpfile.babel.js__. Chúng ta có cú pháp thực thi build 2 môi trường như sau:
  ```shell
  # dev env
  gulp
  # prod env
  gulp build --prod
  ```