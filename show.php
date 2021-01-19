<?php

    $link = new mysqli("localhost","root","","formdb");




?>

<table>
    <tr>
        <th>Name</th>
        <th>ID</th>
        <th>Email</th>
        <th>Dept</th>
        <th>Reg</th>
        <th>Sess</th>
        <th>Sex</th>
    </tr>
    <?php
    
        $sql = "select * from information";
        $result = $link->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){

            
        
    
    ?>
    <tr>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['Id'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['dept'] ?></td>
        <td><?php echo $row['reg'] ?></td>
        <td><?php echo $row['sess'] ?></td>
        <td><?php echo $row['sex'] ?></td>
    </tr>
    <?php
            }

        }
    
    ?>
</table>