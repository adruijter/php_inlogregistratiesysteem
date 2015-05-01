<style>
    canvas
    {
        
        background-color: rgb(188, 188, 188);
        border: 3px solid rgb(239, 172, 50);
        //width: 640px;
        //height: 280px;        
    }

</style>

<h3>JS Game Introduction</h3>

<h4>Het canvas element</h4>
Hieronder staat een canvas element.
<canvas id='canv' tabindex="1">Dit is een canvas element</canvas>
<button id='button' onclick='vernieuwPagina();' >Klik mij</button>


<script>    
    document.onreadystatechange = function(){
         if(document.readyState === 'complete'){
            init();
         }
    }
    
    function vernieuwPagina()
    {
        document.location.reload();        
    }
    
    
    
    function init()
    {         
        var keyState = {};
        
        
        var cvs = document.getElementById('canv');
        cvs.addEventListener('keydown', doKeyDown, false);
        cvs.addEventListener('keyup', doKeyUp, false);
        cvs.addEventListener('mouseover', doGiveFocus, false);
        cvs.addEventListener('mouseout', doGiveBlur, false);
        
        function doKeyDown(e)
        {
            keyState[e.keyCode] = true;            
        }
        
        function doKeyUp(e)
        {
            keyState[e.keyCode] = false;
        }
            
        
        function doGiveFocus(e)
        {
            cvs.focus();
        }
        
        function doGiveBlur(e)
        {
            cvs.blur();
        }
        
        cvs.width = 640;
        cvs.height = 280;
        var ctx = cvs.getContext('2d'); 
        
        
        x = 100;
        //context.fillRect(200, 5, 20, 100);        
        function timer()
        {
            if (x < 620)
            {
                x = x + 1;             
                verhoog();
            }
            console.debug(x);
        }
        
        function verhoog()
        {
            if ( keyState[39])
            {
                x+=1;
            }
            
            else if ( keyState[37])
            {
                x-=1;
            }
            // Maak het canvas schoon
            ctx.clearRect(0, 0, 640, 280);
            
            
            ctx.fillStyle = 'rgb(89, 201, 154)';
            ctx.fillStroke = 'red';
            ctx.fillRect(5, 5, 20, 100);
            
            ctx.fillStyle = 'rgb(10, 10, 200)';
            ctx.fillRect(x, 5, 20, 100);
            
            ctx.strokeStyle = "blue";
            ctx.strokeRect(10,100, 100, 100);          
        }   
        setInterval(verhoog, 10);
    }   
</script>

<script>
    // werkt ook
   //document.onload = test();
   // document.addEventLister('load', test());
</script>
