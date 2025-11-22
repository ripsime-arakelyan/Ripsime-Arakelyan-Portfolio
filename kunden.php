<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kunden</title>
    <link rel="stylesheet" href="k-style.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Prata&display=swap');

      .kundenliste{
        display: block;
        align-items: center;
        color: #dddddb;
        margin: 50px;
        padding: 20px;
        border: 2px solid #b32323;
        border-radius: 15px;
        background-color: #2e0b0b;

      }

      h1{
        color:#dddddb;
        font-family: 'Outfit', sans-serif;
        font-weight: bold;
        text-align: center;
      }

      td.kunden{
        padding: 10px;
        gap: 15px;
        font-family: "Prata", serif;
        font-size: 20px;
        display: flex;
        flex-direction: row;
      }

      .kunden{
        font-family: "Prata", serif;
        font-size: 20px;
        display: flex;
        flex-direction: row;
      }
      
      .td{
        padding-left: 200px;
      }

    </style>
</head>
<body>

<div class="header">
<header>
    <div id="logo">DEVRRI</div>
    <nav>
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="zimmerInfo.php">Zimmern</a></li>
            <li><a href="uberuns.php">Über uns</a></li>
            <li><a href="kunden.php">Kunden</a></li>
        </ul>
    </nav>
</header>  
</div>   


<?php include "db-connect.php"; ?>
<div class="goback-button">
    <a href="#" onclick="goBack()"><button>zurück</button></a>
</div>
    
 
<h1>Kundenliste:</h1>

<table class="kundenliste" >
            <tr>
            <?php 
            
            $sql = "SELECT * FROM kunden";
            $result = $conn->query($sql);

        
                $num = 0;
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<td class="kunden" data-rooms="'.($num + 1).'">';
                        echo '<tr data-rooms='.($num + 1).'>';
                        $num = ($num + 1);
                        echo ' <div class="kunde_info" >';
                        echo '<td class="td">'.$row["name"]. " </td>  " ;
                        echo '<td class="td">'.$row["email"]. " </td>  " ;
                        echo '<td class="td">'.$row["phone"]." </td> ";
                        echo '<td class="td">'.$row["id"]." </td>  ";

                        echo "</div>";
                        echo "</tr>";
                        echo "</td>";

                    }
            } else {
                echo "Keine Ergebnisse gefunden";
            }
            ?>     
        </tr>
        </table>
       



<footer>
  <div class="blocks container">
    <div>
      <h4>Events:</h4>
      <ul>
        <li>Mo 22.10.25 - Geburtstagsparty des Hotels "DEVRRI" (20 Jahre)</li>
        <li>Di 23.10.25 - Konzert mit live Musik</li>
      </ul>
    </div>
    <div>
      <h4>Über uns</h4>
      <ul>
        <li><a href="uberuns.php">Gründung</a></li>
        <li><a href="uberuns.php#ausbildung">Ausbildung</a></li>
      </ul>
    </div>
    <div>
      <h4>Kontakt</h4>
      <span>📍 Musterstraße 12, 22000 Berlin</span>
      <p> ✉️ E-Mail: info@devrri.de</p>
      <p> 📞 tel: +4917551027090</p>
    </div>
  </div>
  <hr>
  <p>© 2025 DEVRRI Berlin – Alle Rechte vorbehalten.</p>
</footer>




<script>
function goBack() {
  window.history.back();
}
</script>

</body>
</html>