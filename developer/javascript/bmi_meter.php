<style>
div#gewichtSlider
{
    width: 50%;
    border: 1px solid orange;    
}

div#lengteSlider
{
    width: 50%;
    border: 1px solid orange;    
}

</style>


<h3>BMI meter</h3>
<div id='gewichtSlider'></div>

<p id='gewicht'></p>

<div id='lengteSlider'></div>

<p id='lengte'></p>



<script>
    $(document).ready(function(){
        //alert("Hallo");
        var initGewicht = 50;
        var initLengte = 1.808;
        
        $("#gewichtSlider").slider({
            min : 0,
            max : 270,
            step : 0.1,
            value : initGewicht,
            change : function(event, ui){
                document.getElementById("gewicht").innerHTML = ui.value;            
            },
            create : function(event, ui){
                document.getElementById("gewicht").innerHTML = initGewicht;
            }
            
        });  
        
        $("#lengteSlider").slider({
            min : 0,
            max : 2.70,
            step : 0.005,
            value : initLengte,
            change : function(event, ui){
                document.getElementById("lengte").innerHTML = ui.value;            
            },
            create : function(event, ui){
                document.getElementById("lengte").innerHTML = initLengte;
            }
            
        });  
    });
    
    
    
</script>