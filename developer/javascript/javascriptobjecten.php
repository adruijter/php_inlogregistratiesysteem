<h3>Javascriptobjecten</h3>

<p></p>

<p></p>

<script> 
    
var naamobj = { "voornaam" : "Arjan",
                "tussenvoegsel" : "de",
                "achternaam" : "Ruijter",
                "lievelingsKleuren" : ["blauw", "geel", "groen"],
                "leeftijd" : 46,
                "volledigeNaam" : function(){
                  return this.voornaam + " " + this.tussenvoegsel + " " + this.achternaam;
               
              }};
    
document.getElementsByTagName("p")[0].innerHTML = "Mijn naam is: " + naamobj.voornaam + " " + naamobj.tussenvoegsel + " " + naamobj.achternaam ;
    
document.getElementsByTagName("p")[1].innerHTML = naamobj.volledigeNaam() + naamobj.lievelingsKleuren[1] + naamobj.leeftijd;

</script>






