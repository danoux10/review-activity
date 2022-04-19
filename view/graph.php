<?php
	session_start();
 $_SESSION['page']='graph';
 $today = date("Y-m-d");
	$years = substr($today, 0, 4);
	$month = substr($today, 5, 2);
	$day = substr($today, 8, 2);
	$dayTime = mktime(0, 0, 0, $month, $day, $years);
 
 include_once '../controller/header.php';
 include_once '../models/graphBack.php';
?>

 <div id="graphForm">
  <div class="formContent">
   <div class="showHiddenActivity hidden">
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
   <fieldset id="addForm">
    <legend>Add Data</legend>
    <!--link form add data-->
    <form action="" method="post">
        <div class="data_input">
            <label for="dateAdd">date</label>
            <input type="date" name="dateAdd" id="dateAdd">
        </div>
        <div class="data_input">
            <label for="hoursStartAdd">Hours Start</label>
            <input type="time" name="hoursStart" id="hoursStartAdd">
        </div>
        <div class="data_input">
            <label for="hoursEndAdd">Hours End</label>
            <input type="time" id="hoursEndAdd" name="hoursEnd">
        </div>
        <div class="data_input">
            <label for="durationAdd">Duration</label>
            <input type="time" id="durationAdd" name="durationAdd">
        </div>
        <div class="data_input">
            <label for="infoAdd">info</label>
            <input type="text" name="info" id="infoAdd">
        </div>
        <div class="data_input">
            <?php echo selectActivity();?>
        </div>
        <button type="submit" name="add_data">Ajouter Data</button>
    </form>
   </fieldset>
  <!--link form update data todo copie paste add & todo change name and id -->
  <!--link today data add view-->
      <div id="table">
        <!-- anchor delete or update-->
        <div class="tableOptions hidden">
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
        <!-- anchor view data today-->
          <fieldset>
              <legend>Data add Today</legend>
              
          </fieldset>
      </div>
   
  </div>
 </div>

<?php include_once '../controller/footer.php'; ?>