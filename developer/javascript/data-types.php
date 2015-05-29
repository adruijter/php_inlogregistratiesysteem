<h3>Data-Types</h3>


<p id="tekst"></p>

<script>
var number = 10.123;
var string = "Dit is een string";
var fruit = ["banaan", "appel", "sinaasappel"];
var naamObject = { voornaam : "Arjan",
                   tussenvoegsel : "de",
                   achternaam : "Ruijter",
                   leeftijd : 17,
                   volledigeNaam : function(){
                       return "Mijn naam is: " +
                              this.voornaam + " - " +
                              this.tussenvoegsel + "  - " +
                              this.achternaam + "<br>" +
                              "Mijn leeftijd is: " + this.leeftijd;
                   }};

var p1 = document.getElementById("tekst");
    
p1.innerHTML = "Mijn naam is: " + naamObject.voornaam 
                                + " " 
                                + naamObject.tussenvoegsel
                                + " "
                                + naamObject.achternaam;
    
naamObject.voornaam = "Bert";
naamObject.leeftijd = 46;
    
p1.innerHTML = naamObject.volledigeNaam();
    
naamObject = null;
    
p1.innerHTML = naamObject.volledigeNaam() + "test";

</script>