<h3>Ajax - asynchroon select-tag met data vullen.</h3>

<p id="data" >Hier komt de voornaam, tussenvoegsel en achternaam na id selectie via de select-tag die asynchroon is gevuld met Ajax</p>


<select id='slct'>
    <option value='empty'>--selecteer een id--</option>
</select>

<!-- maak een selecttag die alle personen in de users tabel selecteert en er maar 8 weergeeft, als je hem uitklapt -->


<script>     
    document.getElementById("slct").onfocus = function()
    {
        //alert("Het event werkt");
        var xmlhttp = new XMLHttpRequest();
        
        xmlhttp.onreadystatechange = function()
        {
            //alert("onreadystatechange werkt");
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                var result = xmlhttp.responseText;
                alert(result);
                
            }            
        }
        
        
        xmlhttp.open("POST", "http://localhost/2014-2015/fotosjaak.esy.es/developer/javascript/data.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("select=true");       
    }
</script>