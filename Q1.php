<!-- Question 1 -->
<html>
    <body bgcolor="lime">
        <header>
            <h2>Q1:</h2>
        </header>
    <?php
    $sum = 0;

// Loop through numbers from 1 to 100
for ($i = 0; $i <= 100; $i++) {
    
    // Check if the number is even
    if ($i % 2 == 0) {

        // Add the even number to the sum
        $sum += $i;
    }
}
echo "The sum of all even numbers between 1 and 100 is: " . $sum;
echo "<hr>";
?>


</body>
</html>
