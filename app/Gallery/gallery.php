<?php
include_once('_header.php');
include('./Class/GalleryClass.php');
$gallery = new Gallery('./fotos.txt');
$gallery->loadGallery();
foreach ($gallery->__get("_gallery") as $pic) {
    echo ($pic->__get("title"));
    echo "</br>";
    echo ($pic->__get("filename"));
    echo "</br>";
    echo "</br>";
}
echo 'numero de total de fotos : ' . count($gallery->__get("_gallery"));
?>

        <?php
        foreach ($gallery->__get("_gallery") as $pic) {
            echo '<div class="card">';
            echo '<img src="' . $pic->__get("filename") . '" alt="">';
            echo '<div class="card-body">';
            echo '<p>' . $pic->__get("title") . '</p>';
            echo '</div>';
        }
        ?>

<?php include_once('_footer.php') ?>