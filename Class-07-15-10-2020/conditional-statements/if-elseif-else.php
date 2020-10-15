
<?php 
    $mark = 32;
    if($mark>=80 && $mark <=100){
        echo "You have got A+";
    }elseif($mark>=70 && $mark <=79){
        echo "You have got A";
    }
    elseif($mark>=60 && $mark <=69){
        echo "You have got B";
    }
    elseif($mark>=50 && $mark <=59){
        echo "You have got C";
    }
    elseif($mark>=33 && $mark <=49){
        echo "You have got D";
    }    
    else{
        echo "You are failed";
    }

?>