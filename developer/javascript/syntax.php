<h3>Syntax</h3>
<p>Javascript statements bestaan uit: Values, Operators, Expressions, Keywords en Comments</p>

<h4>Literals</h4>
<ul>
    <li>Voorbeelden van literals zijn integer Literals: 5
dat zijn dus gewoon gehele getallen
    </li>
    <li>Voorbeelden van literals zijn floating number Literals: 10.345 dat zijn dus gewoon komma getallen
    </li>
    <li>Voorbeelden van string literals zijn: "Peer", 'bessen' 
dat zijn dus 
    </li>
    </li>
    <li>Voorbeelden van boolean literals zijn: true, false 
dat zijn dus 
    </li>
</ul>
<h4>Variables</h4>
<script>
    var x = 0;
    x+= 2
    document.write("0 + 2 = " + x);
</script>
<h4>Operators</h4>
<script>
    var x = 8, y = 4;
    
    document.write(x + " + " + y + " = " + (x + y) + "<br>");
    document.write(x + " - " + y + " = " + (x - y) + "<br>");
    document.write(x + " * " + y + " = " + (x * y) + "<br>");
    document.write(x + " / " + y + " = " + (x / y) + "<br>");
    document.write(x + " % " + y + " = " + (x % y));
</script>
<h4>Comments</h4>
Net als bij PHP kun je bij JavaScript tekst uitcommentarieren met
<ul>
    <li>// Voor een regel code</li>
    <li>/* Voor meerdere regels code */</li>
</ul>




<h4>JavaScript is case-sensitive</h4>
<script>
    vloeistof = "Water"; 
    function laatZien(obj)
    {
        obj.innerHTML = "Dubbel klik op mij!";
        document.getElementById('showtext').innerHTML = "De variabele vloeistof heeft nu de waarde: " + vloeistof;
    }
    
    function verdwijn(obj)
    {
        obj.innerHTML = "Klik op mij!"
        document.getElementById('showtext').innerHTML = "";
    }
    
    function aanmoediging(obj)
    {
        if ( obj.innerHTML == 'Klik op mij!')
        obj.innerHTML = "Ja, klik maar!";
        else
        obj.innerHTML = "Ja, dubbel klik maar!"
    }
    
    function oudetekstterugzetten(obj)
    {
        //alert(obj.innerHTML);
        if ( obj.innerHTML == 'Ja, klik maar!')
        {
            obj.innerHTML = "Klik op mij!";
        }        
        else if ( obj.innerHTML == 'Ja, dubbel klik maar!')
        {
            obj.innerHTML = "Dubbel klik op mij!"
        }
        
    }
    
    function veranderkleur(obj)
    {
        obj.style.backgroundColor = '#b4afaf';
    }
    
    function veranderkleurterug(obj)
    {
        obj.style.backgroundColor = 'rgb(231, 231, 231)';
    }
</script>

<p id='showtext'></p>
<button onclick='laatZien(this);'
        ondblclick='verdwijn(this);'
        onmouseenter='aanmoediging(this);'
        onmouseleave='oudetekstterugzetten(this)'
        onmousedown='veranderkleur(this);'
        onmouseup='veranderkleurterug(this)'>Klik op mij!</button>




