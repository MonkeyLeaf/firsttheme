# Section 2 - Lesson 12
# Validation, Sanitization & Escaping

## Validation

- ```intval($_POST['price]) !== 0``` : hàm chuyển đổi param đầu vào thành số integer
- Validating the Input:
  - Built-in PHP functions:
    - isset()
    - empty()
    - strlen()
    - preg_match()
    - count()
    - in_array()
  - Core Wordpress functions:
    - is_email()
    - term_exists()
    - username_exists()
    - validate_file()
  - Custom functions:
    - is_us_phone()
    - is_us_zip()

## Sanitization

- ```sanitize_text_field($_POST['price])``` : lọc các ký tự lạ của request params.
- Sanitizing the Input:
  - sanitize_email()
  - sanitize_text_field()
  - sanitize_user()
  - esc_url_raw()
    
## Escaping

- ```esc_html($price)``` : bỏ các ký tự lạ ở biến khi render.
- Escaping the output
  - esc_html()
    ```
    <h1><?php echo esc_html($title); ?></h1>
    ```
  - esc_js()
    ```
    <a href="#" onclick="<?php echo esc_js($custom_js); ?>">Click me</a>
    ```
  - esc_url()
    ```
    <img src="<?php echo esc_url($url); ?>" />
    ```
  - esc_attr()
    ```
    <ul class="<?php echo esc_attr($stored_class); ?>"></ul>
    ```
  - esc_textarea()
    ```
    <textarea><?php echo esc_textarea($text); ?></textarea>
    ```
    
