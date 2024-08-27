<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) 
  {
    echo "<div class="."status"."><b>";
      $status = die("Falha na conexão: <br>" . $conn->connect_error);
    echo "</div>";
  }
else
  {
    echo "<div class="."status"."><b>";
      $status = "Conectado com sucesso";
    echo "</div></b>";
  }
?>