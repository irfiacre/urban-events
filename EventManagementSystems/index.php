<?php
require_once 'utils/functions.php';
require_once 'classes/User.php';
require_once 'classes/Event.php';
require_once 'classes/EventTableGateway.php';
require_once 'classes/Location.php';
require_once 'classes/LocationTableGateway.php';
require_once 'classes/Connection.php';


$connection = Connection::getInstance();
$gateway = new EventTableGateway($connection);

$statement = $gateway->getEvents();

start_session();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bootstrap Web Design</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->

        <div class = "content">
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Trending Events</h1><!--body content title-->
                </div>
            </div>
             <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
        </div>
       
       <div class = "container" style="">

                <?php 
                if (isset($message)) {
                    echo '<p>'.$message.'</p>';
                }
                ?>
                    
                        <?php
                        $row = $statement->fetch(PDO::FETCH_ASSOC);
                        while ($row) {
                            echo '
                            <div class="row">
                            <section>
                            <div class="container">';
                            echo'<div class="col-md-5">
                                    <img src="images/bdayevent.jpg" class="img-responsive" />
                                </div> ';
                            echo'<div class="subcontent col-md-6">';
                            echo '<div class="date">
                            <span class="month">'. $row['StartDate'] . ' - till - '. $row['EndDate'] .'</span><br>
                            <hr class="line"> 
                            </div>';
                            echo '<h1 class="title">' . $row['Title'] . '</h1> ';
                            echo '<p class="definition">' . $row['Description'] . '</p> ';
                            echo '<p class="location">' . $row['name'] . ' (Price: $'. $row['Cost'] .')' . '</p> ';
                            echo '<button type="button" class="btn btn-default btn-lg">'
                            .'<a href="viewPublicEvent.php?id='.$row['EventID'].'">View</a>  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>'
                            .'</button>';
                            echo'</div></section></div>
                            <div class="container"><div class="col-md-12">
                            <hr></div></div>';

                            $row = $statement->fetch(PDO::FETCH_ASSOC);
                        }
                        ?>
        </div>


      
     <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
