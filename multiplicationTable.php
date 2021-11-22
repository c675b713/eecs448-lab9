<html>
    <header>
    </header>
    <body>
        <table border="1">
    <?php>
        for($i=1; $i<101; $i++){
            echo "<tr>";
            for($j=1; $j<101; $j++){
                echo "<td><a>" . $i*$j . "</a></td>";
            }
        }
    <?>   
  </body>
  </html>