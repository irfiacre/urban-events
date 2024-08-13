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

<header class="eventBgImage">
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header"><!--website name/title-->
                <?php
                require_once 'utils/functions.php';
                echo '<a href = "index.php" class = "navbar-brand">
                    Event Management Systems
                </a> ';
                ?>
            </div>
            <ul class="nav navbar-nav navbar-right"><!--navigation-->
                <?php
                //links to database contents. *if logged in
                if (is_logged_in()) {
                    require_once 'utils/functions.php';
                    echo '<li><a href = "#"><strong>'.$_SESSION['user']->getUsername().'</strong></a></li>';
                    echo '<li><a href = "index.php">Home</a></li>';
                    echo '<li><a href = "viewEvents.php">Events</a></li>';
                    echo '<li><a href = "viewLocations.php">Locations</a></li>';
                    echo '<li><a href = "contact.php">Contact Us</a></li>';
                    echo '<li class="btnlogout"><a class = "btn btn-default navbar-btn" href = "logout.php">Logout <span class = "glyphicon glyphicon-log-out"></span></a></li>';
                }
                //links non database contents. *if logged out
                else {
                    echo '<li><a href = "index.php">Home</a></li>';
                    echo '<li><a href = "events2.php">Events</a></li>';
                    echo '<li><a href = "locations2.php">Locations</a></li>';
                    echo '<li><a href = "contact.php">Contact Us</a></li>';
                    echo '<button type = "button" class = "btn btn-default navbar-btn" data-toggle = "modal" data-target = "#login">Login <Span class="glyphicon glyphicon-log-in"></span></button>';
                }
                ?>

                <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <!--modal for login-->
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header"><!--modal header-->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Login</h4><!--modal title-->
                            </div>
                            <div class="row">
                                <div class="modal-body"><!--modal content-->
                                    <div class="col-md-6 col-md-offset-3">
                                        <form action="login.php" method="POST">
                                            <div class="form-group"><!--username-->
                                                <label for="username">Username:</label>
                                                <input type="text" name="username" class="form-control"
                                                    value="<?php if (isset($formdata['username']))
                                                        echo $formdata['username']; ?>" />
                                                <span class="error"><!--error message on failed input-->
                                                    <?php if (isset($errors['username']))
                                                        echo $errors['username']; ?>
                                                </span>
                                            </div>
                                            <div class="form-group"><!--password-->
                                                <label for="password">Password:</label>
                                                <input type="password" name="password" class="form-control" value="" />
                                                <span class="error"><!--error message on failed input-->
                                                    <?php if (isset($errors['password']))
                                                        echo $errors['password']; ?>
                                                </span>
                                            </div>
                                            <button type="submit"
                                                class="btn btn-default loginbtn">Login</button><!--login button-->
                                            <a class="btn btn-default navbar-btn rgsterbtn"
                                                href="register_form.php">Register</a><!--register button-->
                                        </form>
                                    </div>
                                </div><!--modal body div-->
                            </div><!--row div-->
                            <div class="modal-footer"><!--modal footer-->
                                <button type="button" class="btn btn-default closebtn"
                                    data-dismiss="modal">Close</button>
                                <p><!--close button-->
                            </div><!--modal footer div-->
                        </div><!--modal content div-->
                    </div><!--modal dialog div-->
                </div><!--modal div-->
            </ul>
        </div><!--container div-->
    </nav>
    <section style="padding: 3vh 0;">
        <div class="container">
            <div class="col-md-5"><!--image holder with 5 grid column-->
                <img src="images/bdayevent.jpg" class="img-responsive">
            </div>
            <div class="subcontent col-md-6">
                <?php
                echo '<h1 class="title" style="color: #fff">' . $row['Title'] . '</h1>'
                    . '<hr>';
                echo '<p style="font-size: 18px;"> <strong> Time: </strong>' . $row['StartDate'] . ' - ' . $row['EndDate'] . '</p>';
                echo '<br /><a class="btn btn-default" target="_" href="index.php"><span class="glyphicon glyphicon-euro"></span> Buy Ticket</a>';
                ?>
            </div>
        </div>
    </section>

</header>