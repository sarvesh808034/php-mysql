$num1=23;
$num2=8;
$mod=$num1 % $num2; echo "<br> <b> Modulus </b> : .$mod;

//b. Round up Function

$num1=6.9;
echo "<br> Round Up: ".ceil(num: $num1);

//c. Round down to the nearest integer

$num1=7.1;
echo "<br> Round down: ".floor(num: $num1);

//d. Returns the square root

$num1=49;
echo "<br> Returns square root: ".sqrt(num: $num1);

//e. Generates a random number between $min and $max

$min=1;
$max=100;
echo "<br> Random number: ".rand(min: $min, max: $max);
