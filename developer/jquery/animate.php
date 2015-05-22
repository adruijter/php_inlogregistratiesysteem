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
}


</style>


<h3>Animation met de animate method</h3>


<div id="div1968">Deze tekst wordt geanimeerd!</div>
<button id="btn1968">Klik op mij en er gebeuren mysterieuse dingen</button>

<script>
    $(document).ready(function(){
        function test()
        {                                    
            $("div#div1968").animate({width : "200px",                                                                         height : "100px",                                                                       fontSize : "1em"}, 1000);
        }
        
        
        $("#btn1968").click(function(){
            $("div#div1968").animate({ width : "350px",
                                       height : "400px",
                                       fontSize : "3em" }, 500, test
                                    );         
        });   
    });
</script>