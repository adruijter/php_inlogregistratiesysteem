<h3>Ajax - asynchroon data verversen.</h3>

<p id="data" >Hier komt de data opgehaald (asynchroon) met Ajax</p>

<button id="btn">Klik op mij</button>



<script>
     
    document.getElementById('btn').onclick = function(){
        
        // We maken een XMLHttpRequest object en die zit standaard in elke browser
        var xmlhttp = new XMLHttpRequest();
        
        xmlhttp.onreadystatechange = function()
        {
            if ( xmlhttp.readyState == 4 && xmlhttp.status == 200 )
            {
                var dataText = xmlhttp.responseText;
                document.getElementById("data").innerHTML = dataText;            
            }           
        }
        
        // Onderstaande vind je bij w3schools.com - ajax tutorial - ajax request
        
        /*
        xmlhttp.open("GET", "http://localhost/2014-2015/fotosjaak.esy.es/developer/javascript/data.php?id=94&telefoon=0634251678", true);
        xmlhttp.send();
        */
        
        xmlhttp.open("POST", "http://localhost/2014-2015/fotosjaak.esy.es/developer/javascript/data.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("id=102&telefoon=0612345678");
    }
</script>