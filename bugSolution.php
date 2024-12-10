```php
$file = fopen("myfile.txt", "r");
if ($file) {
    // Process the file
    if (fclose($file) === false) {
        // Handle the error
        echo "Error closing file.";
    }
} else {
    // Handle the error
    echo "Error opening file.";
}
```

This improved version checks the return value of `fclose()`.  A return value of `false` indicates an error, allowing for appropriate error handling.  This small change significantly enhances the reliability and robustness of the code.