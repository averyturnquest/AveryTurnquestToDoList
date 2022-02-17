<?php
require ('database.php');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    if($title){
        $query = 'SELECT `Title`, `Description` FROM `todoitems`
        ORDER BY ItemNum DESC';
        $statement = $db->prepare($query);
        if($city){
            $statement->bindValue(":title", $title);
        } else{
            $statement->bindValue(":description, $description");
        }
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
     }
    ?>
    <?php
        if(!empty($results)){?>
            <section>
                    
    }
    ?>
    

<form action="add_todo.php" method="POST">
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="description" placeholder="Description">
    <button>Add Item</button>
</form>

</body>
</html>