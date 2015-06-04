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
    
<h4>Massa (kg)</h4>
<div id='gewichtSlider'></div>


<p id='gewicht'></p>

<h4>Lengte (m)</h4>
<div id='lengteSlider'></div>


<p id='lengte'></p>

<h4>BMI-waarde</h4>
<p id='bmi'>sdjfkl</p>

<button id='btnBMI'>Bereken BMI-waarde</button>



<script>
    function round(x, digits)
    {
        return parseFloat(x.toFixed(digits));
    }
    
    function berekenBMI(massa, lengte)
    {
        var bmi = (parseFloat(massa)) / ((parseFloat(lengte)) * ((parseFloat(lengte))));
        //alert(massa + " \ " + lengte);
        bmi = 
        return bmi;
    }
    
    
    
    
    
    $(document).ready(function(){
        //alert("Hallo");
        var initGewicht = 50;
        var initLengte = 1.808;
        
        
        $("#gewichtSlider").slider({
            min : 0,
            max : 270,
            step : 0.1,
            value : initGewicht,
            slide : function(event, ui){ //was change i.p.v. slide
                document.getElementById("gewicht").innerHTML = ui.value;
                fillInAnswer();
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
            slide : function(event, ui){  //was change i.p.v. slide
                document.getElementById("lengte").innerHTML = ui.value; 
                fillInAnswer();
            },
            create : function(event, ui){
                document.getElementById("lengte").innerHTML = initLengte;
                fillInAnswer();
            }
            
        }); 
        
        $("#btnBMI").click(function(){
            fillInAnswer();
        });
        
        function fillInAnswer()
        {
            var massa = document.getElementById("gewicht").innerHTML;            
            var lengte = document.getElementById("lengte").innerHTML;            
            var BMI = berekenBMI(massa, lengte);
            //BMI = round(BMI, 2);
            document.getElementById("bmi").innerHTML = BMI;     
        }
    });
    
    
    
</script>