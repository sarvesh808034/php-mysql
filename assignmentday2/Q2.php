<html>
<body>
    <header>
        <h2 style="color:dark">Q2:</h2>
    </header>
    <?php
        
        //Create an Associative array of cities and their populations
        $cities = array("Mumbai" =>21673000, 
                        "Nashik" =>2294000, 
                        "Pune" => 7345850);
        $highestpopulation = array_keys($cities, max($cities))[0];

        echo " The Highest population city is : " .$highestpopulation;
        echo "<hr>";


     ?>


    </body>
</html>