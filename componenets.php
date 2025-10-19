<?php

// header start

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

// header end

// first container of landing page start

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

// first container of landing page end

// second container of landing page start

function secondcontainer($seconds) {
    foreach ($seconds as $second) {
        echo '
        <div class="shortinfome container">
            <h1>'.$second['text1'].'</h1>
            <h2>'.$second['text2'].' <span><a href="'.$second['link'].'">'.$second['text3'].'</a></span></h2>
        </div>';
    }
};

// second container of landing page end

// footer start
function fexi($fexs) {
    foreach ($fexs as $fex) {
       echo '
       <div class="fexebi container">
            <h1>'.$fex['text1'].'</h1>
            <div class="imgs">
            <a href ="'.$fex['link1'].'"><img src="'.$fex['img1'].'" alt=""> </a>
            <a href ="'.$fex['link2'].'"><img src="'.$fex['img2'].'" alt=""> </a>
            <a href ="'.$fex['link3'].'"><img src="'.$fex['img3'].'" alt=""> </a>
            </div>
            <h2>'.$fex['text2'].' <span><a href="mailto:'.$fex['text3'].'?subject=Hello&body=I%20want%20to%20contact%20you">'.$fex['text3'].'</a></span></h2>
       </div>';
    }
};

// footer end

// aboutme 1 section start


function about1($aboutmes) {
    foreach ($aboutmes as $aboutme){
        echo'
        <div class="aboutmes1">
            <h1>'.($aboutme['text1'] ?? '').'</h1>
            <div class="orkarta">
                <img src="'.$aboutme['img1'].'" alt="">
                <div class="anawili2">
                    <h2>'.$aboutme['text2'].'</h2>
                    <h3>'.$aboutme['text3'].' </h3>
                    <a href ="#">'.$aboutme['text4'].'</a>
                </div>
            </div>
        </div>';
    }
};


// aboutme 1 section end

// aboutme 2 section start

function about2($aboutmes2) {
    foreach ($aboutmes2 as $aboutme2){
        echo '
        <div class="aboutmes22">
            <div class="amarcxenatext">
                <h1>'.$aboutme2['text1'].' </h1>
                <h2>'.$aboutme2['text2'].' </h2>
            </div>
            <img src="'.$aboutme2['img1'].'" alt="">
        </div>';
    }
};


// aboutme 2 section end

// contact me start

function showContactForm($contmes) {
    foreach ($contmes as $contme) {
        echo '
        <form action="" method="POST" class="container">
            <label for="name">'.$contme['text1'].'</label>
            <input type="text" id="name" name="name" required>

            <label for="email">'.$contme['text2'].'</label>
            <input type="email" id="email" name="email" required placeholder="example@gmail.com">

            <label for="info">'.$contme['text3'].'</label>
            <textarea id="info" name="info" rows="5" required></textarea>

            <button type="submit">'.$contme['text4'].'</button>
        </form>';
    }
};


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $info = trim($_POST['info']);
    echo "<div class='submission-feedback-wrapper'>"; 
    if (empty($name) || empty($email) || empty($info)) {
        echo "<p class='feedback-message error'>All fields are required!</p>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p class='feedback-message error'>Invalid email format!</p>";
    } else {
        $data = "Name: $name\nEmail: $email\nInfo: $info\n\n";
        file_put_contents('submissions.txt', $data, FILE_APPEND);
        echo "<div class='feedback-container success'>";
        echo "<p class='feedback-message'>Thank you! Your information has been submitted.</p>";
        echo "<a href='index.php' class='home-button'>Go back to home</a>"; 
        echo "</div>";
    }
    echo "</div>"; 
}

// contact me end
?>