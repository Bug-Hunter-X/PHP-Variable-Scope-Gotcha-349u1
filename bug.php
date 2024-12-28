function myFunc() {
  $var = 'Hello';
  if (true) {
    $var = 'World';
  }
  return $var;
}

//Expected Output: World
//Actual Output: Notice: Undefined variable: var in /path/to/file.php on line 2