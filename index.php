<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
    
    $Connection = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed");
    
    
    $Sql_Query = "SELECT * FROM student JOIN std_class WHERE student.std_class = std_class.class_id";

  $result = mysqli_query($Connection, $Sql_Query) or die("Query Failed");

  if(mysqli_num_rows($result) > 0){

    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>

        <?php
        
        while($Rows = mysqli_fetch_assoc($result)){
        
        
        ?>
            <tr>
                <td><?php echo $Rows['std_id']; ?></td>
                <td><?php echo $Rows['std_name']; ?></td>
                <td><?php echo $Rows['std_address']; ?></td>
                <td><?php echo $Rows['course_name']; ?></td>
                <td><?php echo $Rows['std_phone']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $Rows['std_id']; ?>'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>


            <!-- <tr>
                <td>2</td>
                <td>Suresh</td>
                <td>Punjab</td>
                <td>BCOM</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Suresh</td>
                <td>Haryana</td>
                <td>BSC</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Krishna</td>
                <td>Gujrat</td>
                <td>BCA</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Rohit</td>
                <td>Delhi</td>
                <td>BCA</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr> -->
            <?php } ?>
        </tbody>
    </table>
    <?php }else{
        echo "<h2>No Record Found</h2>";
    }

    mysqli_close($Connection);

    ?>
</div>
</div>
</body>
</html>
