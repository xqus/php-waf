# php-waf
[![License](https://poser.pugx.org/riverside/php-waf/license)](https://packagist.org/packages/riverside/php-waf)

PHP Web Application Firewall

### Requirements
- PHP >= 7.0

### Installation
```
composer require xqus/php-waf
```

### How to use
1. Create a PHP script to start the Firewall instance
    - waf.php
    ```php
    <?php
    $waf = new \xqus\PhpWaf\Firewall();
    $waf->run();
    ```
   
2. Configure your web server
    - Apache (.htaccess)
    ```
    php_value auto_prepend_file "/path/to/waf.php"
    ```
    - Nginx
    ```
    fastcgi_param PHP_VALUE "auto_prepend_file=/path/to/waf.php";
    ```
   


### Available filters
| Filter             | Description          |
| ------------------ | -------------------- |
| SQL                | Prevent SQL Injections |
| XSS                | XSS Attacks          |
| XML                | Stops XML Attacks          |
