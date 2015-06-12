<h3>Traversing the DOM - ancestors</h3>

<div id="ancestor">
    <ul>
        <li>
            <span>Dit is wat tekst in span 1</span>
            <span>Dit is wat tekst in span 2</span>
        </li>        
        <li>
             <b>Dit is wat tekst met een b-tag eromheen</b>      
        </li>   
    </ul>
</div>




<script>
    
    var cssOpmaak = {"border" : "1px solid grey" , "background-color" : "orange"};
    
    
    var cssOpmaak2 = {"border" : "2px solid orange", "background-color" : "grey", "color" : "white" };
    
    
    $(document).ready(function(){
        //alert("Hallo");
        //$('span').parent()
        //         .css(cssOpmaak);
        
        //$('b').parents().css(cssOpmaak2 );
        
        
        //$('b').parents('li').css(cssOpmaak2);
        
        $('b').parentsUntil("div#ancestor").css(cssOpmaak2);
    });

</script>