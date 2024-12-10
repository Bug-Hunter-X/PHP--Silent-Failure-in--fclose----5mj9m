# PHP `fclose()` Error Handling

This repository demonstrates a common, yet often overlooked, error in PHP file handling: not checking the return value of the `fclose()` function. While usually not immediately catastrophic, this oversight can cause resource leaks under load and contribute to system instability.

The `bug.php` file showcases the problematic code, while `bugSolution.php` provides a corrected version with proper error handling.

## Reproducing the Bug

1.  Clone this repository.
2.  Run `bug.php`.
3.  Observe that even if an error occurs during file closing (highly unlikely in a simple test, but possible under pressure), there's no indication within the script.

## Solution

The `bugSolution.php` file demonstrates a robust solution, correctly handling potential errors during the file closure process, making the code more reliable and less prone to resource leaks.