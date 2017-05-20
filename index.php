<html>
<header>
<link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
<style>
      body {
        font-family: 'Indie Flower', serif;
        font-size: 28px;
      }
    </style>
</header>
<body>

<?php

echo "<div align='center'><img width='400px' src='https://static.wixstatic.com/media/99e1c6_ee5196f474d6417ca79823b2308a2b7f~mv2.png/v1/fill/w_1070,h_274,al_c,usm_0.66_1.00_0.01/99e1c6_ee5196f474d6417ca79823b2308a2b7f~mv2.png' /></div>";
echo "<div align='center'>";
echo "<h1>Hello World !</h1>";
echo "This is my very first Cloud Native App !";

echo "<p>This instance is running with the local port ".getenv("VCAP_APP_PORT")."</p>";
echo "</div>";
?>

</body>
</html>
