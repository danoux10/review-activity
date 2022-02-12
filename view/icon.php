<?php
    session_start();
    $_SESSION['page']='icon';
    include_once '../controller/header.php';
    include_once '../models/iconBack.php';
?>

<div id="icon_add">
    <form action="" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Add Icon</legend>
            <input type="file" name="icon" accept=".svg" required>
            <input type="text" name="iconName">
            <button type="submit" name="addIcon">Ajouter</button>
        </fieldset>
    </form>
</div>
<div id="view_icon">
 <?php echo selectIcon();?>
 <button name="deleteIcon" type="submit">Delete Icon</button>
</div>
<?php include_once '../controller/footer.php'; ?>