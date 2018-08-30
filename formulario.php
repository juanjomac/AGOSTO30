<?php
    require_once("conexion.php");

 ?>

 <form class="" action="cargar.php" method="post">
   <table>
     <tr>
       <td>Nombre</td>
       <td>
         <input type="text" name="nombre" value="">
       </td>
     </tr>
     <tr>
       <td>Categoria</td>
       <td>
            <select class="" name="categoria">
              <?php foreach ($vectorTipos as $valor){
                echo "<option value='$valor'>".$valor."</option>";
                }
              ?>

            </select>
       </td>
     </tr>
     <tr>
       <td>Valor</td>
       <td>
          <input type="text" name="volor" value="0">
       </td>
     </tr>
     <tr>
       <td colspan="2">
          <input type="submit" name="enviar" value="Enviar" />
      </td>
     </tr>
   </table>
 </form>
