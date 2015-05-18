<style>
button
{
    display: block;
    margin: 20px 0px;
}
div
{
   
}
#div4
{
    background-color: rgb(255, 97, 97);
    width:100px;
    height:100px;
    margin:2em 0px;
}
    
#div5
{
    background-color: rgb(243, 255, 97); 
    width:100px;
    height:100px;
    margin:2em 0px;
}

#div6
{
    background-color: rgb(97, 255, 140); 
    width:100px;
    height:100px;
    margin:2em 0px;
}
</style>

<h3>Fade</h3>
<button id="verdwijn">Klik op mij en het groene blokje verdwijnt!</button>
<button id="verschijn">Klik op mij en het groende blokje verschijnt weer</button>
<button id="toggle">Klik op mij en de gele knop verdwijnt</button>
<button id="transparant">Ik maak het rode blokje transparant</button>
<div id='fade'>
    <div id="div4"></div>

    <div id="div5">Dit is wat tekst</div>

    <div id="div6"></div>
</div>

<script>
    var vlag = false;
    $(document).ready(function(){
        
       $('#verdwijn').click(function(){
           //alert("hallo");
           $('div#fade div:last ').fadeOut(1000);
       });
       $('#verschijn').click(function(){
           //alert("Hallo");
           $("div#fade div:last ").fadeIn(500);          
       });
       $("#toggle").click(function(){
           if (!vlag)
           {
               $(this).html("Klik op mij en de gele knop komt tevoorschijn");
               vlag = true;
           }
           else
           {
               $(this).html("Klik op mij en de gele knop verdwijnt");
               vlag = false;
           }
           $("#div5").fadeToggle(400);
       });
        
       $("#transparant").click(function(){
           $("#div4").fadeTo(500, 0.15, function(){
               //alert("Het rode blokje is nu doorzichtig");
               $("#div5").fadeTo(1000, 0.15, function(){
                   $("#div6").fadeTo(500, 0.15, function(){
                       $("div").fadeTo(1500, 1);
                   });
               });
               
           });
       });
    });
</script>

<!-- Maak een tweede button die het groene blokje weer terug laat komen.-->

