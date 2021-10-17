<link rel="stylesheet" href="css.css">
<?php
include_once('_header.php');
include('./Class/GalleryClass.php');
$gallery = new Gallery('./fotos.txt');
$gallery->loadGallery();
// foreach ($gallery->__get("_gallery") as $pic) {
//     echo ($pic->__get("title"));
//     echo "</br>";
//     echo ($pic->__get("filename"));
//     echo "</br>";
//     echo "</br>";
// }
// <div class="card-group">
//     <div class="col-sm-12 col-md-4">
//         <div class="card-column ">

//             <div class="custom-column-content">
//                 <img src="./pictures/03.jpg"  style="max-width: 90%; height:90%" alt="">
//                 <p>nom picture</p>
//             </div>
//         </div>
//     </div>
//     <div class="col-sm-12 col-md-4">
//         <div class="card-column ">

//             <div class="custom-column-content">
//                 <img src="./pictures/01.jpg"  style="max-width: 90%; height:90%"  alt="">
//                 <p>nom picture</p>
//             </div>
//         </div>
//     </div>
//     <div class="col-sm-12 col-md-4">
//         <div class="card-column ">

//             <div class="custom-column-content">
//                <img src="./pictures/03.jpg" style="max-width: 90%; height:90%" alt="">
//                <p>nom picture</p>
//             </div>
//         </div>
//     </div>
//     <div class="col-sm-12 col-md-4">
//         <div class="card-column ">

//             <div class="custom-column-content">
//                 <img src="./pictures/04.png" style="max-width: 90%; height:90%"  alt="">
//                 <p>nom picture</p>
//             </div>
//         </div>
//     </div>

//     <div class="col-sm-12 col-md-4">
//         <div class="card-column ">

//             <div class="custom-column-content">
//                 <img src="./pictures/03.jpg" style="max-width: 90%; height:90%" alt="">
//                 <p>nom picture</p>
//             </div>
//         </div>
//     </div>


// </div>
// </div>

echo 'numero de total de fotos : ' . count($gallery->__get("_gallery"));

echo '<div class="card-group">';
foreach ($gallery->__get("_gallery") as $pic) {

    echo '<div class="col-sm-12 col-md-4">';
    echo '<div class="card-column ">';
    echo '<div class="custom-column-content">';
    echo '<img src="' . $pic->__get('filename') . '" style="object-fit:fill;width:600;height:500;border: solid 1px #CCC" alt="">';
    echo '<p align="center">' . $pic->__get('title') . '</p>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
echo '</div>';
?>

<?php include_once('_footer.php') ?>