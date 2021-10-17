<?php
include_once('_header.php');
if (isset($_GET['upload']) && $_GET['upload'] == "success") {
    echo "<div class='alert alert-success alert-dismissible'><h2>Picture Upload</h2></div>";
}
if (isset($_GET['upload']) && $_GET['upload'] == "error") {
    echo '<div class="alert alert-danger" role="alert"><h3>' . $_GET["msg"] . '</h3></div>';
}
?>
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="bd-example">
                <a type="button" class="btn btn-primary" href="addPicture.php">Add picture</a>
                <?php
                if (file_exists("./fotos.txt")) {
                    echo '<a type="button" class="btn btn-success" href="gallery.php?ruta=./fotos.txt">View Gallery</a>';
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include_once('_footer.php') ?>