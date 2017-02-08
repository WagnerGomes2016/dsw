<!DOCTYPE html >
<html  lang="pt-br">
<head>
<title>Cadastro</title>
<meta charset="UTF-8">

<link rel="stylesheet" href="css/teste javascript.css" />
<script language="javascript" src="js/teste javascript.js"> </script>

<script src="http://maps.googleapis.com/maps/api/js"> </script>

<script>

var map;
var london = new google.maps.LatLng(51.508742,-0.120850);

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

google.maps.event.addDomListener(window, 'load', initialize);




</script>
</head>
<body >
    
    <fieldset> 
       <legend> PAINEL DE FUNCOES </legend>
       <table border="0"> 
            <tr>	
                <td><button> teste()        </button> </td>
                <td><button> soma()         </button></td>
                <td><button> idade()        </button> </td>
                <td><button> switchCase()   </button></td>
                <td><button> tabuada        </button></td>
                <td><button> EXEMP 6        </button></td>
                <td><button> mostrarFrutas       </button></td>
                 <td><button> MapaGoogle()      </button></td>
            </tr>	
	</table> 
    </fieldset>
   
    
    <div >    
        <p> </p>
        <p> </p>
        <p> </p>
        <p> </p
        <p> </p>
        <p> </p>
        <p> </p>
        <p> </p>
        <p> </p>
        <p> </p>
    </div>
    
    <ul>
        <li> </li>
        <li> </li>
        <li> </li>
        <li> </li>
    </ul>
    
    <div id="googleMap" style="width:500px;height:380px;"></div>
    
    
</body>
</html>
