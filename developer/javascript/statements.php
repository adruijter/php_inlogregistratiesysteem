<style>
    #x, #y, #uitkomst {
        margin: 1em 0em 1em 0em;
        padding: 0.5em;
    }    
    select{
        margin: 1em 0em;
        display:block
    }
</style>


<h3>Statements</h3>

getal x: <input id='x' type='text' name='x' >

<select id='operator'>
    <option value='x'>x</option>
    <option value='/'>/</option>
    <option value='+'>+</option>
    <option value='-'>-</option>
</select>

getal y: <input id='y' type='text' name='y'>

<button id='btn'>bereken!</button><br><br>

uitkomst: <input id='result' type='text' name='y'>


<script>
    debugger;
    var btn = document.getElementById('btn');
    btn.addEventListener('click', function(){
        // Zet hier je code die na het drukken moet plaatsvinden.
        var x = document.getElementById('x');
        var y = document.getElementById('y');
        var z = document.getElementById('result');
        var operator = document.getElementById('operator');
       
        var choose = operator.options[operator.selectedIndex].text;
        
        
        var parseX = parseFloat(x.value);
        var parseY = parseFloat(y.value);
        
        var result
        if (choose == "x")
        {
            result = parseX * parseY;
        }
        else if( choose == "/")
        {
            result = parseX / parseY;
        }
        else if( choose == "+")
        {
            result = parseX + parseY;
        }
        else if( choose == "-")
        {
            result = parseX - parseY;
        } 
        
        z.value = result;
        
        //alert("De waarde van x is: " + result);        
    });
    
    
</script>