<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num_forms = isset($_POST['num_forms']) ? intval($_POST['num_forms']) : 0;
    
    if ($num_forms > 0) {
        header("Location: affiche-address.php?num_forms=$num_forms");
        exit; 
    } else {
        echo "Please enter a valid number of forms";
    }
}
?>