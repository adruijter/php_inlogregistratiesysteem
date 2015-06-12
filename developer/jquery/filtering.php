<h3>Traversing the DOM Filtering</h3>

<div id="filtering">
    <h2>Voorbeeld met Filtering</h2>
    <ul>
        <li><span>Eerste regel</span></li>
        <li id="tweede">tweede regel</li>
        <li>derde regel</li>
        <li>vierde regel</li>
        <li id='vijfde'>vijfde regel</li>   
    </ul>
    <button id="btn">Klik hier</button>
</div>



<script>
    var opm = { "border" : "2px solid orange",
                "border-radius" : "5px",
                "background-color" : "grey",
                "padding" : "0.5em",
                "margin" : "0.5em",
                "color" : "white"
              }
    
    $(function(){
       //alert("Hallo"); 
        
       $('#btn').click(function(){
          //$("#filtering li").first().css(opm);
           
         // $("#filtering li").last().css(opm);
           
         // $("#filtering li").eq(3).css(opm);
           
          // $('#filtering li').filter("#tweede").css(opm);
           
            $('#filtering li').not("#tweede").css(opm);
           
           
       });
    });
</script>
