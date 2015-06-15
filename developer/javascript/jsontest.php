<h4>Dit is een extra oefening met JSON objecten<br> en de omzetting daarvan naar javascript objecten</h4>

<p id="jsontest"></p>

<p id="jsonautotest"> </p>

<script>

var json_obj = '{"fruit" : [{"naam" : "banaan", "kleur" : "geel"}, {"naam" : "appel", "kleur" : "rood"}, {"naam" : "citroen", "kleur" : "geel"}, {"naam" : "limoen", "kleur" : "groen"}], "auto" : [{"naam" : "mercedes", "type" : "SLK"}, {"naam" : "audi", "type" : "100"}, {"naam" : "ford", "type" : "mondeo"} ], "schoenmaat" : 46}';
    
var js_obj = JSON.parse(json_obj);
    
// For Loop;
    
var outputText = "";

    for (var i = 0; i < js_obj.fruit.length; i++)
    {
        outputText += "<br>naam: " + js_obj.fruit[i].naam + " | kleur: " + js_obj.fruit[i].kleur;
    }
    
var outputText2 = ""
    var i;
    for (i = 0; i < js_obj.auto.length; i++)
    {
        outputText2 += "<br>merk: " + js_obj.auto[i].naam + " | type: " + js_obj.auto[i].type;
    }

//document.getElementById('jsontest').innerHTML = "In het array fruit zitten de volgende elementen: " + outputText;
    
document.getElementById('jsontest').innerHTML = outputText;
    
document.getElementById('jsonautotest').innerHTML = outputText2;

</script>