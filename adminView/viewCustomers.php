<div >
  <h2>All Customers</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Id</th>
        <th class="text-center">Full Name</th>
        <th class="text-center">Gender</th>
        <th class="text-center">Email</th>
        <th class="text-center">Password</th>
        <th class="text-center">Contact Number</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from registration";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["firstName"]?> <?=$row["lastName"]?></td>
      <td><?=$row["gender"]?></td>
      <td><?=$row["email"]?></td>
      <td type="password"><?=$row["password"]?></td>
      <td><?=$row["number"]?></td>
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>