# Server Side Scripting with PHP 

## Unit 1: PHP Fundamentals

### Introduction

- PHP stands for Hypertext Preprocessor. 
- It is a very popular and widely-used open source server-side scripting language to write dynamically generated web pages. 
- It was originally created by Rasmus Lerdorf in 1994. 
- It was initially known as Personal Home Page.
- PHP is a server-side scripting language that is embedded in HTML.
- PHP based web frameworks to speed-up the web application development. The examples are WordPress, Laravel, Symfony etc.
- PHP scripts are executed on the server and the result is sent to the web browser as plain HTML.
- A PHP interpreter, which can be implemented as a module, is commonly used to process PHP code on a web server.
- PHP can be integrated with the number of popular databases, including MySQL, Oracle, Microsoft SQL Server, Sybase, and so on. 
- PHP files have extension ".php"
- PHP is loosely typed, we do not have to mention the datatypes

#### Advantages:
- Easy to learn
- Open Source
- Portability
- Fast performance
- vast community

#### Prerequisites
- The Apache Web server
- The PHP engine
- The MySQL database server

#### What is XAMPP
- XAMPP is a simple, lightweight Apache distribution that makes it extremely easy for developers to create a local web server for developing locally php application for testing purposes.
- Everything that you need for developing an application like a web server - server application (Apache), database (MySQL), and scripting language (PHP) 

##### Advantages of XAMPP
- free and easy
- open source 
- simple and light weight
- time saver

#### PHP Tags
- When PHP parses a file, it looks for opening and closing tags, which are <?php and ?> which tell PHP to start and stop interpreting the code between them. 
- PHP includes a short echo tag <?= which is a short-hand to the more verbose <?php echo.

