<?php
include './Datos.php';
?>

<!DOCTYPE html>
<html lang="en">

 <title> Tabla Periodica </title> 

 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=3.0">   
    <link rel="stylesheet" href='lindo.css'>
   
</head>

<body>

<center><h1>Tabla Periodica</h1></center>
<div class="pritabla">
<table> 
<?php 

   for($x=0;$x<count($elementos);$x++){?>

   <th class="Otros_no_Metales"><?php echo $elementos[$x][0]?></th>
   <td colspan="16"></td>
   <th class="GasesNobles"><?php echo $elementos[$x][1]?></th>
   </tr>

 <tr>
   <th class="Alcalinos"><?php echo $elementos[$x][2]?></th>
   <th class="alcalinoterreos"><?php echo $elementos[$x][3]?></th>
   <td colspan="10"></td>
   <th class="Metaloides"><?php echo $elementos[$x][4]?></th>
   <th class="Otros_no_Metales"><?php echo $elementos[$x][5]?></th>
   <th class="Otros_no_Metales"><?php echo $elementos[$x][6]?></th>
   <th class="Otros_no_Metales"><?php echo $elementos[$x][7]?></th>
   <th class="Halogenos"><?php echo $elementos[$x][8]?></th>
   <th class="GasesNobles"><?php echo $elementos[$x][9]?></th>
 </tr>

 <tr>
  <th  class="Alcalinos"><?php echo $elementos[$x][10]?></th>
  <th class="alcalinoterreos"><?php echo $elementos[$x][11]?></th>
  <td colspan="10"></td>
  <th class="Otros_Metales"><?php echo $elementos[$x][12]?></th>
  <th class="Metaloides"><?php echo $elementos[$x][13]?></th>
  <th class="Otros_no_Metales"><?php echo $elementos[$x][14]?></th>
  <th class="Otros_no_Metales"><?php echo $elementos[$x][15]?></th>
  <th class="Halogenos"><?php echo $elementos[$x][16]?></th>
  <th class="GasesNobles"><?php echo $elementos[$x][17]?></th>
 </tr>

 <tr>
  <th  class="Alcalinos"><?php echo $elementos[$x][18]?></th>
  <th class="alcalinoterreos"><?php echo $elementos[$x][19]?></th>
  <th class="MetalesTran"><?php echo $elementos[$x][20]?></th>
  <th class="MetalesTran"><?php echo $elementos[$x][21]?></th>
  <th class="MetalesTran"><?php echo $elementos[$x][22]?></th>
  <th class="MetalesTran"><?php echo $elementos[$x][23]?></th>
  <th class="MetalesTran"><?php echo $elementos[$x][24]?></th>
  <th class="MetalesTran"><?php echo $elementos[$x][25]?></th>
  <th class="MetalesTran"><?php echo $elementos[$x][26]?></th>
  <th class="MetalesTran"><?php echo $elementos[$x][27]?></th>
  <th class="MetalesTran"><?php echo $elementos[$x][28]?></th>
  <th class="MetalesTran"><?php echo $elementos[$x][29]?></th>
  <th class="Otros_Metales"><?php echo $elementos[$x][30]?></th>
  <th class="Metaloides"><?php echo $elementos[$x][31]?></th>
  <th class="Metaloides"><?php echo $elementos[$x][32]?></th>
  <th class="Otros_no_Metales"><?php echo $elementos[$x][33]?></th>
  <th class="Halogenos"><?php echo $elementos[$x][34]?></th>
  <th class="GasesNobles"><?php echo $elementos[$x][35]?></th>
 </tr>
 
 <tr>
  <th  class="Alcalinos"><?php echo $elementos[$x][36]?></th>
  <th class="alcalinoterreos"><?php echo $elementos[$x][37]?></th>
  <th class="MetalesTran"><?php echo $elementos[$x][38]?></th>
  <th class="MetalesTran"><?php echo $elementos[$x][39]?></th>
  <th class="MetalesTran"><?php echo $elementos[$x][40]?></th>
  <th class="MetalesTran"><?php echo $elementos[$x][41]?></th>
  <th class="MetalesTran"><?php echo $elementos[$x][42]?></th>
  <th class="MetalesTran"><?php echo $elementos[$x][43]?></th>
  <th class="MetalesTran"><?php echo $elementos[$x][44]?></th>
  <th class="MetalesTran"><?php echo $elementos[$x][45]?></th>
  <th class="MetalesTran"><?php echo $elementos[$x][46]?></th>
  <th class="MetalesTran"><?php echo $elementos[$x][47]?></th>
  <th class="Otros_Metales"><?php echo $elementos[$x][48]?></th>
  <th class="Otros_Metales"><?php echo $elementos[$x][49]?></th>
  <th class="Metaloides"><?php echo $elementos[$x][50]?></th>
  <th class="Metaloides"><?php echo $elementos[$x][51]?></th>
  <th class="Halogenos"><?php echo $elementos[$x][52]?></th>
  <th class="GasesNobles"><?php echo $elementos[$x][53]?></th>
 </tr>

 <tr>
  <th  class="Alcalinos"><?php echo $elementos[$x][54]?></th>
  <th class="alcalinoterreos"><?php echo $elementos[$x][55]?></th>
  <th class="Lantanidos"><?php echo $elementos[$x][56]?></th>
  <th class="MetalesTran"><?php echo $elementos[$x][57]?></th>
  <th class="MetalesTran"><?php echo $elementos[$x][58]?></th>
  <th class="MetalesTran"><?php echo $elementos[$x][59]?></th>
  <th class="MetalesTran"><?php echo $elementos[$x][60]?></th>
  <th class="MetalesTran"><?php echo $elementos[$x][61]?></th>
  <th class="MetalesTran"><?php echo $elementos[$x][62]?></th>
  <th class="MetalesTran"><?php echo $elementos[$x][63]?></th>
  <th class="MetalesTran"><?php echo $elementos[$x][64]?></th>
  <th class="MetalesTran"><?php echo $elementos[$x][65]?></th>
  <th class="Otros_Metales"><?php echo $elementos[$x][66]?></th>
  <th class="Otros_Metales"><?php echo $elementos[$x][67]?></th>
  <th class="Otros_Metales"><?php echo $elementos[$x][68]?></th>
  <th class="Metaloides"><?php echo $elementos[$x][69]?></th>
  <th class="Halogenos"><?php echo $elementos[$x][70]?></th>
  <th class="GasesNobles"><?php echo $elementos[$x][71]?></th>

 </tr>
 <tr>
    <th class="Alcalinos"><?php echo $elementos[$x][72]?></th>
    <th class="alcalinoterreos"><?php echo $elementos[$x][73]?></th>
    <th class="actinidos"><?php echo $elementos[$x][74]?></th>  
    <th class="MetalesTran"><?php echo $elementos[$x][75]?></th>
    <th class="MetalesTran"><?php echo $elementos[$x][76]?></th>
    <th class="MetalesTran"><?php echo $elementos[$x][77]?></th>
    <th class="MetalesTran"><?php echo $elementos[$x][78]?></th>
    <th class="MetalesTran"><?php echo $elementos[$x][79]?></th>
    <th class="MetalesTran"><?php echo $elementos[$x][80]?></th>
    <th class="MetalesTran"><?php echo $elementos[$x][81]?></th>
    <th class="MetalesTran"><?php echo $elementos[$x][82]?></th>
    <th class="MetalesTran"><?php echo $elementos[$x][83]?></th>
    <th class="Otros_Metales"><?php echo $elementos[$x][84]?></th>
    <th class="Otros_Metales"><?php echo $elementos[$x][85]?></th>
    <th class="Otros_Metales"><?php echo $elementos[$x][86]?></th>
    <th class="Otros_Metales"><?php echo $elementos[$x][87]?></th>
    <th class="Halogenos"><?php echo $elementos[$x][88]?></th>
    <th class="GasesNobles"><?php echo $elementos[$x][89]?></th>


</tr>
 

 </table>

  <center> <div class="segtabla"> </center>

 <table>
     <tr>
         <th class="Lantanidos"> <?php echo $elementos[$x][90]?></th>
         <th class="Lantanidos"> <?php echo $elementos[$x][91]?></th>
         <th class="Lantanidos"> <?php echo $elementos[$x][92]?></th>
         <th class="Lantanidos"> <?php echo $elementos[$x][93]?></th>
         <th class="Lantanidos"> <?php echo $elementos[$x][94]?></th>
         <th class="Lantanidos"> <?php echo $elementos[$x][95]?></th>
         <th class="Lantanidos"> <?php echo $elementos[$x][96]?></th>
         <th class="Lantanidos"> <?php echo $elementos[$x][97]?></th>
         <th class="Lantanidos"> <?php echo $elementos[$x][98]?></th>
         <th class="Lantanidos"> <?php echo $elementos[$x][99]?></th>
         <th class="Lantanidos"> <?php echo $elementos[$x][100]?></th>
         <th class="Lantanidos"> <?php echo $elementos[$x][101]?></th>
         <th class="Lantanidos"> <?php echo $elementos[$x][102]?></th>
         <th class="Lantanidos"> <?php echo $elementos[$x][103]?></th>
         <th class="Lantanidos"> <?php echo $elementos[$x][104]?></th>
        

          </tr>
          <tr>
          <th class="actinidos"> <?php echo $elementos[$x][105]?></th>
          <th class="actinidos"> <?php echo $elementos[$x][106]?></th>
          <th class="actinidos"> <?php echo $elementos[$x][107]?></th>
          <th class="actinidos"> <?php echo $elementos[$x][108]?></th>
          <th class="actinidos"> <?php echo $elementos[$x][109]?></th>
          <th class="actinidos"> <?php echo $elementos[$x][110]?></th>
          <th class="actinidos"> <?php echo $elementos[$x][111]?></th>
          <th class="actinidos"> <?php echo $elementos[$x][112]?></th>
          <th class="actinidos"> <?php echo $elementos[$x][113]?></th>
          <th class="actinidos"> <?php echo $elementos[$x][114]?></th>
          <th class="actinidos"> <?php echo $elementos[$x][115]?></th>
          <th class="actinidos"> <?php echo $elementos[$x][116]?></th>
          <th class="actinidos"> <?php echo $elementos[$x][117]?></th>
          <th class="actinidos"> <?php echo $elementos[$x][118]?></th>
          <th class="actinidos"> <?php echo $elementos[$x][119]?></th>
          </tr>

          </div>

    </table>

    <br>
    <br>
    <br>

    <table border="2">
		<tr>
			<th>Metales</th>
			<th>No Metales</th>
		</tr>
		<tr>
			<td style ="color:rgb(78, 1, 88);">Alcalinos</td>
			<td style ="color:rgb(0, 253, 13);">Otros no Metales</td>
		</tr>

    <tr>
			<td style ="color:rgb(255, 0, 149);">Alcalinoterros</td>
			<td style ="color:rgb(0, 52, 131);">Halogenos</td>
		</tr>

    <tr>
			<td style ="color:rgb(255, 94, 0);">Metales de Transicion</td>
			<td style ="color:rgb(0, 140, 255);">Gases Nobles</td>
		</tr>

    <tr>
			<td style ="color:rgba(223, 18, 178, 0.582);">Lantanidos</td>
			
		</tr>

    <tr>
			<td style ="color:rgba(223, 18, 178, 0.582);">Actinidos</td>
			
		</tr>

    <tr>
			<td style ="color:rgb(255, 238, 0);">Otros Metales</td>
			
		</tr>

		</table>

    <?php
}  

?>

    </div>
  </body>
</html>