<?php
						$bd=mysqli_connect('localhost','root','','pfe');
						
						$email=$_POST['email'];
						$mdp="v";

						
						$requette='DELETE from usersd where email="'.$email.'"';
						$resultat=mysqli_query($bd,$requette);
						$nbcol=mysqli_num_fields($resultat);
                        $i="no";
					 if($ligne=mysqli_fetch_array($resultat)){
					 	$i="yes";
					 }
                        echo $i;

	
?>