<?php  session_start();

function placement($position,$nom){
  
    $_SESSION[$position]=[
      
      'nom'=>$nom,
      'MJ'=>0,
      'MG'=>0,
      'MN'=>0,
      'MP'=>0,
      'BP'=>0,
      'BC'=>0,         
      'DIF'=>0,
      'POINT'=>0    

  
       ];
       
      }
  

     

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css"/>
    <!-- <link rel="stylesheet" href="cal.css"/> -->
    <link rel="import" href="component.html">
    <title>Tirage</title>
</head>
<body>
    <!-- menu -->
    <header id="pri">
            
            <h1 class="logo">  Tournoi_2.0 </h1>
        
         <label class="hamburger" for="toggler">&#9776;</label>
         <input id="toggler" type="checkbox">
      
        <nav class="navbar">
            <ul>
                <li><a href="index.html" >Home</a></li>
                <li><a href="tirage.php">Tirage</a></li>
                <li><a href="Confrontation.php">Confrontation</a></li>
                <li><a href="Classement.php">Classement</a></li>
            </ul>
        </nav>
      </header>
<!-- classement des equipes dans le tableau en php -->
<?php
      
      $equipe=[
          "Bresil",
          "France",
          "Espagne",
          "Portugal",

                                              
         "Argentine",
          "Italie",
          "Allemagne",
          "Haiti" ];
    

?>
<!-- random pour choisir les equipes aleatoirement -->
<?php 
          $indiceA=rand(0,1);
          $indiceB=rand(0,1);

          $indiceC=rand(2,3);
          $indiceD=rand(2,3);

          $indiceE=rand(4,5);
          $indiceF=rand(4,5);

          $indiceG=rand(6,7);
          $indiceH=rand(6,7);



            while($indiceA==$indiceB){
              $indiceB=rand(0,1);
            }
            while($indiceC==$indiceD){
            $indiceD=rand(2,3);
            }
            while($indiceE==$indiceF){
                $indiceF=rand(4,5);
            }
            while($indiceG==$indiceH){
                $indiceH=rand(6,7);
            }

  ?>

<br/>
<br/>
<br/>
<br/>
<!-- tableau du tirage  -->
<div class="milieu">
<div class="tab">
         <form  action=""  method="POST"> 
            <table class="tableau-style">
                <thead>
                    <tr>
                        <th>Lot #1 <br/> (1e tete de serie)</th>
                        <th>Lot #2 <br/> (2e tete de serie)</th>
                        <th>Lot #3 <br/> (3e tete de serie)</th>
                        <th>Lot #4 <br/> (4e tete de serie)</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><?php echo"$equipe[0]" ?> <img class="dra"src="./image/brasil.png"width="30px" alt=""></td>
                        <td><?php echo"$equipe[1]"?>  <img class="dra"src="./image/france.png"width="30px" alt=""></td>
                        <td><?php echo"$equipe[2]"?>  <img class="dra"src="./image/espagne.png"width="30px"alt=""></td>
                        <td><?php echo"$equipe[3]"?>  <img class="dra"src="./image/portugal.png"width="30px" alt=""></td>
                        
                    </tr>
                    <tr>
                       <td><?php echo"$equipe[4]"?><img class="dra"src="./image/argentine.png"width="30px" alt=""></td>
                        <td><?php echo"$equipe[5]"?><img class="dra"src="./image/italie.png"width="30px" alt=""></td>
                        <td><?php echo"$equipe[6]"?><img class="dra"src="./image/allemagne.png"width="30px" alt=""></td>
                        <td><?php echo"$equipe[7]"?><img class="dra"src="./image/haiti.png"width="30px" alt=""></td>
                    </tr>

                </tbody>
                    
            </table>
            <!-- bouton du tirage -->
            <input  class="envoie" type="submit"  value="Tirage">

            </form>
        </div>

        <!-- classement des equipes apres le tirage -->
         <div class="grp"> 
                                <!-- <h2>Les Groupes</h2> -->
                                <form  action=""  method="POST" > 
                                <table class="tableau-style">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>Groupe A</th>
                                            <th>Groupe B</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>                      
                                            <td>1e tete de serie (TDS)</td>
                                            <td><?php   echo"$equipe[$indiceA]"?></td>
                                            <td><?php  echo"$equipe[$indiceE]"?></td>
                                            </tr>
                                        <tr>
                                            <td>2e tete de serie (TDS)</td>
                                            <td><?php   echo"$equipe[$indiceD]"?></td>
                                            <td><?php  echo"$equipe[$indiceF]"?></td>
                                        </tr>
                                        <tr>
                                            <td>3e tete de serie (TDS)</td>
                                            <td><?php   echo"$equipe[$indiceB]"?></td>
                                            <td><?php  echo"$equipe[$indiceH]"?></td>
                                        </tr>
                    
                                        <tr>
                                            <td>4e tete de serie (TDS)</td>
                                            <td><?php  echo"$equipe[$indiceG]"?></td> 
                                            <td><?php   echo"$equipe[$indiceC]"?></td>
                                        </tr>
                    
                                        </tbody>
                                </table>
                                <!-- bouton de validation  -->
                                </form>
                               
                            </div>
                            <div class="envoie1"  >
                              <a  href="Confrontation.php">Valider</a>
                            </div>
            </div>


        <?php 
        if(isset($_POST['tirage'])) {
            $_SESSION['Equipe']=$equipe;
            $_SESSION['indiceA']=$indiceA;
            $_SESSION['indiceB']=$indiceB;
            $_SESSION['indiceC']=$indiceC;
            $_SESSION['indiceD']=$indiceD;
            $_SESSION['indiceE']=$indiceE;
            $_SESSION['indiceF']=$indiceF;
            $_SESSION['indiceG']=$indiceG;
            $_SESSION['indiceH']=$indiceH;

        ?>




       <?php  }  

            placement('indiceA',$equipe[$indiceA]);
            placement('indiceB',$equipe[$indiceB]);
            placement('indiceC',$equipe[$indiceC]);
            placement('indiceD',$equipe[$indiceD]);
            placement('indiceE',$equipe[$indiceE]);
            placement('indiceF',$equipe[$indiceF]);
            placement('indiceG',$equipe[$indiceG]);
            placement('indiceH',$equipe[$indiceH]);

    ?>



        <?php

        $_SESSION['statutmatch']=false; 
        $_SESSION['statutmatch1']=false; 
        $_SESSION['statutmatch2']=false;
        $_SESSION['statutmatch3']=false;
        $_SESSION['statutmatch4']=false;
        $_SESSION['statutmatch5']=false;

        $_SESSION['statutmatch6']=false;
        $_SESSION['statutmatch7']=false;
        $_SESSION['statutmatch8']=false;
        $_SESSION['statutmatch9']=false;
        $_SESSION['statutmatch10']=false;
        $_SESSION['statutmatch11']=false;
        $_SESSION['statutmatch12']=false;
        $_SESSION['statutmatch13']=false;
        $_SESSION['statutmatch14']=false;
        $_SESSION['statutmatch15']=false;

        $_SESSION['GRQlf1']="";
        $_SESSION['GRQlf2']="";

        $_SESSION['ptit1']="";
        $_SESSION['ptit2']="";

   
        
        ?>


      
</body>


</html>



