<?php
/*
$num = 5;

if($num == 6){
    echo "num is $num";
} else {

    echo "num is not $num";

} */

$color = 'green';

switch ($color) {

    case 'biege':
        echo 'Your favorite color is biege';
        break;

    case 'red':
            echo 'Your favorite color is red';
            break;
              
    case 'yellow':
        echo 'Your favorite color is yellow';
        break;

    default:
        echo "Your fav color is something else";
    

}




/*function getColor($color)
{


    switch ($color) {

        case 'biege':
            echo 'Your favorite color is biege';
            break;
    
        case 'red':
                echo 'Your favorite color is red';
                break;
                  
        case 'yellow':
            echo 'Your favorite color is yellow';
            break;

        default:
            echo "Your fav color is something color";
        
    
    }


}

echo getColor('blue');
*/
?>