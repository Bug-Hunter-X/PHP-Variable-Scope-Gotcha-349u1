function myFunc() {
  global $var; // Declare global variable
  $var = 'Hello';
  if (true) {
    $var = 'World';
  }
  return $var;
}

//Alternatively, you can declare the variable inside the function:
function myFunc() {
  $var = 'Hello';
  if (true) {
    $var = 'World';
  }
  return $var;
}
//Now the output will be 'World' without any errors