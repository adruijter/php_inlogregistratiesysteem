<h3>Set Content het dynamisch veranderen van tekst en html </h3>

<ul id='setContent'>
    <li>Dit is de eerste regel</li>
    <li>Dit is de tweede regel</li>
    <li>Dit is de derde regel</li>
    <li>Dit is de vierde regel</li>
    <li>Dit is de vijfde regel</li>
    <li>Dit is de zesde regel</li>
</ul>
<input type='text' id='input' value="Arjan de Ruijter">



<button id="btnSetContent">Verander de tekst van het derde listitem</button>
<button id="btnCallback">Verander de tekst met een callbackfunction</button>

<script>
    $(document).ready(function(){
        //alert("Hallo");
        $('#btnSetContent').click(function(){
            //alert('Hij werkt');
            $('ul#setContent li:nth-child(3)').text("<u>Tekst is veranderd</u>");
            $('ul#setContent li:nth-child(4)').html("<u>Tekst is veranderd</u>");
            $('#input').val("Bert de Vries");            
        });
        
        $('#btnCallback').click(function(){
            //alert("hallo");
            
            $('ul#setContent li:nth-child(5)').text(function(i, origText){
                var text = "De index van het element i= " + i + " de originele tekst was: " + origText;
                return text;
            
            });
        });
    });
</script>