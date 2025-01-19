<html>
    <body>
        <?php
         // Directory Handling Operations 

        // Create a Directory
        if(!is_dir("phpDay3_Directory")){
            mkdir("phpDay3_Directory");
            echo"Directory Created ";
        }
        else{
            echo"Directory already exists !";
        }
        echo"<br>";

         // Check if the directory exists

         if (is_dir("phpDay3_Directory")){
            echo " Directory Exists ";

         }
         else{
            echo " Directory does not exists ! ";

         }
         //List the files inside the folder 
         $files = scandir("phpDay3_Directory");
         foreach($files as $file){
            echo $file . "<br>";
         }
   
         echo "Current Directory : ".getcwd();
         chdir("phpDay3_Directory");
         echo "<br> New Current Directory : ".getcwd();

         echo "<br>";
         // Delete the files inside the directory 
         $delete_files = scandir(".");
         foreach($delete_files as $file){
            if($file !=="." && $file!==".."){
                unlink($file);
            }
            echo "<br> Files Deleted ! ";
            
         }
         echo "<br>";
        //  Delete directory
         chdir("..");
         echo "<br> Current Durectory : " .getcwd();
         if (is_dir("phpDay3_Directory")){
            rmdir("phpDay3_Directory");
            echo" <br> Directory Removed";
         }
         else {
            echo " <br> directory does not exists!"; 
         }

         ?>
    </body>
</html>