<style>
img {
    display: block;
    margin: 3em;
    border: 5px solid green;
    border-radius: 50px;
}    
</style>


<h3>Hide en Show</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus nibh accumsan fringilla tincidunt. Nam luctus metus at posuere blandit. Vestibulum interdum ullamcorper elit. Morbi hendrerit lorem eget consequat interdum. Donec pharetra mollis velit non elementum. Maecenas dui ipsum, scelerisque in dignissim non, varius eu est. Vestibulum ut neque bibendum, dapibus lacus at, egestas sapien. Cras dictum feugiat purus, quis iaculis nunc faucibus pulvinar. Praesent eu dictum mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus a blandit sapien. Vivamus at fringilla erat.</p>
<button id='button_1'>Klik op mij</button>

<img src='images/hamsters/dwerghamster.jpg' alt='dwerghamster'>

<button id='button_2'>Klik op mij en de hamster verdwijnt</button>

<script>
    function gefeliciteerd()
    {
        alert("De animatie is klaar");
    }
    //alert("Blijkbaar is de pagina nog niet geladen");
 // Maak een functie genaamd hideParagraph() en laat deze een alert afvuren
    $(document).ready(function(){         
        
        $('#button_1').dblclick(function(){
            
            $('p').show(5000);
            $(this).text('Klik op mij');
        });
        
        
        $('#button_1').click(function(){
            //alert("Hallo dan!");
            $('p').hide(1000);
            $(this).html('Dubbelklik op mij');
            
            //Even een stukje JavaScript
            //document.getElementById('button_1').innerHTML = "DubbelKlik op mij";
        });
        
        $('#button_2').click(function(){
            $('img').toggle(2000, function(){
                if ($('#button_2').text() == "Klik op mij en je ziet een hamster")
                {
                    $('#button_2').text("Klik op mij en de hamster verdwijnt")
                }
                else
                {
                    $('#button_2').text("Klik op mij en je ziet een hamster")
                }
            });
        });
    });
</script>