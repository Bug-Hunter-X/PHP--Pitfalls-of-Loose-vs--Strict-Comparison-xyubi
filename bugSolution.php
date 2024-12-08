To rectify this, always employ strict comparison (`===`) when the type of the variable matters. This ensures the values are not only equal but of the same data type.

```php
$a = 1;
$b = '1';

if ($a === $b) {
  echo "Identical"; //This won't execute
}

if ($a == $b) {
  echo "Equal"; //This will execute
}

// Correct usage with type checking:
if (is_int($a) && $a == $b) {
  echo "Equal and both are integers";
} elseif (is_string($b) && $a == $b) {
  echo "Equal and both are strings";
}
```
This improved version explicitly checks the data types before comparison, preventing potential errors.