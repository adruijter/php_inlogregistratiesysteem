<p id='demo'></p>

<script>

var testObject = '{ "werknemer" : [ { "voornaam" : "Arjan", "leeftijd" : "46"}, { "voornaam" : "Bert", "leeftijd" : "88"}, { "voornaam" : "Marie", "leeftijd" : 23}]}';

/*   
var testObject = '{"name":"John Johnson","street":"Oslo West 16","phone":"555 1234567"}';
*/
var obj = JSON.parse(testObject);

document.getElementById("demo").innerHTML = "Hallo dan!" + obj.werknemer[2].leeftijd; //obj.werknemer[0].voornaam;
</script>
