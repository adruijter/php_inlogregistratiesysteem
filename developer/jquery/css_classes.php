<style>
.gekkeDiv
{
    width: 300px;
    height: 300px;
    background-color: rgba(253, 53, 207, 0.7);
    border: 10px dashed #f70131;
}
    
.normaleDiv
{
    width: 200px;
    height: 200px;
    background-color: rgba(114, 114, 92, 0.7);
    border: 3px solid yellow;
    padding: 1em;    
}
    
button
    {
        margin: 2em 0em;
    }


</style>



<h3>Add, remove en toggle CSS Classes</h3>


<div class="normaleDiv" id="changeDiv">
Ik ben een normale div
</div>

<button id="btnClass">Klik op mij voor gekke div opmaak</button>

<button id="btnToggleClass">Klik op mij om de gekke div opmaak te toggelen (aan/uit zetten)</button>


<script>
    var flag = true;
    $("#btnClass").click(function(){
        if ( flag)
        {
            $("#changeDiv").removeClass('normaleDiv')
                           .addClass('gekkeDiv')
                           .text("Dit is een gekke div");
            $(this).text("Klik op mij voor normale div opmaak");
            flag = false;
        }
        else
        {
            $("#changeDiv").removeClass('gekkeDiv')
                           .addClass('normaleDiv')
                           .text("Dit is een normale div");
            $(this).text("Klik op mij voor een gekke div opmaak");
            flag = true;
        }
    });
    
    $("#btnToggleClass").click(function(){
        //alert("Hallo");
        
        $("#changeDiv").toggleClass("normaleDiv")
                       .toggleClass("gekkeDiv");
    });

</script>



