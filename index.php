<!DOCTYPE html>
<html>
<head>
  <title>Tic Tac Toe</title>
  <style>
    table {
      border-collapse: collapse;
    }
    td {
      width: 50px;
      height: 50px;
      text-align: center;
      vertical-align: middle;
      border: 1px solid black;
    }
  </style>
</head>
<body>
  <table>
    <?php
      $board = array(
        array("", "", ""),
        array("", "", ""),
        array("", "", "")
      );

      for ($row = 0; $row < 3; $row++) {
        echo "<tr>";
        for ($col = 0; $col < 3; $col++) {
          echo "<td>" . $board[$row][$col] . "</td>";
        }
        echo "</tr>";
      }
    ?>
  </table>
</body>
</html>
