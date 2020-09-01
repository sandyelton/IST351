var ItemName = new Array("Asparagus",
    "Baked Potato",
    "Broccoli",
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

var ItemDescription = new Array("Fresh asparagus steamed with lemon and butter.",
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
    "A mysterious mustache man");

var ItemPrice = new Array(2.99,2.99,2.99,2.99,5.99,9.99,1.99,2.99,5.99,9.99,2.99,3.99,8.99,8.99,12.99,3.99,8.99,69.69);
var selectedFoods = new Array();
var ItemPic = new Array("Asparagus.gif","BakedPotatoe.gif","Broccoli.gif","Carrots.gif","ChickenFingers.gif",
"CordonBleu.gif","FrenchFries.gif","GreenBeans.gif","Hamburger.gif","Lasagna.gif","Peas.gif","Salad.gif","VegetableDelight.gif","StirFry.gif","TboneSteak.gif","SweetPotatoes.gif","FriedChicken.gif","drbob.jpg");

function writeRow()
{
    for (i=0; i<ItemName.length; i++)
    {
        document.write("<tr>");
        document.write("<td><input id=\"" + ItemName[i] + "\" name=\"food\" value=\"" + i + "\" type=\"checkbox\">" + ItemName[i] + "</td>");
        document.write("<td id=\"center\">" + ItemDescription[i] + "</td>");
        document.write("<td id=\"center\">$ " + ItemPrice[i] + "</td>");
        document.write("</tr>");
    }
}

function checkOrder()
{
    const checkboxes = document.querySelectorAll('input[name="food"]:checked');
    let values = [];

    checkboxes.forEach((checkbox) => {values.push(checkbox.value);});

    return values;
}

const btn = document.querySelector('#btn');
btn.addEventListener('click', (event) => {alert(validate('food'));});

function showOrder()
{
    let count = 0;
    let topNum = 60;
    let leftNum = -650;
    for (x=0; x<checkOrder().length; x++)
    {
        let picArray = checkOrder();
        let picNum = picArray[x];
        
        if (leftNum > -300)
        {
            leftNum = -650;
            topNum +=110; 
        }
        if (count < 6)
        {
            document.write("<img src=\"images/" + ItemPic[picNum] + "\" style=\"position: absolute; margin-top:" + topNum + "px; margin-left:" + leftNum + "px\">");
            leftNum +=70;
            count++;
        }
        else if (count >=6 && count < 12)
        {
            document.write("<img src=\"images/" + ItemPic[picNum] + "\" style=\"position: absolute; margin-top:" + topNum + "px; margin-left:" + leftNum + "px\">");
            leftNum +=70;
            count++;
        }
        else if (count >= 12)
        {
            document.write("<img src=\"images/" + ItemPic[picNum] + "\" style=\"position: absolute; margin-top:" + topNum + "px; margin-left:" + leftNum + "px\">");
            leftNum +=70;
            count++;
        }
    }
}

function clearOrder()
{
    var checkboxes =  document.getElementsByName("food");
    for(var i=0, n=checkboxes.length;i<n;i++) 
    {
        checkboxes[i].checked = false;
    }
    
    window.location.reload();
}

function showPlate()
{
    var x = document.getElementById("plate");
    if (x.style.display === "none")
    {
        x.style.display = "block";
    }
    else
    {
        x.style.display = "none";
    }
}

function addPrice()
{
    var max = 0;
    var tip = 0;
    var tax = 0;
    var total = 0;

    document.write("<tr>");
    document.write("<th>Thank</th>");
    document.write("<th>You!</th>");
    document.write("</tr>");

    for (x=0; x<checkOrder().length; x++)
    {
        let priceArray = checkOrder();
        let priceNum = priceArray[x];

        document.write("<tr>");
        document.write("<td>" + ItemName[priceNum] + "</td>");
        document.write("<td>" + ItemPrice[priceNum] + "</td>");
        document.write("</tr>");

        max = max + ItemPrice[priceNum];
    } 
    tip = max * 0.15;
    tax = max * 0.07;
    total = max + tip + tax;



    document.write("<tr>");
    document.write("<td>Sub Total</td>");
    document.write("<td>" + max.toFixed(2) + "</td>");
    document.write("</tr>");

    document.write("<tr>");
    document.write("<td>Tip</td>");
    document.write("<td>" + tip.toFixed(2) + "</td>");
    document.write("</tr>");

    document.write("<tr>");
    document.write("<td>Tax</td>");
    document.write("<td>" + tax.toFixed(2) + "</td>");
    document.write("</tr>");

    document.write("<tr>");
    document.write("<td>Total</td>");
    document.write("<td>" + total.toFixed(2) + "</td>");
    document.write("</tr>");
}


///////////////////////////////////////////////////////////////////////////////////////////




