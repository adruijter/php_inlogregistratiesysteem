<style>
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
<button>Klik op mij en het groene blokje verdwijnt!</button>
<div id='fade'>
    <div id="div4"></div>

    <div id="div5"></div>

    <div id="div6"></div>
</div>

<script>
    $(document).ready(function(){
       $('button').click(function(){
           //alert("hallo");
           $('div#fade div:last ').fadeOut(5000);
       });
    });
</script>

