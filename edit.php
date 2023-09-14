<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
        $Connection = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed");
    
        $stu_id = $_GET['id'];

        $Sql_Query = "SELECT * FROM student WHERE std_id = {$stu_id}";
    
      $result = mysqli_query($Connection, $Sql_Query) or die("Query Failed");
    
      if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['std_id']; ?>"/>
          <input type="text" name="sname" value="<?php echo $row['std_name']; ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row['std_address']; ?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>
          <?php
          $sql_table_query = "SELECT * FROM std_class";
          $run_table_query = mysqli_query($Connection,$sql_table_query) or die("Query Failed");

          if(mysqli_num_rows($run_table_query) > 0){
            echo '<select name="sclass">';

            while($row1 = mysqli_fetch_assoc($run_table_query)){
                if($row['std_class']==$row1['class_id']){
                    $select = "selected";
                }else{
                    $select = "";
                }
          
            echo "<option {$select} value='{$row1['class_id']}'>{$row1['course_name']}</option>";
            }    
          echo "</select>";
        }
          ?>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row['std_phone']; ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php }
      }
     ?>
</div>
</div>
</body>
</html>
