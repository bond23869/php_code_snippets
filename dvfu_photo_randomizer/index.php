<?php 
$array_of_images = ['1','2','3','4','5','6','9','2'];

$num_of_images = count($array_of_images);

$arr_first_three = [0,0,0];
$k = 0;
for($i = 0;$i<15;$i++){

    if($num_of_images != 0){
        
        if($k == 0){
            
            $arr_first_three[$i] += 1; 
            $num_of_images--;
        }
        else{

            while(($arr_first_three[$i] < 3)){
                $arr_first_three[$i] += 1;
                $num_of_images--;
                if($num_of_images == 0){
                    break;
                }
            } 
        }


        if($i == 2){
            $k = 1;
            $i = -1;
        }
        

        echo $i.'<br>';
            

    }
    

    
}

echo $arr_first_three[0]. ' ' . $arr_first_three[1]. ' ' . $arr_first_three[2];