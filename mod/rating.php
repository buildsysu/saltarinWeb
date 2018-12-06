<?php
    function Rating($rating)
    {
        
        for ($i = 0; $i < 5; $i++) {
            if ($rating > $i) {
                if ($rating < $i+1) {
                    echo "<i class='fas fa-star-half-alt icono'></i>";
                } else if($rating >= $i+1) {
                    echo "<i class='fas fa-star icono'></i>";
                }
            } else {
                echo "<i class='far fa-star icono'></i>";
            }
        }
                    
    }
?>