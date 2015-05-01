<?php
    if (isset($_POST['submit']))
    {       
        
        echo 'U heeft de onderstaande gegevens ingevuld:<br>';
        echo '<table id="eventspage">
                <tr>
                    <td>voornaam:</td>
                    <td>'.$_POST['vn'].'</td>
                </tr>
                <tr>
                    <td>tussenvoegsel:</td>
                    <td>'.$_POST['tv'].'</td>
                </tr>
                <tr>
                    <td>achternaam:</td>
                    <td>'.$_POST['an'].'</td>
                </tr>
             </table>';  
        header('refresh:3;index.php?content=developer/jquery/events');
         
    }
    else
    {
?>


<script>
    $(document).ready(function(){
        $('input:not([type=submit])').focus(function(){
            $(this).css('background-color', '#d1d1d1').
                    css('padding', '0.3em');
            
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
            $(this).css('background-color', 'rgb(191, 191, 191)');
            $('p').remove();
        });
    });
</script>


<h3>Events</h3>
<form action='index.php?content=developer/jquery/events' method='post'>
    Voornaam:  <input type='text' name='vn'><p></p>
    tussenvoegsel: <input type='text' name='tv'>
    achternaam: <input type='text' name='an'>
    <input type='submit' name='submit' value='verzenden'>
</form>
<?php
    }
?>