# Homedir
A PHP library that contains a single function to determine user's home directory

## Requirements
- PHP 7.1 or greater

## Installation
```
$ composer require juliardi/homedir
```

## Functions
This library only has 2 functions, `get_home_directory()` and `is_windows()`. Those 2 functions can be called without any arguments.

| Function Name | Return Type | Description |
|---------------|-------------|-------------|
| `get_home_directory()` | string | Determines current user's home directory |
| `is_windows()`         | boolean | Checks whether current operating system is a Windows |