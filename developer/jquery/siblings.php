<h3>Traversing the DOM siblings</h3>

<div id="siblings">
    <h2>Voorbeeld met siblings</h2>
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
    $(function(){       
        //alert("Ik ben klaar met het laden van de DOM");
        var opmaak = {"border" : "1px solid white",
                      "background-color" : "rgba(255, 165, 0, 0.42)",
                      "color" : "black",
                      "padding" : "0.2em"};
        
        $('#btn').click(function(){
            //$("div#siblings h2").siblings().css(opmaak);
        
            //$("div#siblings h2").siblings('button').css(opmaak); 

            //$('li#tweede').next().css(opmaak);

            //$("li#tweede").nextAll().css(opmaak);

            //$('li#tweede').nextUntil("li#vijfde").css(opmaak);

            //$('li#vijfde').prev().css(opmaak);

            //$('li#vijfde').prevAll().css(opmaak);

            $('li#vijfde').prevUntil('li#tweede').css(opmaak);   
        });
    });
</script>