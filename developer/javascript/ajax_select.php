<h3>Ajax - asynchroon select-tag met data vullen.</h3>

<p id="data" >Hier komt de voornaam, tussenvoegsel en achternaam na id selectie via de select-tag die asynchroon is gevuld met Ajax</p>


<select id='slct' name="slct_id">
    <option value='-1'>--selecteer een id--</option>
</select>

<script>
    var xmlhttp = new XMLHttpRequest();
    /*
    var xmlhttp5;
    function loadData(url, func)
    {
        
        xmlhttp5 = new XMLHttpRequest();
        
        xmlhttp5.onreadyStatechange = func;
        
        xmlhttp5.open("POST", url, true);
        xmlhttp5.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp5.send(); 
        
    }    
    document.getElementById("slct").onmouseover = function()
    {
        loadData("http://localhost/2014-2015/fotosjaak.esy.es/developer/javascript/data_select.php", function() {
            
            alert(xmlhttp5.readyState);
            if (xmlhttp5.readyState == 4 && xmlhttp5.status == 200)
            {
                
                var result = xmlhttp5.responseText;
                alert(result);
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
        });
    }
    */
    
    document.getElementById("slct").onmouseover = function()
    {
        //alert("Het event werkt");
        //var xmlhttp = new XMLHttpRequest();
        
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
                document.getElementById("data").innerHTML = "Hier komt de voornaam, tussenvoegsel en achternaam na id selectie via de select-tag die asynchroon is gevuld met Ajax";
            }            
        }  
        
        xmlhttp.open("POST", "http://localhost/2014-2015/fotosjaak.esy.es/developer/javascript/data_select.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send();       
    }
    
    document.getElementById("slct").onchange = function(){
        
        var id = this.children[this.selectedIndex].value;
        
       
        
        //xmlhttp1 = new XMLHttpRequest();
        //alert("Hallo");
        
        xmlhttp.onreadystatechange = function()
        {
            //alert(xmlhttp.readyState + " | " + xmlhttp.status);
            
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                var result = xmlhttp.responseText;
                //alert(result);
                obj = JSON.parse(result);
                //console.log(obj);
                document.getElementById("data").innerHTML = "gegevens: " + obj.records[0].id + " | " + obj.records[0].firstname + " | " + obj.records[0].infix + " | " + obj.records[0].lastname;
            }
            
        }  
         
        xmlhttp.open("POST", "http://localhost/2014-2015/fotosjaak.esy.es/developer/javascript/data_select.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("id=" + id);    
    }
</script>