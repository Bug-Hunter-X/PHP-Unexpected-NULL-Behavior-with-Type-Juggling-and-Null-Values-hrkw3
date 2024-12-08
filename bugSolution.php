```php
function myFunc($a, $b) {
  //Explicitly check and convert null to 0
  $a = ($a === null) ? 0 : $a;
  $b = ($b === null) ? 0 : $b;

  return $a + $b;
}

//Demonstrate the corrected behavior
echo myFunc(1, null); // Returns 1
echo myFunc(null, 2); // Returns 2
echo myFunc(1, 2); // Returns 3

//Corrected behavior when we pass null values
$result = myFunc((int)null, (int)null); // Returns 0
var_dump($result); //int(0)

$x = 0; // 0 is an integer
$y = 0; // 0 is an integer
$result = myFunc($x, $y); // Returns 0
var_dump($result); //int(0)
```