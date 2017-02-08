
window.onload = function()
{
    window.document.getElementsByTagName('button')[0].addEventListener("click", teste, false);
    window.document.getElementsByTagName('button')[1].onclick = somar;
    window.document.getElementsByTagName('button')[2].onclick = function(){ idade();};
    window.document.getElementsByTagName('button')[3].onclick = function(){ switchCase();};
    window.document.getElementsByTagName('button')[4].onclick = function(){ tabuada();};
   
    window.document.getElementsByTagName('button')[5].onclick = function(){ getFrutas(); };
    
    window.document.getElementsByTagName('button')[7].onclick = function(){ initialize(); };
    
   
}

// Exemplo 1
function teste()
{
    var teste = window.confirm("Ok. para UOL. CANCEL para Terra");

    if(teste)
    {
        window.open("http://www.uol.com.br");
    }	

    else
    {
        window.open("http://www.terra.com.br");
    }
}

// Exmplo 2
function somar()
{
    var a, b;
    a = 3; b = 2;
    
    //document.write(a + b);
    document.getElementsByTagName("p")[0].innerHTML = (a + b);
    window.alert(a + b + 1);
}



// Exemplo 3
function idade()
{
    var x = new String ("Digite sua idade ?");
    //var idade = window.prompt(x.italics());
    alert(x.italics());
    
    if(idade < 18)
    {
        window.open("http://www.w3schools.com/");
    }
    else
    { 
       window.alert("Ops! Proibido");   
    }
  }


// Exemplo 4
function switchCase()
{
    window.alert("Digite uma das cores( red, yellow, green)");
    var cor = window.prompt("Digite o nome da cor");
    
    switch (cor)
    {
        case "red":
            //alert("Pare");
             document.getElementsByTagName("p")[0].innerHTML = "(red) = Pare ";
            
            break;
        case "yellow":
            //alert("atenção")
             document.getElementsByTagName("p")[0].innerHTML = "(yellow) = Atenção ";
            break;
        case "green":
            //alert("prossiga");
            document.getElementsByTagName("p")[0].innerHTML = "(green) = Prossiga ";
            break;
        default:  
            alert("cor igual");
    }
}


// Exemplo 5
function tabuada()
{
    /*
    var divP = document.querySelectorAll("div p").length;
    alert(divP);
    */
   
    //var divP = document.getElementById("divP");
    //divP.children.length;
   
    
    
    var tab = window.prompt("Digite a tabuada");
    
    var div = document.getElementsByTagName('div')[0];
    var p = div.getElementsByTagName('p');
    var i = 0;
    
    //for (i = 0; i < p.length; i++) 
    while(i <= p.length)
    {
       // document.write(tab + " x " + i + " = " + (tab * i) + " <br>");
        
        p[i].innerHTML =  tab + " x " + i + " = " + (tab * i) + " <br>";
        p[i].style.backgroundColor = "#ccc";
        p[i].style.width = "100px";
        p[i].style.margin = "10px 5px";
        p[i].style.textAlign =" center";
        
        i++;  // se usar for anular i++
    }
}



function getFrutas()
{
    var frutas = new Array();
    frutas[0] = "uva";
    frutas[1] = "Pera";
    frutas[2] = "uva";
    frutas[3] = "laranja";
   
    var ul = document.getElementsByTagName("ul")[0];
    var li = ul.getElementsByTagName("li");
    //alert(li.length);
    var  i = 0;
    
   while(i <= frutas.length)
   {
      li[i].innerHTML = frutas[i];
      
      i++ ;
   }
    
}


// ---------------------MAPA DO GOOGLE ----------------------------------------//
var google;
var map;
var london = new google.maps.LatLng(-21.170511, -47.8102452);

// Add a Home control that returns the user to London
function HomeControl(controlDiv, map) {
  controlDiv.style.padding = '5px';
  var controlUI = document.createElement('div');
  controlUI.style.backgroundColor = 'yellow';
  controlUI.style.border='1px solid';
  controlUI.style.cursor = 'pointer';
  controlUI.style.textAlign = 'center';
  controlUI.title = 'Set map to London';
  controlDiv.appendChild(controlUI);
  var controlText = document.createElement('div');
  controlText.style.fontFamily='Arial,sans-serif';
  controlText.style.fontSize='12px';
  controlText.style.paddingLeft = '4px';
  controlText.style.paddingRight = '4px';
  controlText.innerHTML = '<b>Home<b>'
  controlUI.appendChild(controlText);

  // Setup click-event listener: simply set the map to London
  google.maps.event.addDomListener(controlUI, 'click', function() {
    map.setCenter(london)
  });
}

function initialize() {
  var mapDiv = document.getElementById('googleMap');
  var myOptions = {
    zoom: 12,
    center: london,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  map = new google.maps.Map(mapDiv, myOptions); 
  // Create a DIV to hold the control and call HomeControl()
  var homeControlDiv = document.createElement('div');
  var homeControl = new HomeControl(homeControlDiv, map);
//  homeControlDiv.index = 1;
  map.controls[google.maps.ControlPosition.TOP_RIGHT].push(homeControlDiv);
}

//google.maps.event.addDomListener(window, 'load', initialize);



// ---------------------MAPA DO GOOGLE ----------------------------------------//








function createButton()
{
    var bt   = document.createElement("button");
    var txt = document.createTextNode("wagner");
   bt.appendChild(txt);
    document.body.appendChild(bt);   
    
    bt.style.border;
}



