# Section 3 - Lesson 27
# Creating a Replaceable Placeholder Prefix

## gulp-replace

- Cài đặt: ```npm install --save-dev gulp-replace```
- Tác dụng: package có thể thay thế tên của các hàm bằng tên đc khai báo trong hàm.
- Cách dùng:
  + Bước 1: Thay thế toàn bộ hàm php prefix từ __firstname__ thành **_themename**.
  + Bước 2: khai báo và cấu hình như sau:
    ```js
    import replace from 'gulp-replace';
    import info from './package.json';
    
    export const compress = () => {
    return gulp.src(paths.package.src)
        .pipe(replace('_themename', info.name))
        .pipe(zip(`${info.name}.zip`))
        .pipe(gulp.dest(paths.package.dest));
    }
    ```
    
- Khi chạy lệnh ```npm run bundle```, các hàm có tiền tố **_themename** sẽ được đổi thành tên được khai báo trong file __package.json__