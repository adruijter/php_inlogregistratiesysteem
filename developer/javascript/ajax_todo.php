<style>
textarea#todo
{
    display: block;
    margin: 1em 0em;
    background-color: #EBEBEB;
    padding: 1em;
    font-family: Verdana;
}

button#btn
{
    padding: 0.5em 1em ;
    font-family: Verdana;
}
    
p#p_create
{
    color: green;
}
</style>

<h3>TO DO List</h3>

Wat moet je nog doen?<textarea rows=4 cols=20 id='todo'></textarea>

<button id='btn'>Zend</button>
<div id='dbinfo'>
</div>




<script>
    document.getElementById('btn').onclick = function()
    {
       var todo = document.getElementById('todo').value;        
        
        //alert("De waarde van todo: " + todo + "\n"); 
        
        var xmlhttp = new XMLHttpRequest();
        
        xmlhttp.onreadystatechange = function()
        {
            //alert(xmlhttp.readyState + " | " + xmlhttp.status);
            var text = xmlhttp.responseText;
            alert(text); 
            
            var obj = JSON.parse(text);
            /*
            output = "<ul>";
            var i;
                for (i = 0; i < obj.records.length; i++)
                {
                    output += "<li>" + obj.records[i].id + " | " + obj.records[i].item + "</li>";
                }
            output += "</ul>";*/
            //document.getElementById('dbinfo').innerHTML = text;
        }
        
        xmlhttp.open("POST", "http://localhost/2014-2015/fotosjaak.esy.es/developer/javascript/data_todo.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
        xmlhttp.send("todo=" + todo);
        
    }
</script>