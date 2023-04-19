
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dobrocsi Kornél</title>
</head>
<body>
    <?php
    //$fajl=readfile("kedvenc2.json");
    //echo $fajl;
    $eroforras= fopen("kedvenc2.json","r") or die("Unable to open file");
    $fajl=fread($eroforras,filesize("kedvenc2.json"));
    fclose(($eroforras));
    //echo $erodorras;
    $tomb= json_decode($fajl);
    echo '<pre>' . var_export($tomb,true) . '</pre>';
    ?>
    <div>
        <table>
            <tr>
                <?php
                foreach ($tomb[0] as $kulcs => $ertek){
                    echo "<th>";
                    echo $kulcs;
                    echo "</th>";
                }
                ?>
            </tr>
            <?php
            for ($elemek=0; $elemek<count($tomb);$elemek++){
                echo "<tr>";
                foreach ($tomb[$elemek] as $kulcs => $ertek){
                    echo "<td>";
                    if ($kulcs == "kép"){
                        echo "<img src=\"kepek/". $ertek . "\" alt=\"Szerző\">";
                    } else{
                        echo $ertek;
                    }
                    echo "</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </div>
    <div>
        <?php
        $array=array("Peter"=>35, "Ben"=>37, "Joe"=>43);

        echo json_encode($array);
        $iras=fopen("feladat.json","w") or creat("");
        ?>
    </div>
</body>
</html>