# Section 2 - Lesson 13
# Internationalization & Localization

## Internationalization (i18n)

- tiến trình này giúp cho theme của bạn có khả năng quốc tế hóa (hiển thị đa ngôn ngữ).

## Localization (i10n)

- tiến trình đa ngôn ngữ của 1 theme đc quốc tế hóa (Internationalization).

## Functions

- ```__($text, $domain);``` : hàm trả về text theo text domain config trong file style.css của theme. 
  Nếu ko truyền vào domain thì sẽ hiển thị text trong biến __$text__. Hàm này chỉ trả về giá trị chứ ko echo.

- ```_e($text. $domain);``` : tương tự hàm trên, sự khác nhau là hàm này sẽ echo chuỗi output.

- ```esc_html_e($text. $domain);``` : tương tự hàm trên, sự khác nhau là hàm này sẽ lọc các ký tự đặc biệt khi in chuỗi.

- ```_n($single, $plural, $number, $domain);``` : hàm có tác dụng hiển thị text theo số __$number__ truyền vào. 
  Ví dụ khi __$nunber__ là 1, hàm sẽ trả về giá trị __$single__, khi __$number__ lớn hơn 1 sẽ trả về giá trị của __$plural__. 

- ```printf();``` : một hàm thông dụng của PHP, miễn bình luận.

- ```get_the_title();``` : hàm lấy tiêu đề bài viết.

- ```wp_kses($string, $allowed_html, $allowed_protocols = array())``` : hàm wordpress, chi tiết tự đi mà xem :).