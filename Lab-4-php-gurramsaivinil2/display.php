<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registered Participants</title>
</head>
<body>
  <h1>Registered Participants</h1>
  <table border="1">
    <tr>
      <th>Full Name</th>
      <th>Email</th>
      <th>Phone</th>
    </tr>
    <?php
    $lines = file('registrations.csv', FILE_IGNORE_NEW_LINES);
    foreach ($lines as $line) {
      list($fullName, $email, $phone) = explode(', ', $line);
      echo "<tr><td>$fullName</td><td>$email</td><td>$phone</td></tr>";
    }
    ?>
  </table>
</body>
</html>
