<html>
 <body>
<table border= "1">
   <thead>
     <tr>
       <th>Id</th>
       <th>Nombre</th>
       <th>Ap</th>
       <th>Am</th>
</tr>
</thead>
</tbody>

  <?php
    $personas= array(

    "0"=>array(
    "id"=> "0",
    "nombre"=> "Roberto",
    "ap"=> "Ascencio",
    "am"=> "Torres"
    ),

    "1"=>array(
    "id"=> "1",
    "nombre"=> "Alejandra",
    "ap"=> "Bautista",
    "am"=> "Arteaga"
    ),

 "2"=>array(
    "id"=> "2",
    "nombre"=> "Carlos",
    "ap"=> "Perez",
    "am"=> "Perez"
    ),

 "3"=>array(
    "id"=> "3",
    "nombre"=> "Astrid",
    "ap"=> "Ramirrez",
    "am"=> "Lopez"
    ),

 "4"=>array(
    "id"=> "4",
    "nombre"=> "Karen",
    "ap"=> "Vazquez",
    "am"=> "Ayala"
    ),

    );
?>

<?php
    Foreach ($personas as $k=>$personas){

?>
<tr>
<td><?php echo $personas["id"];?></td>
<td><?php echo $personas["nombre"];?></td>
<td><?php echo $personas["ap"];?></td>
<td><?php echo $personas["am"];?></td>
     
    
</tr>

  
<?php } ?>

     </tbody>
   </table>
</html>
