<?php
require_once 'classes/Event.php';
require_once 'classes/EventTableGateway.php';
require_once 'classes/Connection.php';


if (!isset($_GET['id'])) {
    die("Illegal request");
}
$id = $_GET['id'];

$connection = Connection::getInstance();
$gateway = new EventTableGateway($connection);

$statement = $gateway->getEventsById($id);

$row = $statement->fetch(PDO::FETCH_ASSOC);
if (!$row) {
    die("Illegal request");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <?php require 'utils/styles.php'; ?>
        <?php require 'utils/scripts.php'; ?>
    </head>
    <body>  
        <?php require 'utils/eventHeader.php'; ?>
        <div class = "content">
            <div class = "container">
                
                <?php 
                if (isset($message)) {
                    echo '<p>'.$message.'</p>';
                }
                ?>
                    <div>
                        <?php
                        echo '<br /><a class="btn btn-default" href="index.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a>';
                        echo '<h1> Cost: <strong>' . $row['Cost'] .'</strong> RWF'. '</h1>';
                        echo '<p>' . $row['Description'] . '</p>';
                        echo '<p> Location: ' . $row['LocationID'] . '</p>';
                        echo '<td>'
                            . '<a href="viewLocation.php?id='.$row['LocationID'].'">'.'</a> '
                            . '</td>';
                        ?>
            </div>
            </div>
        </div>
        <div style="height: 20vh"></div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
