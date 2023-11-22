<?php

require_once "components/db_connection.php";

$tbody = "";
$db = new DBConnection();
$sql = "select * from employees where `emp_no` <= 10100";

$result = $db->query($sql);

while ($row = $result->fetch_assoc()) {
  $tbody .= "
        <tr>
            <th scope='row'>$row[emp_no]</th>
            <td>$row[first_name]</td>
            <td>$row[last_name]</td>
            <td>$row[birth_date] Date</td>
            <td>$row[hire_date] Date</td>
            <td>$row[gender]</td>
        </tr>
  ";
}

?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>DBClass</title>
</head>

<body>
  <div class="container pt-5">

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Birth Date</th>
          <th scope="col">Hire Date</th>
          <th scope="col">Gender</th>
        </tr>
      </thead>
      <tbody>
        <?= $tbody ?>
      </tbody>
    </table>
  </div>
</body>

</html>