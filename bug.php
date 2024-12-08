```php
function myFunc($a, $b) {
  if ($a === null || $b === null) {
    return null; // This is a common way to handle null values
  }
  return $a + $b;
}

//Demonstrate the error
echo myFunc(1, null); // Returns NULL which is expected
echo myFunc(null, 2); // Returns NULL which is expected
echo myFunc(1, 2); // Returns 3 which is expected

// Uncommon error when we expect 3 but get NULL instead
$result = myFunc((int)null, (int)null); // Returns NULL instead of 0
var_dump($result); //NULL

$x = 0; // 0 is an integer
$y = 0; // 0 is an integer
$result = myFunc($x, $y); // Returns 0
var_dump($result); //int(0)
```