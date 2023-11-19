<link rel="stylesheet" href="../styles/william.css" />
<?php
session_start();

require_once("../functions/Crud.php");
require_once("../functions/validation.php");
$server='localhost';
$userName="root";
$userPassword= "";
$db="ecom1_tp2";
$conn=mysqli_connect($server,$userName,$userPassword,$db);
if($conn){?> 
    <h1> <center>connetion a la base de donnee <?php echo"$db" ?> reussi</center> </h1> 
    <?php
    global $conn;?>

   <h2> <center> creation des adresses dans la base </center></h2> <?php 
   
   
   
   $y=$_SESSION["add"];

// validation

    if(isset($_POST))
    { 
        for($i = 1; $i <= $y; $i++){//
         
            if (empty($_POST["street$i"]and $_POST["street_nb$i"] and $_POST["type$i"] and $_POST["city$i"] and $_POST["zipcode$i"]))
            {?>
               <h4> veuillez remplir tous  les champs svp </h4><?php
            } 
            elseif(strlen($_POST["street$i"])<3 or strlen($_POST["street$i"])>50)
            {?>
                                
                <h4> le street <?php echo $i ?>  doit avoir min 3 ou 50 max </h4><?php
                                 
            } 

            elseif(strlen($_POST["street_nb$i"])<1 or strlen($_POST["street_nb$i"])>5)
            {?>
                <h4>  le street <?php echo $i ?>  doit avoir min 1 ou 5 max   </h4>                                        
                                                                <?php
            }   
            
            elseif(strlen($_POST["type$i"])<3 or strlen($_POST["type$i"])>20)
            {?>
            
              <h4>le type <?php echo $i ?>   doit avoir min 3 ou 50 max </h4><?php
                
            } 
            elseif(strlen($_POST["city$i"])<3 or strlen($_POST["city$i"])>50)
            {?>
                
               <h4>le city <?php echo $i ?>  doit avoir min 3 ou 50 max </h4><?php
                
            } 
            elseif(strlen($_POST["zipcode$i"])<6 or strlen($_POST["zipcode$i"])>6)
            {?>
                
               <h4>le zipcode <?php echo $i ?> doit avoir min 6 ou 6 max</h4><?php
                
            }
// insertion dans la db
            else
            { 
                ?>
                              <p><center><b>addresse<?php echo$i ?></b></center></p>
                <p><center> le street<?php echo $i?> est :<?php echo $_POST["street$i"]?></center></p>
                <p><center>le street_nb<?php echo $i?> est :<?php echo $_POST["street_nb$i"]?></center></p>
                <p><center>le type<?php echo $i?>  est :<?php echo $_POST["type$i"]?></center></p>
                <p><center>city<?php echo $i?>est :<?php echo $_POST["city$i"]?></center></p>
                <p><center>zipcode<?php echo $i?> est :<?php echo $_POST["zipcode$i"]?></center></p>
            
                <?php


                $data[$i]=[
                    "street"=> $_POST["street$i"],
                    "street_nb"=>$_POST["street_nb$i"],
                    "type"=> $_POST["type$i"],
                    "city"=> $_POST["city$i"],
                    "zipcode"=> $_POST["zipcode$i"],
                    
                ];
                $addres=createAddress($data[$i]);
               // var_dump($addres);
                //var_dump([$data[$i]]);
            }
        } 
            ;
    }

   
}
else{
    echo "error : impossible de se connecte a la base de donnee $db";
}

//var_dump($_POST);

?>
<button><a href="../pages/accueil.php"><span class="important"></span> accueil</a></button>