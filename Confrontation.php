<?php
    include './traitement.php';
    session_start();
    if(!empty($_SESSION['Equipe'])){
        $equipe = $_SESSION['Equipe'];
        $indiceA = $_SESSION['indiceA'];
        $indiceB = $_SESSION['indiceB'];
        $indiceC = $_SESSION['indiceC'];
        $indiceD = $_SESSION['indiceD'];
        $indiceE = $_SESSION['indiceE'];
        $indiceF = $_SESSION['indiceF'];
        $indiceG = $_SESSION['indiceG'];
        $indiceH = $_SESSION['indiceH'];
    }

    if(isset($_POST['jouer0'])){
        $_SESSION['score1']=$_POST['indiceA1'];
        $_SESSION['score01']=$_POST['indiceD1'];
        $_SESSION['statutmatch']=true; 
        traitement('indiceA','indiceD',$_SESSION['score1'], $_SESSION['score01']);
    }

         if(isset($_POST['jouer1'])){
        $_SESSION['score2']=$_POST['indiceB1'];
        $_SESSION['score02']=$_POST['indiceG1'];
        $_SESSION['statutmatch1']=true;
        traitement('indiceB','indiceG',$_SESSION['score2'], $_SESSION['score02']);

        }  

            if(isset($_POST['jouer2'])){
                $_SESSION['score31']=$_POST['indiceA21'];
                $_SESSION['score031']=$_POST['indiceB21'];
                $_SESSION['statutmatch2']=true;
                traitement('indiceA','indiceG',$_SESSION['score31'], $_SESSION['score031']);

            }


            if(isset($_POST['jouer3'])){
                $_SESSION['score4']=$_POST['indiceD2'];
                $_SESSION['score04']=$_POST['indiceG2']; 
                $_SESSION['statutmatch3']=true;
                traitement('indiceD','indiceG',$_SESSION['score4'], $_SESSION['score04']);
            
             }

             if(isset($_POST['jouer4'])){
                $_SESSION['score5']=$_POST['indiceA3'];
                $_SESSION['score05']= $_POST['indiceG3'];
                $_SESSION['statutmatch4']=true;
                traitement('indiceA','indiceB',$_SESSION['score5'], $_SESSION['score05']);

            } 

            if(isset($_POST['jouer5'])){
                $_SESSION['score6']=$_POST['indiceD3'];
                $_SESSION['score06']=$_POST['indiceB3'];
                $_SESSION['statutmatch5']=true;
                traitement('indiceD','indiceB',$_SESSION['score6'], $_SESSION['score06']);

            } 

            if(isset($_POST['jouer6'])){
                $_SESSION['score7'] = $_POST['indiceE1'];
                $_SESSION['score07'] =$_POST['indiceF1'];
                $_SESSION['statutmatch6']=true;
                traitement('indiceE','indiceF',$_SESSION['score7'], $_SESSION['score07']);
             }

             if(isset($_POST['jouer7'])){
                $_SESSION['score8'] = $_POST['indiceH2'];
                $_SESSION['score08'] =$_POST['indiceC2'];
                $_SESSION['statutmatch7']=true;
                traitement('indiceH','indiceC',$_SESSION['score8'], $_SESSION['score08']);
            }

            if(isset($_POST['jouer8'])){
                $_SESSION['score9'] = $_POST['indiceE2'];
                $_SESSION['score09'] =$_POST['indiceH3'];
                $_SESSION['statutmatch8']=true; 
                traitement('indiceE','indiceH',$_SESSION['score9'], $_SESSION['score09']);
            }

        if(isset($_POST['jouer9'])){
            $_SESSION['score10'] = $_POST['indiceF2'];
            $_SESSION['score010'] =$_POST['indiceC3'];
            $_SESSION['statutmatch9']=true;
            traitement('indiceF','indiceC',$_SESSION['score10'], $_SESSION['score010']);
        }
  
     if(isset($_POST['jouer10'])){
            $_SESSION['score11'] = $_POST['indiceE3'];
            $_SESSION['score011'] =$_POST['indiceC4'];
            $_SESSION['statutmatch10']=true;
            traitement('indiceE','indiceC',$_SESSION['score11'], $_SESSION['score011']);
         }

        if(isset($_POST['jouer11'])){
            $_SESSION['score12'] = $_POST['indiceF4'];
            $_SESSION['score012'] =$_POST['indiceH5'];
            $_SESSION['statutmatch11']=true;
            traitement('indiceF','indiceH',$_SESSION['score12'], $_SESSION['score012']);
        }


    function option()
    {
        echo '
             <option value="0">0</option>
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option> 
             <option value="4">4</option>
             <option value="5">5</option>
             <option value="6">6</option>
             <option value="7">7</option>
             <option value="8">8</option>
        
        ';
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Classement</title>
</head>
<body>

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

      <div class="milieu1">
     
    <div class="grp">
       <form action="" method="POST">
                                <table class="tableau-style">
                                    <thead>
                                        <tr>
                                            <th>Groupe A</th>
                                            <th>Affiche</th>
                                            <th>Score</th>
                                            <th>Jouer</th>

                                        </tr>
                                    </thead>

                                    <tbody> 
                                        <tr>
                                        <form action="" method="POST">
                                            <td>Match 1</td>
                                            <td><?php echo $_SESSION['indiceA']['nom'] ?> VS <?php echo $_SESSION['indiceD']['nom']?> </td>
                                            <td>
                                            <?php if($_SESSION['statutmatch']==false){ ?> 
                                                 <select name="indiceA1" id="" >
                                                  <?php option(); ?>
                                                 </select>
                                           <?php }
                                           else {
                                              echo   $_SESSION['score1']." VS ".$_SESSION['score01'];

                                           }
                                           ?>
                                           
                                           <?php if($_SESSION['statutmatch']==false){ ?>
                                            Vs 
                                            <select name="indiceD1" id="">
                                            <?php option(); ?>
                                           </select>
                                           <?php }?> 
                                        </td>
                                            <td>
                                                <input class="btr" type="submit" name="jouer0" value="play"   <?php if($_SESSION['statutmatch']) { ?> 
                                                    disabled <?php } ?>>
                                        </td>
                                          
                                        </form>
                                        </tr>
                                        

                                        <tr>
                                            <form action="" method="POST">
                                            <td>Match 2</td>
                                                <td><?php  echo $_SESSION['indiceB']['nom']?> VS <?php   echo $_SESSION['indiceG']['nom']?></td>
                                            <td>
                                                <?php if( $_SESSION['statutmatch1']==false) {   ?>
                                                <select name="indiceB1" id="">
                                                    <?php option(); ?>
                                                </select>
                                                <?php }
                                                else{
                                                echo  $_SESSION['score2']."  VS  ". $_SESSION['score02'];
                                                }
                                                ?>

                                                <?php if( $_SESSION['statutmatch1']==false) {   ?>
                                                    Vs 
                                                <select name="indiceG1" id="">
                                                    <?php option(); ?>
                                                </select>

                                                <?php } ?>
                                               
                                            </td>
                                            <td><input class="btr" type="submit" name="jouer1" value="play"  <?php if($_SESSION['statutmatch1']) { ?> 
                                                    disabled <?php } ?> ></td>
                                            </form>
                                        </tr>

                                        <tr>
                                            <form action="" method="POST">
                                            <td>Match 3</td>
                                            <td> <?php echo $_SESSION['indiceA']['nom']?> VS <?php  echo $_SESSION['indiceG']['nom']?> </td>
                                            <td>
                                                <?php if( $_SESSION['statutmatch2']==false) { ?>
                                                <select name="indiceA21" id="">
                                                <?php option(); ?>
                                               </select>
                                             <?php }else {
                                                 echo   $_SESSION['score31']." VS ".$_SESSION['score031'];

                                             } ?>
                                          
                                           <?php if( $_SESSION['statutmatch2']==false) { ?>
                                               Vs 
                                               <select name="indiceB21" id="">
                                                <?php option(); ?>
                                               </select>
                                               <?php } ?>
                                           
                                            </td>
                                            <td><input class="btr" type="submit" name="jouer2" value="play"  <?php if($_SESSION['statutmatch2']) { ?> 
                                                    disabled <?php } ?>  ></td>
                                            </form>
                                        </tr>
                                       

                                        <tr>
                                            <form action="" method="POST">
                                            <td>Match 4</td>
                                            <td><?php echo $_SESSION['indiceD']['nom']?> VS <?php   echo $_SESSION['indiceG']['nom']?></td>
                                            <td>
                                                <?php  if( $_SESSION['statutmatch3']==false) { ?>
                                            <select name="indiceD2" id="">
                                            <?php option(); ?>
                                            </select> 
                                            <?php }
                                            else{
                                                echo $_SESSION['score4']." VS ".$_SESSION['score04'];
                                            } ?>
                                            <?php  if( $_SESSION['statutmatch3']==false) { ?>
                                            Vs 
                                            <select name="indiceG2" id="">
                                            <?php option(); ?>
                                            </select></td>
                                            <?php } ?>
                                            <td><input class="btr" type="submit" name="jouer3" value="play" <?php if($_SESSION['statutmatch3']) { ?>
                                                disabled <?php } ?> ></td>
                                            </form>
                                        </tr>
                                          
                                        <tr>
                                            <form action=" " method="POST">
                                            <td>Match 5</td>
                                           
                                            <td><?php echo $_SESSION['indiceA']['nom']  ?> VS <?php  echo $_SESSION['indiceB']['nom']  ?> </td>
                                            <td>
                                            <?php  if($_SESSION['statutmatch4']==false) { ?>
                                            <select name="indiceA3" id="">
                                            <?php option(); ?>
                                            </select>
                                            <?php }
                                            else {
                                                echo $_SESSION['score5']." VS ".$_SESSION['score05']; 
                                            }
                                            
                                            ?>
                                            <?php  if($_SESSION['statutmatch4']==false) { ?>
                                            Vs 
                                            <select name="indiceG3" id="">
                                            <?php option(); ?>
                                            </select>
                                            <?php } ?>
                                           </td>
                                            <td><input class="btr" type="submit" name="jouer4" value="play" <?php if($_SESSION['statutmatch4']) { ?>
                                                disabled <?php } ?> ></td>
                                           </form>
                                        </tr> 

                                  
                                        <tr>
                                            <form action="" method="POST">
                                            <td>Match 6</td>
                                            <td> <?php echo $_SESSION['indiceD']['nom']?> VS <?php echo $_SESSION['indiceB']['nom']?> </td>
                                            <td>
                                            <?php if(  $_SESSION['statutmatch5']==false) {?>
                                            <select name="indiceD3" id="">
                                            <?php option(); ?>
                                            </select>
                                            <?php } 
                                            else {
                                                 echo  $_SESSION['score6']." VS ".$_SESSION['score06'];
                                               } ?>
                                           <?php if(  $_SESSION['statutmatch5']==false) {?>
                                             Vs 
                                            <select name="indiceB3" id="">
                                            <?php option(); ?>
                                           </select></td>
                                           <?php } ?>
                                            <td><input class="btr" type="submit" name="jouer5" value="play" <?php if($_SESSION['statutmatch5']) { ?>
                                                disabled <?php } ?> ></td>
                                            </form>
                                        </tr>

                                      


                                    </tbody>
                                </table>
               
                </form>

      <div class="groupeB">
             <table class="tableau-style">
                <thead>
                    <tr>
                        <th>Groupe B</th>
                        <th>Affiche</th>
                        <th>Score</th>
                        <th>Jouer</th>
                    </tr>
                </thead>

                <tbody>
                    <tr> <form action="" method="POST">
                        <td>Match 7</td>
                        <td><?php echo $_SESSION['indiceE']['nom']  ?> VS <?php  echo $_SESSION['indiceF']['nom']?> </td>
                        <td>
                           <?php if( $_SESSION['statutmatch6']==false)  { ?>   
                               <select name="indiceE1" id="">
                                  <?php option(); ?>
                               </select>

                               <?php }
                               else {
                                   echo $_SESSION['score7']." VS ".$_SESSION['score07'];
                               } ?>

                               <?php if( $_SESSION['statutmatch6']==false)  { ?>  
                                 Vs  
                                <select name="indiceF1" id="">
                                   <?php option(); ?>
                                 </select>
                                 <?php } ?>
                                </td>
                        <td><input class="btr" type="submit" name="jouer6" value="play" <?php if($_SESSION['statutmatch6']) { ?>
                                disabled <?php } ?> ></td>
                        </form> 
                    </tr>


                    <tr>
                        <form action="" method="POST">
                        <td>Match 8</td>
                        <td><?php   echo $_SESSION['indiceH']['nom']?> VS <?php  echo $_SESSION['indiceC']['nom'] ?> </td>
                        <td> 
                            <?php  if( $_SESSION['statutmatch7']==false)  { ?>
                               <select name="indiceH2" id="">
                                 <?php option(); ?>
                               </select>
                               <?php } else {
                                   echo $_SESSION['score8']." VS ".$_SESSION['score08'];
                               } ?>
                                <?php  if( $_SESSION['statutmatch7']==false)  { ?>
                                Vs  
                                <select name="indiceC2" id="">
                                   <?php option(); ?>
                                </select>
                            <?php } ?></td>
                        <td><input class="btr" type="submit" name="jouer7" value="play" <?php if($_SESSION['statutmatch7']) { ?>
                                disabled <?php } ?> ></td>
                        </form>
                    </tr>

                    

                    <tr>
                        <form action="" method="POST">  
                        <td>Match 9</td>
                        <td><?php  echo $_SESSION['indiceE']['nom']?> VS <?php  echo $_SESSION['indiceH']['nom']?> </td>
                        <td>  
                            <?php if( $_SESSION['statutmatch8']==false)  { ?>  
                               <select name="indiceE2" id="">
                                <?php option(); ?>
                               </select>
                               <?php }
                               else {
                                   echo $_SESSION['score9']." VS ".$_SESSION['score09'];
                               } ?> 
                                 <?php if( $_SESSION['statutmatch8']==false)  { ?> 
                                 Vs 
                                <select name="indiceH3" id="">
                                <?php option(); ?>
                                 </select>
                                <?php }  ?></td>
                        <td><input class="btr" type="submit" name="jouer8" value="play"  <?php if($_SESSION['statutmatch8']) { ?>
                                disabled <?php } ?> ></td>
                        </form>

                    </tr>
                   

                    <tr>
                        <form action="" method="POST">
                        <td>Match 10</td>
                        <td><?php  echo $_SESSION['indiceF']['nom']?> VS <?php  echo $_SESSION['indiceC']['nom']?></td>
                        <td>
                            <?php if($_SESSION['statutmatch9']==false) { ?>
                              <select name="indiceF2" id="">
                                <?php option(); ?>
                              </select>
                              <?php  }
                              else{
                                  echo  $_SESSION['score10']." VS ".$_SESSION['score010'];
                              } ?>
                              
                              <?php if($_SESSION['statutmatch9']==false) { ?>
                                 Vs  
                                <select name="indiceC3" id="">
                                <?php option(); ?>
                                 </select>
                                 <?php } ?>
                                </td>
                        <td><input class="btr" type="submit" name="jouer9" value="play"  <?php if($_SESSION['statutmatch9']) { ?>
                                disabled <?php } ?>></td>
                        </form>
                    </tr>

                  

                    <tr>
                        <form action="" method="POST">
                        <td>Match 11</td>
                        <td><?php echo $_SESSION['indiceE']['nom']  ?> VS <?php  echo $_SESSION['indiceC']['nom'] ?> </td>
                        <td> 
                            <?php if( $_SESSION['statutmatch10']==false) { ?>
                               <select name="indiceE3" id="">
                                <?php option(); ?>
                              </select>
                              <?php   } else {
                                  echo $_SESSION['score11']." VS ".$_SESSION['score011'];
                              } ?> 
                                <?php if( $_SESSION['statutmatch10']==false) { ?>
                                 Vs  
                                <select name="indiceC4" id="">
                                 <?php option(); ?>
                                 </select>
                                <?php  } ?>
                               </td>
                        <td><input class="btr" type="submit" name="jouer10" value="play"  <?php if($_SESSION['statutmatch10']) { ?>
                                disabled <?php } ?> ></td>
                        </form>
                    </tr> 
                    
                    <tr>
                        <form action="" method="POST">
                        <td>Match 12</td>
                        <td> <?php  echo $_SESSION['indiceF']['nom']?> VS <?php  echo $_SESSION['indiceH']['nom']?> </td>
                        <td>
                            <?php  if($_SESSION['statutmatch11']==false) { ?>
                               <select name="indiceF4" id="">
                                 <?php option(); ?>
                              </select>
                              <?php  }else {
                                  echo   $_SESSION['score12']." VS ".$_SESSION['score012'];
                              } ?>

                           <?php  if($_SESSION['statutmatch11']==false) { ?>
                              Vs  
                                <select name="indiceH5" id="">
                                   <?php option(); ?>
                                 </select>
                                <?php  } ?>
                              </td>
                        <td><input class="btr" type="submit" name="jouer11" value="play"  <?php if($_SESSION['statutmatch11']) { ?>
                                disabled <?php } ?>></td>
                        </form>
                    </tr>

                </tbody>
               </table>
            </form>
         </div> 
    </div>

    <div  class="envoie2">
      <a  class="champs" href="Classement.php">Classement</a>
    </div>

    </div>



</body>
</html>