<?php
include 'db-connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ub-style.css">
    <title>Über uns</title>
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
 

 

<div class="wrapper">


<div class="goback-button">
    <a href="#" onclick="goBack()"><button>zurück</button></a>
  </div>
<script>
function goBack() {
  window.history.back();
}
</script>
  


  <div class="uber-img">
    <img src="images/aboutus1.png" alt="">
  </div>


  <div class="uber-text">
    <div class="uber-text-inner">
    <p>
      Willkommen im Hotel Devrri – Ihrem Rückzugsort für Erholung und Gastfreundschaft! Inmitten einer atemberaubenden Landschaft, umgeben von Ruhe und Natur, bieten wir Ihnen einen Ort, an dem Sie sich wie zu Hause fühlen können. Unser Hotel steht für herzliche Gastfreundschaft, erstklassigen Service und ein unvergessliches Aufenthaltserlebnis.
    </p>
    <p>
      Unser Anliegen ist es, Ihnen nicht nur eine komfortable Unterkunft zu bieten, sondern auch Momente des Wohlbefindens und der Entspannung zu schaffen. Mit einer perfekten Mischung aus modernem Komfort und traditioneller Gastfreundschaft sorgen wir dafür, dass Sie sich während Ihres Aufenthalts rundum wohlfühlen.
    </p>
    <ul>
      <li>
        Jedes unserer Zimmer ist mit Liebe zum Detail gestaltet und bietet den perfekten Rückzugsort nach einem erlebnisreichen Tag. Ob geschäftlich oder privat – im Hotel Devrri finden Sie die ideale Balance aus Ruhe und Inspiration.
      </li>

      <li>
        In unserem Restaurant genießen Sie regionale und internationale Köstlichkeiten, zubereitet mit frischen Zutaten aus der Umgebung.
      </li>

      <li>
        Unser Wellnessbereich lädt zum Entspannen ein – tanken Sie neue Energie bei einer Massage oder in der Sauna.
      </li>
    </ul>
    <p>
      Hotel Devrri ist mehr als ein Ort zum Übernachten – es ist ein Ort, an dem Erinnerungen entstehen.
    </p>
    </div>
  </div>
</section>

<hr class="hr1">

<section class="ausbildung-teil" id="ausbildung">

  <h1>Karieremöglichkeit</h1>
  <div class="block container">
    <div class="ausb-text">
        <h2>Ausbildung bei uns:</h2>
        <p>Du suchst einen spannenden Start ins Berufsleben? Im Hotel Devrri bieten wir engagierten jungen Menschen vielseitige Ausbildungsplätze in den Bereichen Hotelfach, Restaurantfach und Küche. Bei uns lernst du von erfahrenen Profis, arbeitest in einem motivierten Team und bekommst Einblicke in alle Bereiche eines modernen Hotelbetriebs.</p>
        <a href="#"> <button> sich bewerben ></button></a>
    </div>
    <div class="ausb-img">
        <img src="images/ausbildung-img.png" alt="">
    </div>
  </div>

</section>
</div>

<footer>
  <div class="blocks container">
    <div>
      <h4>Events:</h4>
      <ul>
        <li>Mo 22.10.25 - Geburtstagsparty des Hotels</li>
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



</body>
</html>