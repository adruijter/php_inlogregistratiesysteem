<style>
#blokje
{
    background-color: #d18e8e;
    width: 200px;
    height: 200px;
    padding: 2em;
    text-align: center;
    margin-top: 2em;
}
</style>

<h3>Introduction</h3>

<p>Klik op de foto en javascript verandert de foto</p>
<img id="hamster" src='images/hamsters/dwerghamster.jpg' alt='dwerghamster'   onclick='veranderFoto()'>

<div id="blokje" onclick="veranderBlokje()">
    Klik op en mijn css wordt veranderd.
</div>

<p>Type een getal tussen 0 en 5</p>
<input type="text" id="getal"><div id="validatieTekst"></div>
<button onclick="valideer()">klik voor validatie</button>

<script>
    function veranderFoto()
    {
        //alert("Hallo");
        var image = document.getElementById('hamster');
        if (image.src.match("images/hamsters/dwerghamster.jpg"))
        {
            image.src = "images/Desert.jpg";
        }
        else
        {
            image.src = "images/hamsters/dwerghamster.jpg";
        }
    }
    
    function veranderBlokje()
    {
        var blokje = document.getElementById('blokje');
        blokje.style.backgroundColor = "blue";
        blokje.style.color = "White";
        blokje.style.border = "10px solid red";
    }
    
    function valideer()
    {
        //alert("Ingedrukt");
        var getal = document.getElementById('getal');
        //alert(typeof(getal.value));
        //alert(isNaN(getal.value));
        if ( isNaN(getal.value))
        {
            document.getElementById("validatieTekst").innerHTML = "U heeft geen getal ingevoerd. Voor een getal in";
        }            
        else if ( getal.value >= 0 && getal.value <=5 )
        {
            //alert("Het getal zit tussen de 0 en 5");
            document.getElementById("validatieTekst").innerHTML = "Het getal zit tussen de 0 en 5";
        }
        else if (getal.value < 0 )
        {
            //alert("Het getal is kleiner dan nul ");
            document.getElementById("validatieTekst").innerHTML = "Het getal is kleiner dan nul ";
        }
        else
        {
            //alert("Het getal is groter dan 5");
            document.getElementById("validatieTekst").innerHTML = "Het getal is groter dan 5";
        }        
    }
</script>