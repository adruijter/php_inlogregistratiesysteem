<style>
div#uitkomst
{
    border: 1px solid black;
    background-color: #ebd0d0;
    width: 200px;
    height: 20px;
    padding: 1em;
}

</style>


<h3>Variabelen in JS</h3>

<div id='uitkomst'>slkdf</div>






<script>
var $eerstegetal = "4", _tweedegetal = 6, derdegetal = 2;

var uitkomstberekening = $eerstegetal + _tweedegetal;

var uitkomst = document.getElementById("uitkomst");

uitkomst.innerHTML = $eerstegetal + " + " + _tweedegetal + " = " + uitkomstberekening ;
</script>