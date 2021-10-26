<?php
    function display() {
        $array = array(1, 2, 3, 4);
        foreach($array as $value){
            echo $value . "\n";
        }
    }

    function add(){
        $array = array(1, 2, 3, 4);
        $sum = array_sum($array);
        echo "\n" . "la somme du talbeau est : " . $sum . "\n";
    }

    function addArray(){

        $suite = [
            [1, 2, 4, 8, 16],
            [1, 3, 9, 27, 81]
        ];

        $sum = 0;
        foreach($suite as $value){
            $sum += array_sum($value);
        }
        echo $sum . "\n";
    }

    function load_2d_arr_from_file ( string $filePath ){

        $handle = @fopen($filePath, "r");
            if ($handle) {
                $tab = [];
                while (($buffer = fgets($handle, 4096)) !== false) {           
                    array_push($tab, $buffer);
                    $test = str_split(trim($buffer));
                }
                if (!feof($handle)) {
                    echo "Erreur: fgets() a échoué\n";
                }
                fclose($handle);

                $tab_final = array_shift($tab);
                echo implode("", $tab);
                
            }
    }

load_2d_arr_from_file("map.txt");
?>