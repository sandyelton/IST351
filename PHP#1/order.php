<html>
<link rel="stylesheet" type="text/css" href="restaurant.css">
<head>
  <meta charset="UTF-8">
  <title>"Sandy's Menu"</title>
</head>

<body>

  <?php
    $ItemPrice=array(2.99,2.99,2.99,2.99,5.99,9.99,1.99,2.99,5.99,9.99,2.99,3.99,8.99,8.99,12.99,3.99,8.99,69.69);
    $ItemName=array("Asparagus","Baked Potato","Broccoli",
    "Carrots",
    "Chicken Fingers",
    "Cordon Bleu",
    "French Fries",
    "Green Beans",
    "Hamburger",
    "Lasagna",
    "Peas",
    "Salad",
    "Vegetable Delight",
    "Stir Fry",
    "T-Bone Steak",
    "Sweet Potatoes",
    "Fried Chicken",
    "Dr. Bob");
    $foods = $_POST;
    
  ?>
  
  <div id="plate">
    <img src="images/Spoon.gif" width="83" height="290">
    <img src="images/Fork.png">
    <img src="images/Platter.jpg" width="500" height="500">
    <img src="images/Knife.gif" width="85" height="300">
    <img src="images/cup.jpg" width="150" height="400">
  
  
  
    <?php
    
      $topNum = 20;
      $leftNum = -700;
      for($x=0;$x<18;$x++)
      {
      if($leftNum>=-420)
      {
        $leftNum = -700;
        $topNum +=110;
      }
        if(count($foods['box'.$x])>0)
        {
          echo "<img style='position: absolute; margin-top:" . $topNum . "px; margin-left:" . $leftNum . "px;' src='images/" . $foods['box' . $x] . "'>";
          $leftNum +=60;
        }
      }
      ?>
      
    <table id='check'>
    <tr>
    <th>Thank</th>
    <th>You!</th>
    </tr>
      
      <?php
        $max = 0;
        $tip = 0;
        $tax = 0;
        $total = 0;
      
      for($x=0;$x<18;$x++)
      {
         if(count($foods['box'.$x])>0)
          {
          echo "<tr>";
            echo "<td>" . $ItemName[$x] . "</td>";
            echo "<td>" . $ItemPrice[$x] . "</td>";
          echo "</tr>";
          
          $max = $max + $ItemPrice[$x];
          }
        
      }
       $tip = $max * 0.15;
       $tax = $max * 0.07;
       $total = $max + $tip + $tax;
       
       echo "<tr>";
       echo "<td>Sub Total</td>";
       echo "<td>" . $max . "</td>";
       echo "</tr>";
       
       echo "<tr>";
       echo "<td>Tip</td>";
       echo "<td>" . round($tip,2) . "</td>";
       echo "</tr>";
       
       echo "<tr>";
       echo "<td>Tax</td>";
       echo "<td>" . round($tax,2) . "</td>";
       echo "</tr>";
       
       echo "<tr>";
       echo "<td>Total</td>";
       echo "<td>" . round($total,2) . "</td>";
       echo "</tr>";
      ?>
    </table>
  </div>
 
  
  
</body>
</html>