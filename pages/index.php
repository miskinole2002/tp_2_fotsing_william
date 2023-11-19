
<?php
session_start();
require_once("../functions/userCrud.php");
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

  /* for($i = 1; $i <=$y;$i++){
            if($_POST["street$i"]){
                $street= streetIsValid($_POST["street$i"]);
                var_dump($street);
            } 
            if($_POST["type$i"]){
                $type=typeIsValid($_POST["type$i"]);
                var_dump($type);

            }
            if($_POST["city$i"])
            {
                $city=cityIsValid($_POST["city$i"]);
                var_dump($city);
            }
            if($_POST["street_nb$i"])  
            {
                $street_nb=streetIsValid($_POST["street_nb$i"]);
                var_dump($street_nb);
            }
            if($_POST["zipcode$i"])
            {
                $zipcode=zipcodeIsValid($_POST["zipcode$i"]);
                var_dump($zipcode);
            }

    }*/

    if(isset($_POST))
    { 
        for($i = 1; $i <= $y; $i++){
            if (empty($_POST["street$i"]and $_POST["street$i"] and $_POST["type$i"] and $_POST["city$i"] and $_POST["zipcode$i"]))
            {?>
               <h1> veuillez remplir tous  les champs svp </h1><?php
            } 
            elseif(strlen($_POST["street_nb$i"])<1 or strlen($_POST["street_nb$i"])>5)
            {?>
                <h1>  le street <?php echo $i ?>  doit avoir min 1 ou 5 max   </h1>                                        
                                                                <?php
            }   
            elseif(strlen($_POST["street$i"])<3 or strlen($_POST["street$i"])>50)
            {?>
                
               <h1> le street <?php echo $i ?>  doit avoir min 3 ou 50 max </h1><?php
                
            } 
            elseif(strlen($_POST["type$i"])<3 or strlen($_POST["type$i"])>20)
            {?>
            
              <h1>le type <?php echo $i ?>   doit avoir min 3 ou 50 max </h1><?php
                
            } 
            elseif(strlen($_POST["city$i"])<3 or strlen($_POST["city$i"])>50)
            {?>
                
               <h1>le city <?php echo $i ?>  doit avoir min 3 ou 50 max </h1><?php
                
            } 
            elseif(strlen($_POST["zipcode$i"])<6 or strlen($_POST["zipcode$i"])>6)
            {?>
                
               <h1>le zipcode <?php echo $i ?> doit avoir min 6 ou 6 max</h1><?php
                
            }

            else
            { 
                $data[$i]=[
                    "street"=> $_POST["street$i"],
                    "street_nb"=>$_POST["street_nb$i"],
                    "type"=> $_POST["type$i"],
                    "city"=> $_POST["city$i"],
                    "zipcode"=> $_POST["zipcode$i"],
                    
                ];
                $addres=createAddress($data[$i]);
                var_dump($addres);
                var_dump([$data[$i]]);
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