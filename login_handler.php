<!doctype html>
<html>
<head>
  <title>login handler</title>
  <meta charset="UTF-8">
</head>
<body>
  <h3><?php echo "Welcome"; ?></h3>
  <table>
    <tr>
      <td>Email: </td>
      <td><?php echo $_POST["email"]; ?></td>
    </tr>
    <tr>
      <td>Password: </td>
      <td><?php echo $_POST["password"]; ?></td>
    </tr>
  </table> 
  <p><a href="/login.html">Login again</a></p>
</body>
</html>
