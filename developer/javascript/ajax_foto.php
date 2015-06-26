<!--
Maak een tabel genaamd product. De velden zijn: id, name_foto, description, foto_path
-->
<style>
p#data img
{
    width: 200px;
}

</style>



<h3>Ajax - asynchroon select-tag met foto-id's vullen.</h3>

<p id="data" ><img src="http://localhost/2014-2015/fotosjaak.esy.es/images/boeken/ghostboy.jpg" alt="boek"></p>


<select id='slct' name="slct_id">
    <option value='-1'>--selecteer een id--</option>
</select>

<script>
    var xmlhttp = new XMLHttpRequest();    
    
    document.getElementById("slct").onmouseover = function()
    {
        document.getElementById("data").innerHTML = "<img src='http://localhost/2014-2015/fotosjaak.esy.es/images/boeken/ghostboy.jpg' alt='boek'><p>Een boek over een jongen</p>";
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
        
        xmlhttp.open("POST", "http://localhost/2014-2015/fotosjaak.esy.es/developer/javascript/data_foto.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send();       
    }
    
    document.getElementById("slct").onchange = function(){
        
        var id = this.children[this.selectedIndex].value; 
        //alert("Hallo" + id);
        
        //var xmlhttp = new XMLHttpRequest();
        
        xmlhttp.onreadystatechange = function()
        {
            //alert(xmlhttp1.readyState + " | " + xmlhttp1.status);
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                //alert(xmlhttp.responseText);
                var result = xmlhttp.responseText;
                var obj = JSON.parse(result);
                //alert(obj.records[0].photopath);
                document.getElementById("data").innerHTML = "<img src='" + obj.records[0].photopath + "' alt='" + obj.records[0].photoname + "'><p>" + obj.records[0].photodescription + "</p>";
                
            }
        }      
        
        xmlhttp.open("POST", "http://localhost/2014-2015/fotosjaak.esy.es/developer/javascript/data_foto.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("id=" + id);      
        
    }
</script>