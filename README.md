# PHP Unexpected NULL Behavior with Type Juggling and Null Values

This repository demonstrates an uncommon error in PHP related to null values and type juggling.  The function `myFunc` is designed to add two numbers.  However, when null values are type-casted to integers using `(int)null`, the function returns null instead of 0, which can be unexpected.

The solution provides a more robust approach to handling null values, illustrating best practices for preventing such issues.
