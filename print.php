<!--Link add data-->
<form action="" method="post">
 <div>
  <label for="">date</label>
  <input type="date" name="dateAdd">
 </div>
 <div>
  <label for="">Hours Start</label>
  <input type="time" name="hoursStart">
 </div>
 <div>
  <label for="">Hours End</label>
  <input type="time" name="hoursEnd">
 </div>
 <div>
  <label for="">Duration</label>
  <input type="time" name="durationAdd">
 </div>
 <div>
  <label for="">info</label>
  <input type="text" name="info">
 </div>
 <div>
  <?php echo selectActivity(); ?>
 </div>
 <input type="submit" name="add_data">
</form>
<?php
 //    echo acvitityToday();
?>
<!--link view data-->
<form action="" method="post">
 <div>
  <label for="">date Start</label>
  <input type="date" name="dateStart">
 </div>
 <div>
  <label for="">date end</label>
  <input type="date" name="dateEnd">
 </div>
 <div>
  <?php echo selectActivity(); ?>
 </div>
 <input type="submit" name="view">
</form>