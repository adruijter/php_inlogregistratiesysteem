<script>
    $(document).ready(function(){
        //alert("Hallo Wereld");
        
        $('p').click(function(){
            $('p').hide();
        });
        
        //Laat het li verdwijnen waar je op clicked.
        $('ul#exercise_01 li').click(function(){
            $(this).hide();
        });
        
        var n = 1;
        $('button#verdwijn').click(function(){
            //alert("sldkfjs");
            $('ul#exercise_01 li:nth-child(' + n + ')').hide(); 
            if ( n <= 10)
            {
                n++;
            }
            console.log("De variabele n heeft de waarde: " + n);
        });
        
        
        $('button#laat_zien').click(function(){
            //alert("Haalo");
            //console.log("Hallo");
            if ( n > 1)
            {
                $('ul#exercise_01 li:nth-child(' + (n-1) + ')').show();
                n--;
            }
            console.log("De variabele n heeft de waarde: " + n);
        });
        
        $('ul#exercise_01').css('background-color', '#b4b4ff').
                            css('border', '2px solid grey')
        
    });    
</script>


<h3>Get Started</h3>
<h5>Local jquery.js bestand</h5>
<p>We hebben in de head sectie van onze site een link gemaakt naar de jquery bibliotheek. Nu moeten we op deze pagina code schrijven om te zien of het werkt.</p>
<ul id='exercise_01'>
    <li>Dit is de eerste regel</li>
    <li>Dit is de tweede regel</li>
    <li>Dit is de derde regel</li>
    <li>Dit is de vierde regel</li>
    <li>Dit is de vijfde regel</li>
    <li>Dit is de zesde regel</li>
    <li>Dit is de zevende regel</li>
    <li>Dit is de achtste regel</li>
    <li>Dit is de negende regel</li>
    <li>Dit is de tiende regel</li>
</ul>
<button id='verdwijn'>Verdwijn listitem!</button>
<button id='laat_zien'>Laat zien!</button>
