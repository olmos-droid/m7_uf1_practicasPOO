<?php
include_once('_header.php');
include('./Class/GalleryClass.php');
$gallery = new Gallery('./fotos.txt');
$gallery->loadGallery();
?>


<div class="card">
    <div class="card-body">

    </div>
</div>
<?php include_once('_footer.php') ?>