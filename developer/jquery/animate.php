<style>
div#div1968
{
    position: relative;
    border: 5px solid #65C1CD;    
    width: 200px;
    height: 100px;
    border-radius: 10px;
    background-color: #FF7F00;
    font-size: 1em;
    padding: 1.5em;
    margin: 1em;    
    top: 0px;
    left: 0px;
    color: yellow;
}


</style>


<h3>Animation met de animate method</h3>

<button id="btn1969">stop de animatie</button>
<div id="div1968">Deze tekst wordt geanimeerd!</div>
<button id="btn1968">Klik op mij en er gebeuren mysterieuse dingen</button>


<input type="text" id="mijneerstedatepicker">

<script>
    $(document).ready(function(){
        
        $("#mijneerstedatepicker").datepicker();
        
        var voorbeeld  = {width : "200px",                                                                         height : "100px",                                                                       fontSize : "1em",
                          backgroundColor : "#FF7F00"}
        
        function test()
        {                                    
            $("div#div1968").animate(voorbeeld, 1000);
        }
        
        
        $("#btn1968").click(function(){
            $("div#div1968").animate({ width : "350px",
                                       height : "400px",
                                       fontSize : "3em",
                                       backgroundColor: "green",
                                       color : "white"}, 1000, test
                                    );         
        });
        
        $("#btn1969").click(function(){
            $("div#div1968").stop();
        });
    });
</script>