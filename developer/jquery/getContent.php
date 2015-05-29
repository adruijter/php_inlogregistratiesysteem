<style>
button
    {
        display: block;
        margin: 2em 0em;        
    }


</style>

<h3>Get Content</h3>
<ul id="getContent">
    <li>Dit is de eerste regel</li>
    <li>Dit is de tweede regel</li>
    <li>Dit is de derde regel</li>
    <li>Dit is de vierde regel</li>
    <li>Dit is de vijfde regel</li>
    <li><b>Dit is de zesde regel</b></li>
</ul>

<button id="btnFirst">klik op mijn voor de tekst van de eerste regel</button>
<button id="btnSecond">Klik op mij voor de html van de ul</button>
<button id="btnFourth"></button>
<!-- li:nth-child(3) -->
<hr>

<h3>Vul hieronder uw naam in</h3>
<form action="" method="">
    voornaam:<input type="text" id="vn" value="Arjan" name="vn">

</form>
<button id="btnThird">Klik op mij voor het opvragen van de waarde van een form tekstveld</button>

<script>
    $(document).ready(function(){
        
        $("#btnFirst").click(function(){
            var text = $("ul#getContent li:first").text();
            alert(text);
        });
        
        $("#btnSecond").click(function(){
            var text = $("ul#getContent").html();
            alert(text);
        });
        
        $("#btnThird").click(function(){
            var waarde = $("input#vn").text();
            alert(waarde);
        });
        
        
        
    });
    


</script>


