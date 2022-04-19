<?php
 session_start();
 $_SESSION['page'] = 'activity';
 include_once '../controller/header.php';
 include_once '../models/activityBack.php';
?>
    <div id="activity_form">
        <div class="formContent">
            <div class="showHiddenActivity">
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
            <fieldset id="add_Act">
                <legend>Add Activity</legend>
                <form action="" method="post">
                    <div class="nameAct">
                        <label for="nameAct">Name Activity</label>
                        <input type="text" id="nameAct" name="activityName" value="<?php echo @$_SESSION['cardName']; ?>" placeholder="name" required>
                    </div>
                    <div class="checkSelect">
                        <div id="iconSelect">
                         <?php echo selectIcon();?>
                        </div>
                        <div id="colorSelect">
                         <?php echo colorActivity();?>
                        </div>
                    </div>
                    <div class="actBtnAdd">
                        <button type="submit" name="previewActivity">Preview </button>
                        <button type="submit" name="addActivity">Add</button>
                    </div>
                </form>
            </fieldset>
            <fieldset id="update_Act">
                <legend>Update Activity</legend>
                <form action="" method="post">
                    <div class="nameAct">
                        <label for="nameAct">Name Activity</label>
                        <input type="text" id="nameAct" name="activityName" value="<?php echo @$_SESSION['cardName']; ?>" placeholder="name" required>
                    </div>
                    <div class="checkSelect">
                        <div id="iconSelect">
                         <?php echo selectIcon();?>
                        </div>
                        <div id="colorSelect">
                         <?php echo colorActivity();?>
                        </div>
                    </div>
                    <div class="actBtnAdd">
                        <button type="submit" name="previewActivity">Preview </button>
                        <button type="submit" name="addActivity">Add</button>
                    </div>
                </form>
            </fieldset>
        </div>
        <div class="previewColor">
            <h2 id="previewBtn">preview</h2>
            <div id='previewActivity'>
                <?php echo previewAct(); ?>
            </div>
        </div>
    </div>
    <form method="post" id="view_activity">
     <?php echo selectActCart();?>
        <button type="submit" name="deleteActivity">Delete Activity</button>
    </form>

<?php include_once '../controller/footer.php'; ?>