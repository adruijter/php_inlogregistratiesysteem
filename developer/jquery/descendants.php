<h3>Traversing the DOM descendants</h3>

<div id="descendants">
    <ul>
        <li>
            <span>Dit is wat tekst in span 1</span>
            <span class="desc">Dit is wat tekst in span 2</span>
        </li>        
        <li>
             <b>Dit is wat tekst met een b-tag eromheen</b>      
        </li>   
    </ul>
</div>

<button id="desc">Klik op mij</button>


<script>
    $(document).ready(function(){
        //alert("Hallo");
        var opmaak = {"border" : "1px solid orange"};
        
        $('#desc').click(function(){
            //$('div#descendants').children().css(opmaak);
            
            //$('li').children(".desc").css(opmaak);
            
            //Vind alle <b>-tags die descendants zijn van div#descendants
            $("#descendants").find('span.desc').css(opmaak);
        }); 
    });

</script>