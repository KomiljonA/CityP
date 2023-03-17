
<?php
$pageTitle = "Главная";
require'template/header.php';
?>

        <div id="map">
        </div>

<?php
$pageName = "CityParking";
require'template/main.php';
?>
<?php require'template/footer.php' ?>
    <!--координаты для Parking-->
    <script src="customer/js/parking.js"></script>
</body>
</html>
