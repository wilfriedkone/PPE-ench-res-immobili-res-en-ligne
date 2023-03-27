
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "immobilier";
$port="3307";



// Connexion à la base de données

$link = new mysqli($servername, $username, $password, $dbname, $port);


      if (isset($_POST['btsubmit'])){
        $mp=$_POST['map'];
        $arrondissement=$_POST['arrondissement'];
        $tj=$_POST['tj'];
        $type=$_POST['ty'];
        $rayon=$_POST['rayon'];
        $reqSelect="SELECT * FROM maison WHERE map LIKE '%$mp%' OR arrondissement LIKE '%$arrondissement%' OR tj LIKE '%$tj%' OR ty LIKE '%$type%' OR rayon LIKE '%$rayon%'" ;
        $resultat=mysqli_query($link,$reqSelect);
    }
    else{
      $reqSelect="select * from maison";
    }
    
    while ($ligne=mysqli_fetch_assoc($resultat))
    {
  
    ?>

<div id="maison">
    <img src="<?php echo $ligne['photo']?>" ><br>
    <?php echo $ligne['ty'] ; ?><br>
    <?php echo $ligne['arrondissement'] ; ?><br>
    <?php echo $ligne['tj'] ; ?><br>
    <?php echo $ligne['map'] ; ?>
</div>
<?php  } ?>
</body>
</html>