<style>
.smalltext
{
    font-size: 0.4em;
    width: 3em;
    display: inline;
}
</style>

Dit is de header pagina
<?php
if ($_SERVER['SERVER_ADDR'] == "31.170.165.37")
{
    echo "<div class='smalltext'>online</div>";
}
else if ($_SERVER['SERVER_ADDR'] == "::1")
{
    echo "<div class='smalltext'>localhost</div>";
}
?>