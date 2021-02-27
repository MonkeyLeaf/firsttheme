# Section 3 - Lesson 18
# Creating a Gulp Task For Styles cont

## gulp-sourcemaps

- Cài đặt package: ```npm install gulp-sourcemaps --save-dev```
- [Tác dụng](https://manhhomienbienthuy.bitbucket.io/2016/Aug/22/source-maps-an-introduction.html)

## Sử dụng gulp để build nhiều file.

- Tại file __../firsttheme/gulpfile.babel.js__, thay đổi việc truyền vào của đoạn code dưới đây từ string thành array:
  ```js
  gulp.src('src/assets/scss/bundle.scss')
  gulp.src(['src/assets/scss/bundle.scss'])
  ```
  
## Chèn css vào trang Admin

- Như bài trước đã hướng dẫn nhúng css vào trang giao diện frontend của theme. Tương tự khi ta muốn chèn vào admin site file __admin.scss__
  ```
  function firsttheme_admin_assets() {
    wp_enqueue_style(
        'firsttheme-admin-stylesheet',
        get_template_directory_uri() . '/dist/assets/css/admin.css',
        array(),
        '1.0.0',
        'all'
    );
  }

  add_action('admin_enqueue_scripts', 'firsttheme_admin_assets');
  ```
  
## Theo dõi sự thay đổi của các file scss

- Trong quá trình phát triển theme, sẽ rất mất thời gian nếu thao tác tay các câu lệnh build css. Để tiết kiệm, chúng ta
  tạo ra hàm watch để theo dõi các thay đổi của file css. Cú pháp như sau:
  ```js
  export const watch = () => {
    gulp.watch('src/assets/scss/**/*.scss', styles);
  }
  ```
  
- Code này sẽ theo dõi sự thay đổi của các file scss trong đường dẫn và tự động chạy build lại file css sau mỗi lần save (ctrl + S)