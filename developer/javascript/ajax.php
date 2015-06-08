<h3>Ajax - asynchroon data verversen.</h3>

<p id="data" >Hier komt de data opgehaald (asynchroon) met Ajax</p>

<button id="btn">Klik op mij</button>



<script>
    /*
    $(document).ready(function(){
        $('#btn').click(function(){
            alert("Jquery hallo");
            
        });       
    });
    */
    
    
    document.getElementById('btn').onclick = function(){
                
        var xmlhttp = new XMLHttpRequest();
        
        xmlhttp.onreadystatechange = function()
        {
            if ( xmlhttp.readyState == 4 && xmlhttp.status == 200 )
            {
                var dataText = xmlhttp.responseText;
                alert(dataText);            
            }           
        }
        
        
        xmlhttp.open("GET", "http://localhost/2014-2015/fotosjaak.esy.es/developer/javascript/data.php", true);
        xmlhttp.send();
        
    }
</script>