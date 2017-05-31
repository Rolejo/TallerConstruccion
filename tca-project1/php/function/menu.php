<?php

function writeMenu($data){
        
        echo '<ul class="left hide-on-med-and-sown">';
        foreach ($_POST['choices'] as $key => $value){
            echo "\t";
            echo '<li><a id="' . $value['id'] . '" href="#">'. $value['Texto']. '</a></li>';
            echo "\n";
        }
        echo '</ul>';
        
        echo '<ul id="nav.mobile" class"=side-nav hide-on-large-only">';
        foreach ($_POST['choices'] as $key => $value) {
            echo "\t";
            echo '<li><a href="#">'. $value['Tecto']. '</a></li>';
        echo "\n";
        
        }
        echo '</ul>';
        
        echo '<a href="#" data activates="nav-mobile01" class="button-collapse"><i class="material icons">menu</li></a>';
}

?>