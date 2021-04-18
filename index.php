<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color: darkgray;">

<div class="container" style="background-color: lightgray; margin-top:50px;">
<table class="table">
    <thead>
      <tr>
      <th>Num</th>
        <th>Number</th>
        <th>Email</th>
        <th>Balance</th>
        <th></th>
      </tr>
    </thead>
    <?php
      $con = mysqli_connect("localhost", "root", "", "users");
      $sql = "SELECT * FROM `customers`";
      $result = mysqli_query($con, $sql);
      while($row = mysqli_fetch_assoc($result)){
          echo "<tr>";
          
          echo "
          <td style='background-color: #aaaeaf4d;border-color: #36363b;'>". $row['Num'] . "</td>
          <td style='background-color: #aaaeaf4d;border-color: #36363b;'>". $row['Name'] . "</td>
          <td style='background-color: #aaaeaf4d;border-color: #36363b;'>". $row['Email'] . "</td>
          <td style='background-color: #aaaeaf4d;border-color: #36363b;'>". $row['Balance'] . "</td>";
          echo "<td style='background-color: #aaaeaf4d;border-color: #36363b;'><button onclick=window.location.href='VAC1.php' type='submit'style='background-color:#d3d3d3; border-color:#d3d3d3  ;{$row['Money']}' >Transfer</button></td>";
          echo  "</tr>";
      }
      ?>
  </table>
</div>

</body>
</html>