#### PHP Comments
- PHP support single-line as well as multi-line comments. To write a single-line comment either start the line with either two slashes (//) or a hash symbol (#). To write multiline comments start the comment with a slash followed by an asterisk (/\*) and end the comment with an asterisk followed by a slash (\*/), 

#### PHP Variable naming
- Variable names in PHP are case-sensitive

#### echo vs print
- echo has no return value while print has a return value of 1 
- echo can take multiple parameters (although such usage is rare) while print can take one argument. 
- echo is marginally faster than print.

#### PHP Datatypes
1. Scalar dataypes
   - Integer - Whole numbers (positive or negative).
   - Float(duble) - Numbers with decimal points.
   - String - Sequence of characters (can be as large as up to 2GB.)
   - Boolean - Represents `true` or `false`.
2. Compound datatypes
   - Array - A collection of values.
   - Object - Instance of a class.
3. Special datatypes 
   - NULL - Represents a variable with no value.
   - Resource - A special type holding a reference to an external resource (e.g., database connection, file handle).
4. Advanced datatypes
   - Enumerations (Enums) - Define a set of named values.

##### **Summary Table**

| **Data Type**  | **Example**                       |
| -------------- | --------------------------------- |
| Integer        | `$num = 42;`                      |
| Float          | `$pi = 3.14;`                     |
| String         | `$text = "Hello";`                |
| Boolean        | `$isTrue = true;`                 |
| Array          | `$arr = [1, 2, 3];`               |
| Object         | `$obj = new MyClass();`           |
| NULL           | `$empty = null;`                  |
| Resource       | `$conn = fopen("file.txt", "r");` |
| Enum (PHP 8.1) | `enum Days { case Monday; }`      |


#### PHP Variables
- Variables are used to store data, like string of text, numbers, etc. Variable values can change over the course of a script. Here're some important things to know about variables:
- variable can be declared as: $var_name = value;

##### Naming conventions
- start with a `$` sign, followed by the name of the variable.
- must start with a letter or the underscore character _.
- cannot start with a number
- can only contain alpha-numeric characters and underscores (A-z, 0-9, and _).
- name cannot contain spaces
- variables are case-sensitive, so `$name` and `$NAME` both are treated as different variable

#### PHP Constants
- A constant is a name or an identifier for a fixed value.
- Constant are like variables, except that once they are defined, they cannot be undefined or changed.
- Constants are automatically global and can be used across the entire script
- PHP constants can be defined by 2 ways:
  - Using define() function -> It defines constant at run time
  - Using const keyword -> It defines constants at compile time
- Constant() function - There is another way to print the value of constants using constant() function.
    - syntax: constant (name) 
    
  
#### PHP Operators
Types:
- Arithmetic operators
- Assignment operators
- Comparison operators
- Increment/Decrement operators
- String operators
- Array operators
- Conditional assignment operators
- Logical operators

#### PHP Loops

Types:
- for loop
- while loop
- do...while loop
- foreach loop

| **while loop**                           | **do while loop**                 |
| ---------------------------------------- | --------------------------------- |
| also named entry control loop            | also named exit control loop      |
| condition checks first                   | block of statement executes first |
| does not use semicolon to terminate loop | uses semicolon to terminate loop  |


## Unit 2:  PHP Arrays and Functions

### Introduction    v 
- Arrays are complex variables that allow us to store more than one value or a group of values under a single variable name.

There are three types of arrays that you can create. These are:
- Indexed array — An array with a numeric key.
- Associative array — An array where each key has its own specific value.
- Multidimensional array — An array containing one or more arrays within itself.

### Array functions
- is_array($arr$) : Finds whether a variable is an array
- unset($arr (or arr index)$) : Unset a given variable unset() destroys the specified variables.
- array_pop($\&arr$) : Pop the element off the end of array
- array_push($\&arr, ..values$) : Push elements onto the end of array
- array_column($arr, column_key$) : Return the values from a single column in the input array
- array_combine($keys, values$) : Creates an array by using one array for keys and another for its values
- array_chunk($array, size, (opt)preserve_key$) : splits an array into chunks of new arrays.  
- implode($separator(delimiter), arr$) : Join array elements with a string
- explode($separator, string, (optinal)limit$): Split a string by a string
- array_unique($arr, (optional)sorting flag$) : Removes duplicate values from an array
- array_merge($..arrays$): merges one or more arrays into one array
- array_slice($arr, offset, (opt)length, (opt)preserve_key$) : Extract a slice of the array
- array_diff($arr, ..arrs$) : Computes the difference of arrays (preserves the index)
- array_reverse($arr, (opt)preserver_key$) : Return an array with elements in reverse order
- sort($\&arr$) : Sort an array
- rsort($\&arr$) : Sort an array in reverse order
- asort($\&arr$) : Sort an associative array according to values and maintain index association
- arsort($\&arr$) : Sort an array in reverse order and maintain index association
- ksort($\&arr$) : Sort an array by key
- krsort($\&arr$) : Sort an array by key in reverse order
- array_multisort() : Sort multiple or multi-dimensional arrays
  - ex: `array_multisort(array_column($users, "age"), SORT_ASC, $users);`
-  array_search($needle, haystack, (opt)strict$) : Searches the array for a given value and returns the first corresponding key if successful
-  in_array($needle, haystack, (opt)strict$) : Checks if a value exists in an array
-  array_key_exists($key, arr$) : Checks if the given key or index exists in the array
-  count($arr, (opt)mode$) : Counts all elements in an array, or something in an object.
-  max($arr$) : Find highest value
-  min($arr$) : Find lowest value
  
### Functions
- A function is a self-contained block of code that performs a specific task.
- PHP has a huge collection of internal or built-in functions that you can call directly within your PHP scripts to perform a specific task.

#### PHP Function Arguments
- PHP supports Call by Value (default), Call by Reference, Default argument values and Variable-length argument list.

#### PHP Variable Scope
- The scope of a variable is defined as its range in the program under which it can be accessed. In other words, "The scope of a variable is the portion of the program within which it is defined and can be accessed."
Types:
- Local variable -> declared within a function 
- Global variable -> declared outside the function
  - To access the global variable within a function, use the `GLOBAL` keyword before the variable.
  - directly accessible without any keyword outside the function
  - Using `$GLOBALS` instead of global - Another way to use the global variable inside the function is predefined `$GLOBALS` array.
- Static variable
    - When a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted.
  
### PHP include and require
- `include` : If the file is not found, PHP throws a warning, and the script continues execution.
- `require` : If the file is not found, PHP throws a fatal error, and the script stops execution.
- `include_once` & `require_once` : Ensures the file is included only once, even if called multiple times.


## Unit 3

### Superglobals
Read here -> [superglobals.md](./2_Intermediate/4_GlobalVariables.md)

## Unit 4

### Cookies
- A cookie is a small text file that lets you store a small amount of data on the user's computer. 
- They are typically used to keeping track of information such as username that the site can retrieve to personalize the page when user visit the website next time
- The setcookie() function is used to set a cookie in PHP.
- The PHP `$_COOKIE` superglobal variable is used to retrieve a cookie value.
- It's a good practice to check whether a cookie is set or not before accessing its value. To do this you can use the PHP isset() function
- To modify a cookie, set again the cookie using the setcookie() function
- You can delete a cookie by calling the same setcookie() function with the cookie name and any value (such as an empty string) however this time you need the set the expiration date in the past
  
### Sessions
- A PHP session stores data on the server rather than user's computer. 
- In a session based environment, every user is identified through a unique number called session identifier or SID.
- This unique session ID is used to link each user with their own information on the server like emails, posts, etc.
- A session is a way to store information (in variables) to be used across multiple pages.

### Regular Expressions (Regex)
- Regular Expressions, commonly known as "regex" or "RegExp", are a specially formatted text strings used to find patterns in text. 
- Functions:
  - preg_match() : performs a regex match
  - preg_match_all() : performs a global regex match
  - preg_replace() : performs a regex search and replace
  - preg_grep() : Returns the elements of the input array that matched the pattern.
  - preg_split() : Splits up a string into substrings using a regular expression.

#### Character Class
- Square brackets surrounding a pattern of characters are called a character class e.g. `[abc]`

#### Position Anchors
- There are certain situations where you want to match at the beginning or end of a line, word, or string. To do this you can use anchors. 
- Two common anchors are caret `^` which represent the start of the string, and the dollar `$` sign which represent the end of the string.

#### Pattern modifiers
- A pattern modifier allows you to control the way a pattern match is handled. 
- Ex: `i -> case-insensitive`, `g -> global search i.e finds all occurrences`, `o -> evaluates expr only once`, etc...

### Error handling
- Read [here](./2_Intermediate/error_handling/errorHandling.md)


## Unit 5

## PHP Classes
- 