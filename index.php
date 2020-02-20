<?php
    $dir = 'img';
    $img = scandir ($dir);
    
    echo '<table border=1 ><tr><th>Картинка</th></tr>';


    for($i = 2; $i < 7; $i++){
        
        //print_r ('<img src="img/'.$img[$i].'"/> <br> ');
        
        echo '<tr><td>
        
            <img src="img/'.$img[$i].'" width="500" > <br> 
            </tr>'
        ;            

    }           

    echo '</table>';

?>