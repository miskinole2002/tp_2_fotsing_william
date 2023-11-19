<link rel="stylesheet" href="../styles/william.css" />

<?php 
session_start();
//require_once("../pages/accueil.php")
?>
<h1>enregistrement</h1>
<?php  
    if (isset($_POST)) { // permet de savoir s il y a du contenu dans notre Post
       // var_dump($_POST["add"]);
        if ($_POST["add"]) {
           // $x=$_POST["add"];
           $_SESSION["add"]=$_POST["add"];
          
    //echo $x;
?>
        <form action="../pages/index.php" method="POST">
        <?php  
                   
            for ($i=1 ; $i<=$_SESSION["add"]; $i++) {
            
            ?> 
            <h2><center><span class="important">adresse </span><?php echo $i ?></center></h2>
        <DIV>
           <center> <label for="street"><span class="important">street</span> <?php echo $i ?></label>    
            <input type="text" id="street" name="street<?php echo $i ?>" value=""></center>
        </DIV>
        <DIV>
            <center>
            <label for="street_nb"><span class="important">street_nb</span> <?php echo $i ?></label>
            <input type="number" id="street_nb" name="street_nb<?php echo $i ?>" value=""></center>
        </DIV>
        <DIV><center>
            <label for="type"><span class="important">type</span> <?php echo $i ?></label>
            <input type="text" id="type" name="type<?php echo $i ?>"value="" ></center>
        </DIV>
        <DIV><center>
            <label for="city"><span class="important">city</span> <?php echo $i ?></label>
            <input type="text" id="city" name="city<?php echo $i ?>" value="" ></center>
        </DIV>
        <DIV><center>
            <label for="zipcode"><span class="important">zipcode</span> <?php echo $i ?></label>
            <input type="text" id="zipcode" name="zipcode<?php echo $i ?>" value="">
        </DIV></center>
        <?php } ?>
                <div><center>
        <button type="submit"><span class="important">confirmer</span> </button></center>
            </div>
            </form><?php } 
         else 
        {?>
       <h1>veuillez entrez un nombre d adresse svp!!!";</h1> 
        <?php }
  }
  echo"<br>";
  ?>
  
<button><a href="../pages/accueil.php"><span class="important"></span> accueil</a></button>