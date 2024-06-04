<!DOCTYPE Html>
<html>
    <body>
        <?php
        $cars= array
        (
            array("Laptop",25,65),
            array("tab",2,5),
            array("mobile",125,65),
            array("desktop",2,5),
            
        );

        for($row=0;$row<4;$row++){
            echo"<p><b>Row Number &$row </b></p>";
            echo "<ul>";
            for($col=0;$col<3;$col++){
                echo "<li>".$cars[$row][$col]."</li>";
            }
            echo "</ul>";

        }
        ?>

</body>
</html>
