<?php
    session_start();
    $_SESSION['page']='icon';
    include_once '../controller/header.php';
    include_once '../models/iconBack.php';
?>

<div id="icon_add">
    <div id="showAddIcon">
        <span id="iconHidden">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 3.6">
          <path id="Icon_ionic-md-add" data-name="Icon ionic-md-add" d="M33.75,22.05h-27v-3.6h27Z" transform="translate(-6.75 -18.45)" />
        </svg>
        </span>
        <span id="iconShow">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 27">
              <path id="Icon_ionic-md-add" data-name="Icon ionic-md-add" d="M33.75,22.05H22.05v11.7h-3.6V22.05H6.75v-3.6h11.7V6.75h3.6v11.7h11.7Z" transform="translate(-6.75 -6.75)"/>
            </svg>
        </span>
    </div>
    <form action="" method="post" id="iconFormAdd" enctype="multipart/form-data">
        <fieldset>
            <legend>Add Icon</legend>
            <input type="file" name="icon" accept=".svg" required>
            <label for="iconAddName">Icon name</label>
            <input type="text" name="iconName" placeholder="Icon name" id="iconAddName">
            <button type="submit" name="addIcon">Add</button>
        </fieldset>
    </form>
</div>
<form method="post" id="view_icon">
 <?php echo selectIcon();?>
 <button type="submit" name="deleteIcon">Delete Icon</button>
</form>
<?php include_once '../controller/footer.php'; ?>