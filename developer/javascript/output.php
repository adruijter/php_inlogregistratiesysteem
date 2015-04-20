<h3>Output</h3>
<p>Alertbox</p>
<script>
    //alert("Hallo");
    var x = 0;
    for ( var i = 0; i < 10; i++)
    {
        x++;
    }
    document.write("De uitkomst van een for-loop van 0 tot 10 die telkens met een wordt opgehoogd is: " + x);
    
    function innerHTML_test(tekst)
    {
        document.getElementById('innerHTML_test').innerHTML = 'Door het klikken op de button kwam deze tekst op het scherm. ' + tekst;        
    }

</script><br>
<button onclick="window.alert('Er is op de knop gedrukt');">Klik op mij!</button><br>

<p>document.write()</p>
Gebruik document.write() niet als alle HTML is geladen want dan wordt de geladen HTML vervangen door document.write() 

<button onclick="document.write('Alles is nu weg')">Deze knop haalt alle HTML weg</button>

<p>InnerHTML</p>
<div id="innerHTML_test"></div>
<button onclick="innerHTML_test('Hallo wereld')">Klik op mij voor wat tekst</button>

<p>console.log</p>
Druk op F12 en kijk bij console voor de output
<script>
    var x = 5, y = 8, z;
    z = x + y;
    console.log(x + " + " + y + " = " + z);
    
</script>