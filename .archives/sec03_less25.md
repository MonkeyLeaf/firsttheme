# Section 3 - Lesson 25
# Improving The Tasks With Browser Sync

## browser-sync

- Cài đặt: ```npm install --save-dev browser-sync```
- Tác dụng: reload lại trang mà ko cần bấm f5 khi code theme :)
- Cách triển khai:
  + Bước 1: tạo 2 hàm __serve__ và __reload__:
    ```js
    import browserSync from 'browser-sync';
    
    const server = browserSync.create();
    
    export const serve = (done) => {
        server.init({
            proxy: "http://localhost"
        });
        done();
    }
    
    export const reload = (done) => {
        server.reload();
        done();
    }
    ```
  + Bước 2:
    - khai báo hàm __serve__ ở dòng code sau: 
      ```js
      export const dev = gulp.series(clean, gulp.parallel(styles, images, copy, scripts), serve, watch);
      ```
    - Khai báo hàm __reload__ vào các dòng lệnh __gulp.watch__ trong hàm __watch__, Ví dụ:
      ```js
      gulp.watch('src/assets/scss/**/*.scss', gulp.series(styles, reload));
      gulp.watch('src/assets/js/**/*.js', gulp.series(scripts, reload));
      ```
    - Hoặc có thể khai báo pipe ở trong hàm __styles__ để ko cần thiết phải dùng __gulp.series__ trong hàm __watch__
      ```js
      pipe(server.stream());
      ```     
      