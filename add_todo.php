<?php
    $title = filter_input(INPUT_POST, 'title');
    $description = filter_input(INPUT_POST, 'description');


if($title == null || $description == null){
    include('database_error.php');
} else{
    require_once('database.php');

    $query = "INSERT INTO `todoitems`( `Title`, `Description`) VALUES ('title','description')";
    $statement = $db->prepare($query);
    $statement->bindValue(':title', $title);
    $statement->bindValue(':description', $description);
    $statement->execute();
    $statement->closeCursor();
}

include('index.php');

?>