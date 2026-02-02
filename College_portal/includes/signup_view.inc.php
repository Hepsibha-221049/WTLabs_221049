<?php
declare(strict_types=1);
function check_errors(array $errors){
    foreach($errors as $error){
        echo '<p style="color:#d30404;">'.$error.'</p>';
    }
}
function no_errors(){
    echo '<p style="color: #4CAF50;">Signup successful!</p>';
}