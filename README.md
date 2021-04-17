# Debugger
A simple PHP debugger

Installation
------------

```bash
composer require netnaveed/php-debugger
```

Example
-------
```php
<?php

use netnaveed\debugger\console;

// write string to console
console::log("A simple PHP debugger");

// write array to console in json format
console::log( [ 1,2,3 ] );

?>
```

Output in console
-----------------

```bash
A simple PHP debugger - test.php(6)
[1,2,3] - test.php(9)
```