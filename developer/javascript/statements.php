



<h3>Statements</h3>

getal x: <input id='x' type='text' name='x'>
<select id='operator'>
    <option value='x'>x</option>
    <option value='/'>/</option>
    <option value='+'>+</option>
    <option value='-'>-</option>
</select>
<br><br>
getal y: <input id='y' type='text' name='y'>

<button id='btn'>bereken!</button><br><br>

uitkomst: <input id='uitkomst' type='text' name='y'  value='sdkfj'>
<script>
    var x = document.getElementById('x');
    var sign = document.getElementById('operator');
    var y = document.getElementById('y');
    var btn = document.getElementById('btn');
    btn.addEventListener('click', function(){
        var uitkomst = document.getElementById('uitkomst');
        var result = 0;
        alert(sign.options[sign.selectedIndex].text);
        if (sign.options[sign.selectedIndex].text == "/")
        {
            result = parseFloat(x.value) / parseFloat(y.value);
        }
        
        uitkomst.value = result;
         alert(parseInt(x.value) + parseInt(y.value));
    });
   

</script>