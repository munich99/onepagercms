<?php
if(isset($_GET['action'])){
    $headline = $_GET['action'];
} else {
    $headline = $_POST['action'];

}
$title = "";
$mutedTitle = "";
$Text = "";
$sid = "";
$id = "";
$backgroundimage = "";

?>
<!DOCTYPE html>
<html>

<?php include_once "../core/inc/head.php" ?>

<?php include_once "../core/inc/header.php" ?>

<div class="container">
    <div class="row">
        <div class="col">

        </div>
        <div class="col-6">
            <h1><?php echo "$headline" ?> Standard-Section</h1>

            <form enctype="multipart/form-data" action="../misc/backgroundupload.php" method="post" id="uploadform">
                <div class="form-group">
                    <img class="img-fluid" src="<?php echo $backgroundimage ?>"><br>
                    <label for="image-upload">Bild hochladen:</label>
                    <input type="hidden" id="id" class="form-control" name="id" readonly
                           value="<?php echo $id ?>">
                    <input type="hidden" id="action" class="form-control" name="action" readonly
                           value="<?php echo $sid ?>">
                    <input name="background-upload" class="form-control-file" type="file"/>
                </div>
                <div class="form-group">

                    <input type='submit' class="btn btn-secondary" name='upload'
                           id='image-upload' value='Upload'>
                </div>

            </form>

            <form action="../misc/changestandard.php" method="post" id="changeform">
                <div class="form-group">
                    <input type="hidden" id="id" class="form-control" name="id" readonly value="">
                </div>

                <div class="form-group">
                    <input type="hidden" id="specialid" class="form-control" name="author" readonly
                           >
                </div>

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" id="title" class="form-control" required name="title"
                           >
                </div>

                <div class="form-group">
                    <label for="openinghours">Muted Title:</label>
                    <input type="text" id=mutedtitle" class="form-control" required
                           name="mutedtitle"
                           >
                </div>

                <div class="form-group">
                    <label for="description">Text:</label>
                    <textarea rows="4" id="text" class="form-control" required form="changeform"
                              name="text"
                              cols="73"></textarea>
                </div>


                <div class="form-group">
                    <input type="hidden" id="image" class="form-control" required name="image" readonly
                           value="">
                </div>

                <div class="form-group">
                    <input type='submit' class="btn btn-primary" name='action'
                           id='change' value='<?php echo $headline ?>'>
                </div>
            </form>

        </div>
        <div class="col"></div>
    </div>
</div>
</body>
</html>