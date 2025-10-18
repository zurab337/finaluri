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
};

function firstcontainer($firsts){
    foreach($firsts as $first) {
        echo '
        <div class="pirveli container"> 
            <h4>'.$first['text1'].' <span>'.$first['text2'].'</span></h4>
            <div class="nawili2">
                <img src="'.$first['logo'].'" alt="">
                <div class="mokleinfo">
                    <p>'.$first['text3'].'</p>
                    <h2>'.$first['text4'].'</h2>
                </div>
            </div>
        </div>';
    }
};

function secondcontainer($seconds) {
    foreach ($seconds as $second) {
        echo '
        <div class="shortinfome container">
            <h1>'.$second['text1'].'</h1>
            <h2>'.$second['text2'].' <span><a href="https://skillwill.edu.ge/">'.$second['text3'].'</a></span></h2>
        </div>';
    }
};


?>