<?php

function tavis($tavebi) {
    foreach($tavebi as $tavi){
        echo '
        <div class="tavtavi container"> 
            <nav class="nav"> 
                <a href ="index.php"><img src="'.$tavi['logo'].'" alt=""> </a>
                <ul class="nav-links">
                    <li><a href="index.php">'.$tavi['text1'].'</a></li>
                    <li><a href="aboutme.php">'.$tavi['text2'].'</a></li>
                    <li><a href="contactme.php">'.$tavi['text3'].'</a></li>
                </ul>
                <div class="burger">&#9776;</div>
            </nav>
        </div>';
    }
}


?>