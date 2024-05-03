<?php
 include'header.php';


if(isset($_SESSION['auth']))
{
   if($_SESSION['auth']!=1)
   {
       header("location:login.php");
   }
}
else
{
   header("location:login.php");
}
include'lib/connection.php';
$k=$_SESSION['userid'];
$sql = "SELECT * FROM orders where userid='$k'";
$result = $conn -> query ($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos os pedidos</title>
    <link rel="stylesheet" href="css/pending_orders.css">

</head>
<body>

<div class="container pendingbody">
  <h5>Todos os pedidos</h5>
<table class="table">
  <thead>
    <tr>

      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">Telefone</th>
      <th scope="col">Enviar número de dinheiro</th>
      <th scope="col">Taxa</th>
      <th scope="col">Produto total</th>
      <th scope="col">Preço total</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $k=0;
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              /*if($row["status"]==0)
              {
                $k="pending";
              }
              if($row["status"]==1)
              {
                $k="confirm";
              }
              if($row["status"]==2)
              {
                $k="delivery in progress";
              }
              if($row["status"]==3)
              {
                $k="delivered";
              }*/
              ?>
    <tr>

      <td><?php echo $row["name"] ?></td>
      <td><?php echo $row["address"] ?></td>
      <td><?php echo $row["phone"] ?></td>
      <td><?php echo $row["mobnumber"] ?></td>
      <td><?php echo $row["txid"] ?></td>
      <td><?php echo $row["totalproduct"] ?></td>
      <td><?php echo $row["totalprice"] ?></td>
      <td><?php echo $row["status"] ?></td>
    </tr>
    <?php 
    }
        } 
        else 
            echo "0 results";
        ?>
  </tbody>
</table>
</div>
    
</body>
</html>

<?php
 include'footer.php';
?>