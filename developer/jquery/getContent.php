<style>
button
    {
        display: block;
        margin: 2em 0em;        
    }


</style>

<h3 id="h3verander">Get Content</h3>
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
<button id="btnFourth">Klik op mij en de tekst van het derde listitem verandert</button>
<!-- li:nth-child(3) -->

<button id="btnFifth">Klik op mij en de tekst van het &lt;h3&gt; element verandert</button>

<button id="btnSixth">Klik op mij en aan het laatste listitem wordt achter de bestaande tekst wat tekst toegevoegd</button>

<button id="btnSeventh">Klik op mij en het zesde listitem wordt onder het eerste listitem gezet</button>

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
            var waarde = $("input#vn").val();
            alert(waarde);
        });
        
        $("#btnFourth").click(function(){
            //alert("Hallo");
            $("ul#getContent li:nth-child(3)").html("<b>Ik ben nu veranderd in andere tekst</b>");
        });        
           
        $("#btnFifth").click(function(){
            //alert("Hallo");
            $("h3#h3verander").html("<h2>Dit is een oefening met GetContent</h2>");            
        }); 
        
        $("#btnSixth").click(function(){
            $("ul#getContent li:last").append("<b> en ik ben vet gedrukt!</b>")                                               .prepend("<b>Hallo hier ben ik, </b>");
            
        });
        
        $("#btnSeventh").click(function(){
            $("ul#getContent li:last").insertAfter("ul#getContent li:first");
            $("ul#getContent li:nth-child(4)").insertBefore("ul#getContent li:first");
        }); 
        
        // insertAfter() , Maak een nieuwe knop met tellertje die een nieuw listitem toevoegd aan de ul#getContent. In ieder nieuw listitem staat hoeveel keer er op de knop is gedrukt.
    });
    


</script>


