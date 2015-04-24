<script>
    $(document).ready(function(){
        $('input:not([type=submit])').focus(function(){
            $(this).css('background-color', 'grey');
            
            var attribuutnaam, text;
            attr_name = $(this).attr("name");
            if ( attr_name == 'vn')
                text = 'voornaam';
            else if ( attr_name == 'tv')
                text = 'tussenvoegsel';
            else if ( attr_name == 'an')
                text = 'achternaam';       
            
            
            $(this).after('<p>Goed je ' + text + ' invullen<p>');
            
        
            
        }).blur(function(){
            $(this).css('background-color', 'rgb(221, 221, 221)');
            $('p').remove();
        });
    });
</script>


<h3>Events</h3>
<form action='' method=''>
    Voornaam:  <input type='text' name='vn'><p></p>
    tussenvoegsel: <input type='text' name='tv'>
    achternaam: <input type='text' name='an'>
    <input type='submit' name='submit' value='klik'>
</form>