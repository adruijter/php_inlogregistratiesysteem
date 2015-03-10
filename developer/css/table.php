<?php
    require_once('classes/LoginClass.php');
    $query = "SELECT *
              FROM `login`";
    $result = LoginClass::find_by_sql($query);
    //var_dump($result);
?>
<h3>Geregistreerde gebruikers</h3>
<table id='login'>
    <tr>        
        <th>id</th>
        <th>e-mail</th>
        <th>rol</th>
        <th>geactiveerd</th>
    </tr>
    <?php
        foreach ($result as $value)
        {
            echo "<tr>
                    <td>".$value->getId()."</td>
                    <td>".$value->getEmail()."</td>
                    <td>".$value->getUserrole()."</td>
                    <td>".$value->getActivated()."</td>
                  </tr>";
        }
    ?>
</table>
