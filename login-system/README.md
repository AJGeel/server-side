# Simple PHP / SQL login system

This repository holds the Object-Oriented code to a simple registration / login functionality that allows authorised users to access certain data.

The passwords are hashed with a strong one-way hashing algorithm which is implemented using PHP's `password_hash()` function, which automatically applies a random salt.

Passwords hashes are verified at login using PHP's `password_verify()` function.

Source code from [Tutorial Republic](https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php)
