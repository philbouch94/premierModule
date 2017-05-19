<?php
function Conec()
{

   if (!($link=mysql_connect("localhost","root","")))
   {
      echo "Error conec serveur.";
      exit();
   }
   
   return $link;
}
?>
