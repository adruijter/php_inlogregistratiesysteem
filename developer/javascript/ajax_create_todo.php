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
    padding: 0.5em 1.0em;
    font-family: Verdana;
}
    
p#p_create
{
    color: green;
}
</style>


<h3>TO DO List</h3>
Type hier wat je moet doen: <textarea rows=4 cols=30 id='todo'></textarea>
<button id='btn'>Zend</button>
<div id='dbinfo'>
</div>




<script>
    document.getElementById('btn').onclick = function()
    {
       var todo = document.getElementById('todo').value;        
        
        //alert("TO DO: " + todo + "\n"); 
        
        var xmlhttp = new XMLHttpRequest();
        
        xmlhttp.onreadystatechange = function()
        {
            //alert(xmlhttp.readyState + " | " + xmlhttp.status);
            var text = xmlhttp.responseText;
            //alert(text);
            var obj = JSON.parse(text);
            
            var i;
            var output = "";
            for ( i = 0; i < obj.records.length; i++)
            {
                output += obj.records[i].id + " | " + obj.records[i].item + "<br>";                 
            }
            document.getElementById('dbinfo').innerHTML = output;
        }
        
        xmlhttp.open("POST", "http://localhost/2014-2015/fotosjaak.esy.es/developer/javascript/data_create_todo.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("todo=" + todo);        
    }
</script>