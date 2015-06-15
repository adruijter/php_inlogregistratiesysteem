<h3>Ajax - asynchroon data verversen.</h3>

<p id="data" >Hier komt de data opgehaald (asynchroon) met Ajax</p>

<button id="btn">Klik op mij</button>

<select id='slct'>
    <option value='empty'> kies een persoon</option>
    <option value='test'> Arjan de Ruijter</option>


</select>

<!-- maak een selecttag die alle personen in de users tabel selecteert en er maar 8 weergeeft, als je hem uitklapt -->


<script>
     
    document.getElementById('btn').onclick = function(){
        
        // We maken een XMLHttpRequest object en die zit standaard in elke browser
        var xmlhttp = new XMLHttpRequest();
        
        xmlhttp.onreadystatechange = function()
        {
            if ( xmlhttp.readyState == 4 && xmlhttp.status == 200 )
            {
                var dataText = xmlhttp.responseText;
                var dataText = JSON.parse(dataText);
                
                for ()
                document.getElementById("data").innerHTML = dataText.namen[0].id + " | " + dataText.namen[0].firstname + " | " + dataText.namen[0].id + " | " + dataText.namen[0].lastname + " | " + dataText.namen.length;            
            }           
        }
        
        // Onderstaande vind je bij w3schools.com - ajax tutorial - ajax request
        
        /*
        xmlhttp.open("GET", "http://localhost/2014-2015/fotosjaak.esy.es/developer/javascript/data.php?id=94&telefoon=0634251678", true);
        xmlhttp.send();
        */
        
        xmlhttp.open("POST", "http://localhost/2014-2015/fotosjaak.esy.es/developer/javascript/data.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("id=102&lastname=Pley");
    }
    
    
    document.getElementById("slct").onfocus = function()
    {
        //alert("Het event werkt");
        
        
    }
</script>