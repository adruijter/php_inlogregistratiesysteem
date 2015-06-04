<?php
    $jsonString = '\'{"voornaam" : "Bert", "achternaam" : "de Vries"}\'';
?>


<p id='demo'></p>
<p id='jsonString'></p>


<p id='jsonExtern'>Haal mijn naam op</p>

<button id='btn_xmlhttp'>Klik op mij voor een XMLHttpRequest</button>


<script>
/*
Create an XMLHttpRequest object
Create the function to be executed when the server response is ready
Send the request off to a PHP file (gethint.php) on the server
Notice that q parameter is added gethint.php?q="+str
The str variable holds the content of the input field
*/
    
document.getElementById('btn_xmlhttp').onclick = function(){
    //alert("Hallo");
     //Create an XMLHttpRequest object
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function()
    {
        //document.getElementById('jsonExtern').innerHTML = 'hallo';
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            document.getElementById('jsonExtern').innerHTML = xmlhttp.responseText;
            var obj = JSON.parse(xmlhttp.responseText);
            //console.log(obj.toString());
            document.getElementById('jsonExtern').innerHTML = obj.voornaam + " " + obj.tussenvoegsel + " " + obj.achternaam;
        }
    }    
    xmlhttp.open("GET", "developer/json/data.php?id=1", true);
    xmlhttp.send();
};  
    
    
   

var testObject = '{ "werknemer" : [ { "voornaam" : "Arjan", "leeftijd" : "46"}, { "voornaam" : "Bert", "leeftijd" : "88"}, { "voornaam" : "Marie", "leeftijd" : 23}]}';

var jasonString = <?php echo $jsonString; ?>;
var obj = JSON.parse(testObject);
var jsobj = JSON.parse(jasonString);
    
document.getElementById("demo").innerHTML = "Mijn naam is: " + obj.werknemer[2].voornaam + "<br> Mijn leeftijd is: " + obj.werknemer[2].leeftijd;

document.getElementById("jsonString").innerHTML = jsobj.voornaam;
</script>
