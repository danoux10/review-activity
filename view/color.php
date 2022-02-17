<?php
 session_start();
 $_SESSION['page'] = 'color';
 //anchor defaut value
 $_SESSION['back'] = '#888888';
 $_SESSION['fill'] = '#880000';
 $_SESSION['border'] = '#00ff00';
 $_SESSION['color'] = '#fffff';
 
 $actBack ='on';
 $actFill ='on';
 $actBorder ='on';
 
 @$back = $_SESSION['back'];
 @$fill = $_SESSION['fill'];
 @$border = $_SESSION['border'];
 @$color = $_SESSION['color'];
 include_once '../controller/header.php';
 include_once '../models/colorBack.php';

?>
<div id="colorForm">
    <div class="formContent">
        <div class="showHiddenColor">
            <span class="s&hBtn" id="updateBtn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 27">
                  <path id="Icon_awesome-pen" data-name="Icon awesome-pen"
                        d="M15.331,4.917l6.751,6.751L7.423,26.328,1.4,26.993a1.266,1.266,0,0,1-1.4-1.4l.67-6.023L15.331,4.917ZM26.258,3.912,23.088.742a2.532,2.532,0,0,0-3.581,0L16.525,3.724l6.751,6.751,2.982-2.982a2.533,2.533,0,0,0,0-3.581Z"
                        transform="translate(0.001 0)"/>
                </svg>
            </span>
            <span class="s&hBtn" id="addBtn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 27">
              <path id="Icon_ionic-md-add" data-name="Icon ionic-md-add"
                    d="M33.75,22.05H22.05v11.7h-3.6V22.05H6.75v-3.6h11.7V6.75h3.6v11.7h11.7Z"
                    transform="translate(-6.75 -6.75)"/>
            </svg>
            </span>
        </div>
        <fieldset id="color_add">
            <legend>Add Color</legend>
            <form action="" method="post">
                <div>
                    <label for="backAdd">back</label>
                    <input id="backAdd" type="color" value="<?php echo $_SESSION['back']; ?>" name="back">
                    <span class="slide">
                        <input type="checkbox" <?php if (@$actBack == 'on') {echo 'checked';} ?> name="activeBack" id="actBack">
                        <label for="actBack">
                            <div class="cercle"></div>
                        </label>
                    </span>
                </div>
                <div>
                    <label for="fillAdd">fill</label>
                    <input id="fillAdd" type="color" value="<?php echo $_SESSION['fill']; ?>" name="fill">
                    <span class="slide">
                        <input type="checkbox" id="actFill" <?php if (@$actFill == 'on') {echo 'checked';} ?> name="activeFill">
                        <label for="actFill">
                            <div class="cercle"></div>
                        </label>
                    </span>
                </div>
                <div>
                    <label for="borderAdd">border</label>
                    <input id="borderAdd" type="color" value="<?php echo $_SESSION['border'] ?>" name="border">
                    <span class="slide">
                         <input type="checkbox" id="actBorder" <?php if (@$actBorder == 'on') {echo 'checked';} ?> name="activeBorder">
                        <label for="actBorder">
                            <div class="cercle"></div>
                        </label>
                    </span>
                </div>
                <div>
                    <label for="textAdd">text</label>
                    <input id="textAdd" type="color" value="<?php echo $_SESSION['color']; ?>" name="textColor">
                    <span class="slide">
                    </span>
                </div>
                <div class="btn">
                    <button type="submit" name="addColor">Add</button>
                    <button type="submit" name="preview">preview</button>
                </div>
            </form>
        </fieldset>
        <fieldset id="color_update">
            <legend>update Color</legend>
            <form action="" method="post">
                <div>
                    <label for="backAdd">back</label>
                    <input id="backAdd" type="color" value="<?php echo $_SESSION['back']; ?>" name="back">
                    <span class="slide">
                        <input type="checkbox" <?php if (@$actBack == 'on') {echo 'checked';} ?> name="activeBack" id="actBack">
                        <label for="actBack">
                            <div class="cercle"></div>
                        </label>
                    </span>
                </div>
                <div>
                    <label for="fillAdd">fill</label>
                    <input id="fillAdd" type="color" value="<?php echo $_SESSION['fill']; ?>" name="fill">
                    <span class="slide">
                        <input type="checkbox" id="actFill" <?php if (@$actFill == 'on') {echo 'checked';} ?> name="activeFill">
                        <label for="actFill">
                            <div class="cercle"></div>
                        </label>
                    </span>
                </div>
                <div>
                    <label for="borderAdd">border</label>
                    <input id="borderAdd" type="color" value="<?php echo $_SESSION['border'] ?>" name="border">
                    <span class="slide">
                         <input type="checkbox" id="actBorder" <?php if (@$actBorder == 'on') {echo 'checked';} ?> name="activeBorder">
                        <label for="actBorder">
                            <div class="cercle"></div>
                        </label>
                    </span>
                </div>
                <div>
                    <label for="textAdd">text</label>
                    <input id="textAdd" type="color" value="<?php echo $_SESSION['color']; ?>" name="textColor">
                </div>
                <div class="btn">
                    <button type="submit" name="addColor">update</button>
                    <button type="submit" name="preview">preview</button>
                </div>
            </form>
        </fieldset>
    </div>
    <div class="previewColor">
        <h2 id="previeBtn">preview</h2>
        <div id='previewColor' >
         <?php echo preview(); ?>
        </div>
    </div>
</div>
<form action="" method="post" id="view_color">
    <?php  echo selectColor(); ?>
    <button type="submit" name="selectColor">Select Color</button>
</form>

<?php include_once '../controller/footer.php'; ?>
