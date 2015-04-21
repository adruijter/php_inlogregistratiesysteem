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
            /*
            $('p:nth-child(' + n + ')').css('border', '2px solid grey').
                                        css('width', '100px').
                                        css('height', '100px');
            
            */
            
            var test = 
            
            $('p:nth-child(' + n + ')').css({ 'border' : '2px solid grey',
                                              'width'  : '100px',
                                              'height' : '100px'});
            
            if (n < 6)
            {
               n++; 
            }
        });
        
        $('p').click(function(){
            
            $(this).css({ 'border' : '0px solid grey',
                         'width'  : 'inherit',
                         'height' : 'inherit'});
            n = 1;
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
    <li>Opdrachten</li>
    <li>Maak de eerste paragraaf grijs</li>
    <li>Maak een knop die wanneer er op geklikt wordt elke paragraaf een border geeft en een width en height van 100 bij 100</li>
    <li>Wanneer je klikt op een &lt;p&gt;-tag, moet de oude waarde van het &lt;p&gt;-tag weer hersteld worden</li>    
</ul>



