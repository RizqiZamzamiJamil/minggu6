<!DOCTYPE html>
<html>
    <head>
        <h1>KALENDER</h1>
        <hr align='left' width ='360px'>
    </head>
    <body>
        <kalender class>
        <?php
            $hari = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");
            $tgl = 1;

            echo "<h1> Maret 2022 </h2>";
            
            echo "<table> ";
            for($i = 0; $i<6; $i++){
                echo "<tr>";
                if ($i == 0){
                    echo "<hr align='left' width ='360px'>";
                    foreach ($hari as $value){                        
                        if($value == "Sun"){
                            echo "<td align='center' width='50px'><p style='color:red'>$value</p></td>";
                        }else{
                            echo "<td align='center' width='50px' >$value </td>";
                        }
                    }continue;
                }

                for($j = 0; $j<7; $j++){
                    if($i==1 && $j<=1){
                        echo "<td></td>";
                        $tgl = 0;
                    }else if($i == 5 && $j > 4){
                    }
                    else{                      
                        if($j == 0){
                            echo "<td align='center'><p style='color:red '>$tgl</p></td>";
                        }else{
                            echo "<td align='center'><p>$tgl</p></td>";
                        }
                    }$tgl++;
                }echo "</tr>";
            }echo "</table>";
        ?></kalender>
    </body>
</html>