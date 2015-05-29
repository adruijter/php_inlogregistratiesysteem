<style>
    
div#chainingDiv
{
    width: 100px;
    height: 100px;
    background-color: yellow;
    border: 1px solid green;
    margin: 2em 0em;
}

</style>



<h3>Chaining</h3>

<div id="chainingDiv"></div>

<button id="btnChaining">Klik op mij</button>

<script>
    $(document).ready()
    {
        //Maak een selector voor de button
        $("#btnChaining").click(function(){
            //alert("Hallo ik werk");
            $("#chainingDiv").css("background-color", "blue");
            $("#chainingDiv").css("border", "20px dashed white");
            $("#chainingDiv").css("width", "200px");
            $("#chainingDiv").css("height", "200px");
            
            // Chaining is effectiever dan bovenstaande
            $("#btnChaining").css("background-color", "black")
                             .css("border", "5px solid red")
                             .css("color", "white");
            
        });
        
        
    }


</script>