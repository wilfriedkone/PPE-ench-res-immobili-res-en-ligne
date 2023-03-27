<?php 
include "cnx.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
    header{
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 20;
    background-color: #000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 8%;
    height: 75px;
    box-shadow: 0 0 10px 0 rgba(0,0,0,0.2);
}
.menu{
    display: flex;
}
.menu li{
    list-style: none;
    margin: 0 15px;
}
.menu li a{
    font-size: 14px;
    color: #fff;
    font-weight: 300;
    transition: 0.2s;
      
}
.menu li a:hover{
    color: #ffd601;
}
header button{
    background-color: #ffd601;
    cursor: pointer;
    color: #fff;
    padding: 5px 25px;
    border-radius: 20%;
}


      .box {
    margin: 0 auto;
    text-align: center;
    background-color: #000;
    border: 1px solid #ccc;
    padding: 77px;
    width: 50%;
    margin-bottom: 10px;
  }
  
  button[type="submit"] {
    background-color: #fcd703;
    border: none;
    color: #000;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    margin-top: 10px;
  }
  
  label {
    display: inline-block;
    width: 120px;
    text-align: left;
    margin-top: 10px;
    color: #fff;
  }
  
  select {
    padding: 8px 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-top: 10px;
    width: 200px;
  }
  
  input[type="text"] {
    padding: 8px 16px;
    border: 1;
    margin-top: 10px;
    
  
  }
      #formmaison{
       position:relative;
       border:1px solid;
       border-left:none;border-right:none;
       background-color:rgba(000,000,000,0.2);
       margin-left:auto;margin-right:auto;
       width:70%;min-height:10%;
       text-align:center;
       padding:2%
   }
   #maison {
    border:1px solid #999;
       width:250px;
       height:300px;
       margin:10px;
       padding:20px;
       float:left; 
       color:#fff;
       background: #000;
       border-radius: 8px;
}

#maison img {
  display: grid;
  grid-template-columns:repeat(3, 1fr);
  width: 150px;
  margin: 15px;
  padding: 10px;
  border: 5px solid yellow;
}
    </style>
     <style>
     /**  #maison{
       position:relative;
       border:1px solid;
       border-left:none;border-right:none;
       background-color:rgba(000,000,000,0.2);
       margin-left:auto;margin-right:auto;
       width:70%;min-height:10%;
       text-align:center;
       padding:2%
   }
   #maison{
       border:1px solid #999;
       width:100px;
       min-height:100px;
       margin:10px;
       padding-left:20px;
       float:left; 
   }
   #maison .imagesad {
       margin:5px;
       width:100px;
       height:100px;
       padding: auto;
   } */ 
    </style> 
</head>
<body>

