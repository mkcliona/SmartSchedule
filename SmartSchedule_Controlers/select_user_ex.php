<?php
						$bd=mysqli_connect('localhost','root','','pfe');
						
						//$requette='SELECT * from usersd';
						$email=$_POST["email"];
						$mdp=$_POST["mdp"];
						$requette="SELECT * from usersd where email='$email' and mdp='$mdp'";

						$resultat=mysqli_query($bd,$requette);
						$nbcol=mysqli_num_fields($resultat);
                        $tab=array(); $tabb=array();$i=0;
					 while($ligne=mysqli_fetch_array($resultat)){
					 	$tab["email"]=$ligne[0];
					 	$tab["mdp"]=$ligne[1];
					 	$tab["nom"]=$ligne[2];
					 	$tab["dept"]=$ligne[3];
					 	$tab["valid"]=$ligne[4];
					 	
					 	$tabb[$i]=$tab;
					 	$i++;
					 }
                        echo json_encode($tabb);

	
?>