# Section 3 - Lesson 26
# Bundling Files For Production

## gulp-zip

- Cài đặt: ```npm install --save-dev gulp-zip```
- Tác dụng: đóng gói code theme và file nén zip để upload lên host :)
- Cú pháp như sau:
  ```js
  export const compress = () => {
    return gulp.src(paths.package.src)
        .pipe(zip('firsttheme.zip'))
        .pipe(gulp.dest(paths.package.dest));
  }
  ```