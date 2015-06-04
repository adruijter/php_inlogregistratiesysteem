<style>
button
    {
        margin: 1em 0em;
    }

</style>

<h3>Remove elements from the page</h3>

<ul id='removeListItem'>
    <li>eerste</li>
    <li>tweede</li>
    <li>derde</li>
    <li>vierde</li>
    <li>vijfde</li>
    <li>zesde</li>
</ul>

Vul hier het nummer in van het te verwijderen listitem
<input type="text" id="remove" >

<button id="btnRemove">Klik op mij om het derde listitem te verwijderen</button>

<button id="btnRemoveChosen">Kies een list-item om te verwijderen , geef list-itemnummer in bovenstaande tekstvak</button>


<script>
    $(document).ready(function(){
        //alert("hallo");
        
        $('#btnRemove').click(function(){
            $('ul#removeListItem li:nth-child(3)').remove();
        });
        
        
        
        $('#btnRemoveChosen').click(function(){
            var list_itemnr = $('#remove').val();
            $('ul#removeListItem li:nth-child(' + list_itemnr + ')').remove();
            
        });
        
        $('ul#removeListItem li').click(function(){
            $(this).remove(); 
        });
        
    });


</script>