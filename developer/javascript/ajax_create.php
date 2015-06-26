<style>
textarea#photo_description
{
    display: block;
    margin: 1em 0em;
    background-color: #EBEBEB;
    padding: 1em;
    font-family: Verdana;
}

input#photo_name, input#photo_path
{
    padding: 1.0em;
    font-family: Verdana;
}
    
p#p_create
{
    color: green;
}
</style>


<h3>Op deze pagina gaan we een gegeven asynchroon wegschrijven naar een database</h3>

Fotonaam: <input type='text' id='photo_name' />
Foto beschrijving: <textarea rows=4 cols=20 id='photo_description'></textarea>
Foto adres: <input type='text' id='photo_path' />
<p id="p_create"></p>
<button id='btn'>Verstuur</button>




<script>
    document.getElementById('btn').onclick = function()
    {
       var photo_name = document.getElementById('photo_name').value;
       var photo_description = document.getElementById('photo_description').value;
       var photo_path = document.getElementById('photo_path').value;
        
        /*
        alert("De waarde van photo_name: " + photo_name + "\n" +
              "De waarde van photo_description: " + photo_description + "\n" +
              "De waarde van photo_path: " + photo_path); 
        */
        var xmlhttp = new XMLHttpRequest();
        
        xmlhttp.onreadystatechange = function()
        {
            alert(xmlhttp.readyState + " | " + xmlhttp.status);
            var text = xmlhttp.responseText;
            //alert(text); 
            document.getElementById('p_create').innerHTML = text;
        }
        
        xmlhttp.open("POST", "http://localhost/2014-2015/fotosjaak.esy.es/developer/javascript/data_create.php", true);
        xmlhttp.send();
        
    }




</script>