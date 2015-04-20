<h3>Home Javascript</h3>
<p id="welkom"></p>
<p id="deTijd"></p>

<button onclick = 'tekst()'>
    Klik op mij en de tijd verschijnt en ik heet u welkom
</button>

<script>
    function tekst()
    {
        document.getElementById("deTijd").innerHTML =
                    "De datum van vandaag is: " + Date();
        
        document.getElementById("welkom").innerHTML =                           "Welkom op deze pagina!";       
    }
</script>

