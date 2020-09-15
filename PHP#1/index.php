<html>
<link rel="stylesheet" type="text/css" href="restaurant.css">
  <header> Sandys Food  </header>
  <body>
    <?php
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
    
    $ItemDescription=array("Fresh asparagus steamed with lemon and butter.",
    "Loaded Potato with everything!!",
    "Steamed Broccoli.",
    "Fresh cooked Carrots in a lemon glaze.",
    "Country Fried Chicken Fingers.",
    "Famous the world over. Cordon Bleu contains chicken, ham, and swiss cheese.",
    "French Fried Potato snacks.",
    "Fresh Green Beans cooked with a special sauce.",
    "Home Cooked Hamburger: anyway you like it!!",
    "Old Italian recipe: Lasagna cooked by our famous chef.",
    "Garden Peas cooked to perfection.",
    "Tossed Green Salad with garden fresh tomatos and our famous house dressing.",
    "Straight from the Orient. Wok cooked vegetables with a tantilizing sauce from China.",
    "Another savory dish from the Orient.",
    "Cooked over our Hickory Fireplace, this steak will melt in your mouth!",
    "Fresh cooked sweet potatoes in a sweet glaze.",
    "Southern Fried Chicken: the way you like it.",
    "A wonderfull Proffessor ");
    
    $ItemPrice=array(2.99,2.99,2.99,2.99,5.99,9.99,1.99,2.99,5.99,9.99,2.99,3.99,8.99,8.99,12.99,3.99,8.99,69.69);
    
    $ItemPic=array("Asparagus.gif","BakedPotatoe.gif","Broccoli.gif","Carrots.gif","ChickenFingers.gif",
"CordonBleu.gif","FrenchFries.gif","GreenBeans.gif","Hamburger.gif","Lasagna.gif","Peas.gif","Salad.gif","VegetableDelight.gif","StirFry.gif","TboneSteak.gif","SweetPotatoes.gif","FriedChicken.gif","drbob.jpg");

    echo "<div style='text-align: center;'>";
    echo "<form method='post' action='order.php' method='post'>";
   
    
    
    echo "<table style='width: 100%;'>";
    echo "<th id='left'>Item</th>";
    echo "<th>Description</th>";
    echo "<th>Price</th>";
    $lengthName=count($ItemName);
    for($x=0;$x<$lengthName;$x++)
      {
      echo ("<tr>");
      echo ("<td><input type='checkbox' id='box$x' name='box$x' value='" . $ItemPic[$x] . "'>" . $ItemName[$x] . "</td>");
      echo ("<td id='center'>" . $ItemDescription[$x] . "</td>");
      echo ("<td id='center'>" . $ItemPrice[$x] . "</td>");
      echo ("</tr>");
      }
    echo "</table>";
    echo "<input type='submit' value='Order Dinner'>";
    echo "</form>";
    echo "</div>";
    
    ?>
  </body>
</html>