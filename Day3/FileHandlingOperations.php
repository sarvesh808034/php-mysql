<html>
    <body>
        <?php
            //File Handling Operations 
            // Create a New File 
            $file = fopen("student.txt","w");
           //fclose($file);
            echo "File has been Created";

            // Write in a new file 
            fwrite($file,"Hello Student File !! \n This is test File ");
            echo " <br>  Text has been Inserted ";

            //Read a File 

            $file_read = fopen("Student.txt", "r");
            while (!feof($file_read)){
                echo fgets ($file_read)."<br>";
            }


            fclose($file);

            //Deleting a File 

            if (file_exists("Student.txt")){
                unlink("Student.txt");
                echo "<br><br> File has been deleted !!";

            }
            else{
                echo"<br><br> File not Found";
            }
        ?>
    </body>
</html>