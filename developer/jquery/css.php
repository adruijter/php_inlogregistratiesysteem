<style>
ul
    {
        list-style-type: none;
    }
    
ul#css li
    {
        background-color: #e68686;
    }

</style>


<h3>JQuery CSS</h3>

<p id='par'>Hier komt de breedte van de list-items</p>
<p id='par_2'>Hier komt de afmeting van het html document en browser window</p>

<ul id="css">
    <li>Dit is list-item 1slkdfjslkjsklsj</li>
    <li>Dit is list-item 2</li>
    <li>Dit is list-item 3</li>
    <li>Dit is list-item 4 sdfskld lkjjsldfjlk jsdlkfkjlk ljsldfjlk lkjsdlkfjklj ljsdflkj</li>
    <li>Dit is list-item 5</li>
    <li>Dit is list-item 6</li>
    <li>Dit is list-item 7</li>
    <li>Dit is list-item 8sdflksjlk slskjdfslkdjfsdlkjdsf</li>
</ul>

<button id="btn">Klik op mij</button>

<script>
    $(document).ready(function(){
        
        $('#btn').click(function(){
            /*
            $('ul#css li').css("width" , "308px")
                          .css("background" , "red")
                          .css("border", "10px solid brown");
                          
              //Bovenstaande heet het chainen van properties
              //Hieronder staat een alternatief namelijk een JS object
            */
            
            var cssOpmaak = { "background-color" : "rgba(39, 0, 255, 0.58)", "border" : "1px solid green", "margin" : "2em"};
            
            $('ul#css li').css(cssOpmaak);
            
            //Vraag de width op van de list-items
            $("ul#css li").wrapInner("<span></span>");
            
            
            var val, oldval = 0;
            
            $('ul#css li span').each(function(){
                var val = $(this).css("width");
                val = parseFloat(val);
                
                if ( val > oldval  )
                {
                    oldval = val;
                }
                
            });
            
            
            
            var width = $('ul#css li span').css("width");
            
            
            
            $('#par').text("De breedte van de list-items is: " + oldval);
            $('ul#css li').css("width" , oldval);
            
            
            var docWidth = $(document).width();
            var docHeight = $(document).height();
            var windowWidth = $(window).width();
            var windowHeight = $(window).height();
            $("#par_2").text("De breedte van onze HTML pagina is: " + docWidth + " De hoogte van onze HTML pagina is: " + docHeight + " De breedte van onze browser is: " + windowWidth + " De hoogte van onze browser pagina is: " + windowHeight );
        });
        
    });
</script>