<script>
    $(document).ready(function(){
       //$('p').css('background-color', 'grey'); 
       //$('p:first').css('background-color', 'grey'); 
       //$('p:last').css('background-color', '#aaa9a9').
       //            css('color', 'white'); 
       $('p:even').css('background-color', 'grey').
                   css('color', 'white'); 
       $('p:odd').css('background-color', '#fdc442').
                    css('color', 'white');     
       
    
       
    });
    
    var n = 1
    $(function(){
        $('#cssVerander').click(function(){
            // Hier komt je script.......
            
            $('p:nth-child(2)').css('border', '2px solid grey').
                                css('width', '100px').
                                css('height', '100px');
            
        });       
    });


</script>



<h3>Syntax</h3>
De syntax van JQuery is als volgt:<br>
<br>
$(selector).action(function(){<br>
    Hier komt dan je code.......<br>
})

<div>
    <p>Dit is de eerste paragraaf</p>
    <p>Dit is de tweede paragraaf</p>
    <p>Dit is de derde paragraaf</p>
    <p>Dit is de vierde paragraaf</p>
    <p>Dit is de vijfde paragraaf</p>
    <p>Dit is de zesde paragraaf</p>
</div>

<button id="cssVerander">Klik hier!</button>

<ul>
    <li>Maak de eerste paragraaf grijs</li>
    <li>Maak een knop die wanneer er op geklikt wordt elke paragraaf een border geeft en een width en height van 100 bij 100</li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
</ul>



