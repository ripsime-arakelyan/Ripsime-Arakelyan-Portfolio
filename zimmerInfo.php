<?php
include 'db-connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="zi-style.css">
    <title>Zimmer Information</title>
    <style>



      .tabelle a {
        text-decoration: none;
        color: #dddddb;
      }

      .image{
          width: 350px;
          margin: 0 auto;
      }

      .room_info {
        margin-top: 10px;
        font-size: 18px;
        font-family: Arial, sans-serif;
        color: #dddddb;
      }

      h1{
        color:#dddddb;
        font-family: 'Outfit', sans-serif;
        font-weight: bold;
         margin-left: 100px; 
      }

      table {
        margin: 0 auto;
      }

      .tabelle td{

        justify-content: space-between;
        display: inline-table;
        padding: 10px 10px 10px 10px;
        margin: 10px 10px 10px 10px;
        margin-left: 100px;
    
   
      }

      .tabelle .zimmern{
        background-color: #333333;
        border-radius: 10px;
        padding: 15px 15px 15px 15px;
        width: 300px;
        height: 300px;
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


  <div class="goback-button">
    <a href="#" onclick="goBack()"><button>zurück</button></a>
  </div>
    
 
<h1>Unsere Zimmer</h1>

<table class="tabelle" >
            <tr>
            <?php 
            
            $sql = "SELECT * FROM zimmern";
            $result = $conn->query($sql);

        
                $num = 0;
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<td class="zimmern" data-rooms="'.($num + 1).'">';
                        echo '<a href="#?data-rooms='.($num + 1).'"> <img src="images/room'.($num + 1).'.jpg" alt="" class="image">';
                        $num = ($num + 1);
                        echo ' <div class="room_info" > №:'
                        .$row["zimmer_nummer"]. " <br>  " 
                        .$row["zimmer_art"]. " <br> Preis " 
                        .$row["preis"]."€ pro Nacht <br>"
                        .$row["beschreibung"]." <br>  ";

                        echo "</div>";
                        echo "</a>";
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