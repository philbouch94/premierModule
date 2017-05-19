<?php
function Conec()
{

   if (!($link=mysql_connect("localhost","root","")))
   {
      echo "Error conec serveur.";
      exit();
   }

   if (!mysql_select_db("drupal_8",$link))
   {
      echo "Error base de donnes.";
	  echo "Error base de sdadsdasdasd.";
	  echo "Error base de donnes.";echo "Error base de donnes.";
      exit();
   }
   
   return $link;
}
?>
