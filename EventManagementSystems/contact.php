<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Urban Events</title>
    <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
    <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
</head>

<body>
    <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
    <div class="content"><!--body content holder-->
        <div class="container">
            <div class="col-md-12"><!--body content title holder with 12 grid columns-->
                <h1>Contact Us</h1><!--body content title-->
            </div>
        </div>

        <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
        </div>

        <div class="container">
            <div class="col-md-6 contacts">
                <h1><span class="glyphicon glyphicon-user"></span> Lego Student (24866)</h1>
                <p>
                    <span class="glyphicon glyphicon-envelope"></span> Email: lego_student@gmail.com<br>
                    <span class="glyphicon glyphicon-link"></span> Facebook: www.facebook.com/lego<br>
                    <span class="glyphicon glyphicon-phone"></span> Mobile: 0723456780
                </p>
                <h4 style="padding: 20px 0;">Location</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31900.1084566949!2d30.044312367623693!3d-1.9475792526779077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca6f9a9f85475%3A0x81d16dcc3c7b2f4b!2sAUCA%20Gishushu%20Campus!5e0!3m2!1sen!2sde!4v1723392845921!5m2!1sen!2sde" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label for="Name">Name:</label>
                        <input type="text" name="name" id="Name" class="form-control" placeholder="John/Jane Doe">
                    </div>
                    <div class="form-group">
                        <label for="Name">Email:</label>
                        <input type="email" name="tame" id="Name" class="form-control" placeholder="xxx@yyy.zz">
                    </div>
                    <div class="form-group">
                        <label for="Name">Address (City):</label>
                        <select class="form-select border-0 form-control" style="height: 55px;">
                            <option selected>Kigali</option>
                            <option value="2">Muhanga</option>
                            <option value="3">Gisenyi</option>
                            <option value="3">Butare</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Comment">Message:</label>
                        <textarea id="Comment" rows="10" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default pull-right">Send <span class="glyphicon glyphicon-send"></span></button>
                </form>
            </div>
        </div>
    </div><!--body content div-->
    <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    <!--Main-->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <!--Switcher-->
    <script src="assets/switcher/js/switcher.js"></script>
    <!--Owl Carousel-->
    <script src="assets/owl-carousel/owl.carousel.min.js"></script>
    <!--
		<script src="assets/contact/jqBootstrapValidation.js"></script> 
		<script src="assets/contact/contact_me.js"></script>
		<!-- SCRIPTS -->
    <script type="text/javascript" src="assets/isotope/jquery.isotope.min.js"></script>
    <!--Theme-->
    <script src="js/jquery.smooth-scroll.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/smoothscroll.min.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>