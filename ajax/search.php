<?php

require_once '../core/connect.php';
if (isset($_POST['search_term']) == true && empty($_POST['search_term']) == false) {
    $search_term = mysqli_real_escape_string($link,$_POST['search_term']);
    $query=  mysqli_query($link,"SELECT cities FROM city WHERE cities LIKE '$search_term%' ");
    while (($row=  mysqli_fetch_assoc($query)) != false){
        echo '<li>'.$row['cities'].'</li>';
    }
}
?>