<html>
<body>
     <?php

    // a. Concatenation
    $firstName = "Sarvesh";
    $lastName = "More";
    $fullName = $firstName . $lastName;
    echo "<br> Concatenation : ". $fullName;
    
    // b. String Length
    $stringLength = strlen($fullName);
    echo "<br> String Length : " . $stringLength;
    
    // c. Substring Extraction
    $substring = substr($fullName, 0, 3);
    echo "<br> Substring Extraction : " . $substring;
    
    // d. Case Conversion
    
    echo "<br> Uppercase : ".strtoupper($fullName);
    echo "<br> Lowercase : ".($fullName);
    echo "<br>Uppercase First Letter : ".ucfirst($firstName);
    echo "<br> Uppercase Words : ".ucwords($fullName);
    
    // e. Trimming
    $string1= "Sarvesh";
    $string2= "More";
    $trimmedString = $string1.$string2;
    echo "<br> Trimmed (Both Sides) : " . trim($trimmedString);
    echo "<br> Trimmed (Left)  : " . ltrim($string1);
    echo "<br> Trimmed (Right)  : " . rtrim($string2);

    // f. Reverse a String
    $stringreversed= strrev($fullName);
    echo "<br> Reversed a String : ".$stringreversed;

    // g. Compares Two strings  


?>
</body>
</html>