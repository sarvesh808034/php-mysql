<html>
  <body>
     <?php
     //This is single line comment 
     //echo "Hello World!"; 

        echo "Hello World ";
        echo" This is a comment example ";

        // Scaler Types 
        $name = " Sarvesh "; // string 
        $age = 27 ; // integer
        $time = 14.45 ; // float 
        $class = true ; // boolean

        //Compound Types 
        $student_arr = array("Raj","punit","Rihan","Sarvesh"); // Array
        class Student{
            public $marks;
        }
        $stud = new Student();  // object 
        $stud ->marks = 90;


        // special Types 
        $null_var = null;

        echo "<br> string: " , $name ;
        echo "<br> Integer: " , $age;
        echo "<br> Float: "  , $time;
        echo "<br> Boolean: " ,$class;
        echo "<br> Array: " , $student_arr[0];
        //echo "Object:" , $stud;
        echo "Null : " ,  $null_var;
        /*This is multiline comments 
        Developed for php session*/
    ?>  
    </body>
</html>