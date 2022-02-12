<?php
     session_start();
     $_SESSION['page']='color';
     include_once '../controller/header.php';
// require_once '../function/color.php';
 include_once '../models/colorBack.php';
?>
<body>
<?php
    include_once '../controller/navbar.php';
?>
<form action="" method="post">
    <div>
        <label for="">back</label>
        <input type="color" value="<?php echo $_SESSION['back']; ?>" name="back">
        <input type="checkbox" <?php if ($actBack == 'on') {
         echo 'checked';
        } ?> name="activeBack">
    </div>
    <div>
        <label for="">fill</label>
        <input type="color" value="<?php echo $_SESSION['fill']; ?>" name="fill">
        <input type="checkbox" <?php if ($actFill == 'on') {
         echo 'checked';
        } ?> name="activeFill">
    </div>
    <div>
        <label for="">border</label>
        <input type="color" value="<?php echo $_SESSION['border'] ?>" name="border">
        <input type="checkbox" <?php if ($actBorder == 'on') {
         echo 'checked';
        } ?> name="activeBorder">
    </div>
    <div>
        <label for="">text</label>
        <input type="color" value="<?php echo $_SESSION['color']; ?>" name="textColor">
    </div>
    <input type="submit" name="addColor" value="add">
    <input type="submit" name="preview" value="preview">
</form>
<?php
 echo preview();
 echo '<br>';
 echo selectColor();
?>
</body>
</html>
