# Section 3 - Lesson 14
# Setting Up NPM and Gulp

## Setting NPM

- ```npm init```
- ```npm install --global gulp-cli```
- ```gulp -v```
- ```npm install --save-dev gulp```
- tạo file __gulpfile.js__
- thêm nội dung sau vào file __gulpfile.js__
  ```js
  var gulp = require('gulp');

  gulp.task('default', defaultTask);

  function defaultTask(done) {
    console.log('hey');
    done();
  }
  
  gulp.task('hello', function (done) {
    console.log('hello');
    done();
  });
  ```
- ```gulp hello```
- đổi tên file __gulpfile.js__ thành __gulpfile.babel.js__
- ```npm install --save-dev @babel/register @babel/core @babel/preset-env```
- cập nhật nội dung file __gulpfile.babel.js__ như sau:
  ```js
  import gulp from 'gulp';

  export const hello = (done) => {
    console.log('hello');
    done();
  }

  export default hello;
  ```