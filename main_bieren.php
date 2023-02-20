<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=bieren","root","");
    $query = $db->prepare("SELECT naam, alcohol FROM bier");
    $query->execute();

    echo "<table>";
    echo "<tr>";
    echo "<th>Biernaam</th>";
    echo "<th>Alcoholpercentage</th>";
    echo "</tr>";

    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
      echo "<table>";
        echo "<tr>";
        echo "<td>" . $row['naam'] . "</td>";
        echo "<td>" . $row['alcohol'] . "</td>";
        echo "</tr>";
      echo "</table>";

    }
    echo "</table>";
} catch(PDOException $e) {
    die("Error!: " . $e->getMessage());
}
?>


<style type="text/css">
  table {
    border-collapse: collapse;
    border: 1px solid black;
  }
  td{
    border: 1px solid black;
    width: 100px;
  }
</style>