<header>
    <div class="logo">
        <img src="logo.png" alt="" width="100">
    </div>
    <ul class="menu">
        <li><a href="Acceuil.html">Acceuil</a></li>
        <li><a href="ventes.html">ventes</a></li>
        <li><a href="connexioncal.html">Calendrier</a></li>
        <li><a href="annuaire.html">Annuaires</a></li>
        <li><a href="#">Résultats</a></li>
    </ul>
    <button class="longin_btn"><a href="connexion.html">Connexion</a></button>

   </header>
    


    <div class="box">
        <form name="formmaison" method="POST" action="resultat.php">
          <label for="arrondissements">Arrondissements:</label>
          <select id="arrondissements" name="arrondissement">
            <option value="">-- Sélectionner un arrondissement --</option>
            <option value="1">1er arrondissement</option>
            <option value="2">2ème arrondissement</option>
            <option value="3">3ème arrondissement</option>
            <option value="3">4ème arrondissement</option>
            <option value="3">5ème arrondissement</option>
            <option value="3">6ème arrondissement</option>
            <option value="3">7ème arrondissement</option>
            <option value="3">8ème arrondissement</option>
            <option value="3">9ème arrondissement</option>
            <option value="3">10ème arrondissement</option>
            <option value="3">11ème arrondissement</option>
            <option value="3">12ème arrondissement</option>
            <option value="3">13ème arrondissement</option>
            <option value="3">14ème arrondissement</option>
            <option value="3">15ème arrondissement</option>
            <option value="3">16ème arrondissement</option>
            <option value="3">17ème arrondissement</option>
            <option value="3">18ème arrondissement</option>
            <option value="3">19ème arrondissement</option>
            <option value="3">20ème arrondissement</option>

          </select>
          <br>
          <label for="tribunaux">Tribunaux judiciaires:</label>
          <select id="tribunaux" name="tj" >
            <option value="">-- Sélectionner un tribunal --</option>
            <option value="paris-1">Tribunal judiciaire de Paris - 1er arrondissement</option>
            <option value="paris-2">Tribunal judiciaire de Paris - 2ème arrondissement</option>
            <option value="paris-3">Tribunal judiciaire de Paris - 3ème arrondissement</option>
            <option value="paris-3">Tribunal judiciaire de Paris - 4ème arrondissement</option>
            <option value="paris-3">Tribunal judiciaire de Paris - 5ème arrondissement</option>
            <option value="paris-3">Tribunal judiciaire de Paris - 6ème arrondissement</option>
            <option value="paris-3">Tribunal judiciaire de Paris - 7ème arrondissement</option>
            <option value="paris-3">Tribunal judiciaire de Paris - 8ème arrondissement</option>
            <option value="paris-3">Tribunal judiciaire de Paris - 9ème arrondissement</option>
            <option value="paris-3">Tribunal judiciaire de Paris - 10ème arrondissement</option>
            <option value="paris-3">Tribunal judiciaire de Paris - 11ème arrondissement</option>
            <option value="paris-3">Tribunal judiciaire de Paris - 12ème arrondissement</option>
            <option value="paris-3">Tribunal judiciaire de Paris - 13ème arrondissement</option>
            <option value="paris-3">Tribunal judiciaire de Paris - 14ème arrondissement</option>
            <option value="paris-3">Tribunal judiciaire de Paris - 15ème arrondissement</option>
            <option value="paris-3">Tribunal judiciaire de Paris - 16ème arrondissement</option>
            <option value="paris-3">Tribunal judiciaire de Paris - 17ème arrondissement</option>
            <option value="paris-3">Tribunal judiciaire de Paris - 18ème arrondissement</option>
            <option value="paris-3">Tribunal judiciaire de Paris - 19ème arrondissement</option>
            <option value="paris-3">Tribunal judiciaire de Paris - 20ème arrondissement</option>
            
          </select>
          <br>
          <label for="type">Type:</label>
          <select id="type" name="ty" >
            <option value="">-- Sélectionner un type --</option>
            <option value="appartement">Appartement</option>
            <option value="commerce">Commerce</option>
            <option value="maison">Maison</option>
            <option value="villa">Villa</option>
          </select>
          <br>
          <label for="rayon">Rayon:</label>
          <select id="rayon" name="rayon">
            <option value="">-- Sélectionner un rayon --</option>
            <option value="5">5 km</option>
            <option value="10">10 km</option>
            <option value="15">15 km</option>
            <option value="15">20 km</option>
            <option value="15">25 km</option>
            <option value="15">30 km</option>
            <option value="15">35 km</option>
            <option value="15">40 km</option>
            
          </select>
          <br>
          <label for="miseaprix">Mise à prix:</label>
          <input type="text" id="miseaprix" name="map" placeholder="Mise à prix">
          <br>
          <button type="submit" name="btsubmit">Recherche</button>
        </form>
      </div>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "immobilier";
$port="3307";



// Connexion à la base de données

$conn = new mysqli($servername, $username, $password, $dbname, $port);


      if (isset($_POST['btsubmit'])){
        $mp=$_POST['map'];
        $arrondissement=$_POST['arrondissement'];
        $tj=$_POST['tj'];
        $ty=$_POST['ty'];
        $rayon=$_POST['rayon'];
        $reqSelect="SELECT * FROM maison WHERE map LIKE '%$mp%' OR arrondissement LIKE '%$arrondissement%' OR tj LIKE '%$tj%' OR ty LIKE '%$ty%' OR rayon LIKE '%$rayon%'" ;
        $resultat=mysqli_query($link,$reqSelect);
    }
    else{
      $reqSelect="select * from maison";
    }
    $resultat=mysqli_query($link,$reqSelect);
    while($ligne=mysqli_fetch_assoc ($resultat))
    {
  
    ?>

<div id="maison">
   <a href="inf.html"> <img src="<?php echo $ligne['photo']?>" > </a><br>
    <?php echo $ligne['ty'] ; ?><br>
    <?php echo $ligne['arrondissement'] ; ?><br>
    <?php echo $ligne['tj'] ; ?><br>
    <?php echo $ligne['map'] ; ?>
</div>
<?php  } ?>
</body>
</html>

      