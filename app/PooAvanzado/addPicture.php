<?php include_once('_header.php') ?>
<div class="card">
    <div class="card-body">
        <form action="uploadManager.php" method="post" enctype="multipart/form-data">
            <label for="titul">Title:</label>
            <p href=""><input type="text" name="titul" id="titul"></p>
            <label for="file">Picture:</label>
            <p href=""><input type="file" name="foto" id="foto"></p>
            <button class="btn btn-primary" type="submit">Upload</button>
        </form>
    </div>
</div>
<?php include_once('_footer.php') ?>