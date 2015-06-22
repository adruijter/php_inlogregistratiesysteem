<h3>Ajax - asynchroon select-tag met data vullen.</h3>

<p id="data" >Hier komt de voornaam, tussenvoegsel en achternaam na id selectie via de select-tag die asynchroon is gevuld met Ajax</p>


<select id='slct' name="slct_id">
    <option value='-1'>--selecteer een id--</option>
</select>

<script>
    var xmlhttp = new XMLHttpRequest();    
    
    document.getElementById("slct").onmouseover = function()
    {
        document.getElementById("data").innerHTML = "Hier komt de voornaam, tussenvoegsel en achternaam na id selectie via de select-tag die asynchroon is gevuld met Ajax";
        xmlhttp.onreadystatechange = function()
        {
            //alert(xmlhttp.readyState + " | " + xmlhttp.status);
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                var result = xmlhttp.responseText;
                //alert(result);
                var obj = JSON.parse(result);
                var text = "<option value='-1'>--selecteer een id--</option>";
                var i;
                for (i = 0; i < obj.records.length; i++ )
                {
                    text += "<option value='" + obj.records[i].id + "'>" + obj.records[i].id + "</option>";
                }
                
                //alert(text);
                document.getElementById("slct").innerHTML = text;
            }            
        }  
        
        xmlhttp.open("POST", "http://localhost/2014-2015/fotosjaak.esy.es/developer/javascript/data_select.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send();       
    }
    
    document.getElementById("slct").onchange = function(){
        
        var id = this.children[this.selectedIndex].value; 
        //alert("Hallo" + id);
        
        var xmlhttp = new XMLHttpRequest();
        
        xmlhttp.onreadystatechange = function()
        {
            //alert(xmlhttp1.readyState + " | " + xmlhttp1.status);
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                //alert(xmlhttp1.responseText);
                var result = xmlhttp.responseText;
                var obj = JSON.parse(result);
                document.getElementById("data").innerHTML = obj.records[0].id + " | " + obj.records[0].firstname + " | " + obj.records[0].infix + " | " + obj.records[0].lastname;
            }
        }      
        
        xmlhttp.open("POST", "http://localhost/2014-2015/fotosjaak.esy.es/developer/javascript/data_select.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("id=" + id);      
        
    }
</script>