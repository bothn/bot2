<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>NOC | Celdas OOS</title>



	<style type="text/css">
body{
background:url(header-bkg-plus.png) repeat-x top left #eff3ff;
}
table {
  border-collapse: collapse;
  border: 1px solid #3668B1;
  font: normal 11px verdana, arial, helvetica, sans-serif;
  color: #363636;
  background: #92C428;
  }
caption {
  text-align: center;
  font: bold 16px arial, helvetica, sans-serif;
  background: transparent;
  padding:6px 4px 8px 0px;
  color: #3668B1;
  text-transform: uppercase;
  }
td, th {
  border: 1px dotted #3668B1;
  padding: .4em;
  color: #363636;
  }

thead th, tfoot th {
  font: bold 11px verdana, arial, helvetica, sans-serif;
  border: 1px solid #03476F;;
  text-align: left;
  background: #3668B1;
  color: #FFFFFF;
  padding-top:3px;
  }
tbody td a {
  background: transparent;
  text-decoration: none;
  color: #363636;
  }
tbody td a:hover {
  background: #E6E6FF;
  color: #363636;
  }
tbody th a {
  font: normal 10px verdana, arial, helvetica, sans-serif;
  background: transparent;
  text-decoration: none;
  font-weight:normal;
  color: #363636;
  }
tbody th a:hover {
  background: transparent;
  color: #363636;
  }
tbody th, tbody td {
  vertical-align: top;
  text-align: left;
  }
tfoot td {
  border: 1px solid #03476F;
  background: #4591AD;
  padding-top:3px;
  color: #FFFFFF;
  }
.odd {
  background: #E6E6FF;
  }
tbody tr:hover {
  background: #FFD800;
  border: 1px solid #03476F;
  color: #3668B1;
  }
tbody tr:hover th,
tbody tr.odd:hover th {
  background: #FFD800;
  color: #200000;
  }

.centrar-imagen {
text-align: left;
}

#fondo1{
   background-image: url(corridas.png);
   width: 193px;
   height: 80px;
}

#caja {
width: 400px; /*ANCHO TOTAL DE LA CAJA*/
color: #FFFFFF; /*COLOR DEL TEXTO*/
}

.redondeado {
height: 1px;
overflow: hidden;
background-color: #3469B2; /* COLOR DE LA CAJA */
}

/* LAS LINEAS PARA FORMAR LA PARTE REDONDEADA */
.r1 { margin: 0 12px;}
.r2 { margin: 0 9px;}
.r3 { margin: 0 7px;}
.r4 { margin: 0 6px;}
.r5 { margin: 0 5px;}
.r6 { margin: 0 4px;}
.r7 { margin: 0 3px;}
.r8 { margin: 0 2px; height: 2px;}
.r9 { margin: 0 1px; height: 3px; }

.contenido {
height: auto;
padding: 0 15px;
}


</style>



 

    var iconYellow = new GIcon(); 
    iconYellow.image = 'http://labs.google.com/ridefinder/images/mm_20_yellow.png';
    iconYellow.shadow = 'http://labs.google.com/ridefinder/images/mm_20_shadow.png';
    iconYellow.iconSize = new GSize(12, 20);
    iconYellow.shadowSize = new GSize(22, 20);
    iconYellow.iconAnchor = new GPoint(6, 20);
    iconYellow.infoWindowAnchor = new GPoint(5, 1);

    var iconRed = new GIcon(); 
    iconRed.image = 'http://labs.google.com/ridefinder/images/mm_20_red.png';
    iconRed.shadow = 'http://labs.google.com/ridefinder/images/mm_20_shadow.png';
    iconRed.iconSize = new GSize(12, 20);
    iconRed.shadowSize = new GSize(22, 20);
    iconRed.iconAnchor = new GPoint(6, 20);
    iconRed.infoWindowAnchor = new GPoint(5, 1);
	
	var iconOrange = new GIcon(); 
    iconOrange.image = 'http://labs.google.com/ridefinder/images/mm_20_orange.png';
    iconOrange.shadow = 'http://labs.google.com/ridefinder/images/mm_20_shadow.png';
    iconOrange.iconSize = new GSize(12, 20);
    iconOrange.shadowSize = new GSize(22, 20);
    iconOrange.iconAnchor = new GPoint(6, 20);
    iconOrange.infoWindowAnchor = new GPoint(5, 1);
	
	var iconGray = new GIcon(); 
    iconGray.image = 'http://labs.google.com/ridefinder/images/mm_20_gray.png';
    iconGray.shadow = 'http://labs.google.com/ridefinder/images/mm_20_shadow.png';
    iconGray.iconSize = new GSize(12, 20);
    iconGray.shadowSize = new GSize(22, 20);
    iconGray.iconAnchor = new GPoint(6, 20);
    iconGray.infoWindowAnchor = new GPoint(5, 1);

    var customIcons = [];
    customIcons["3G"] = iconYellow;
    customIcons["2G"] = iconRed;
	customIcons["4G"] = iconOrange;
	customIcons["HALTED"] = iconGray;
	customIcons["3G - HALTED"] = iconGray;
	customIcons["2G - HALTED"] = iconGray;
	customIcons["LTE - HALTED"] = iconGray;
	

    function load() {
      if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("map"));
        map.addControl(new GSmallMapControl());
		map.addControl(new GMapTypeControl());
        map.setCenter(new GLatLng(14.80344, -86.19706), 8);
		map.setMapType(G_SATELLITE_MAP);
				

        // Change this depending on the name of your PHP file
        GDownloadUrl("phpsqlajax_genxml3.php", function(data) {
          var xml = GXml.parse(data);
          var markers = xml.documentElement.getElementsByTagName("marker");
          for (var i = 0; i < markers.length; i++) {
            var name = markers[i].getAttribute("name");
            var address = markers[i].getAttribute("address");
            var type = markers[i].getAttribute("type");
		var alarma = markers[i].getAttribute("alarma");
	 	var hora_oos = markers[i].getAttribute("hora_oos");
		var tiempo = markers[i].getAttribute("tiempo");
		var avance = markers[i].getAttribute("avance");


            var point = new GLatLng(parseFloat(markers[i].getAttribute("lat")),
                                    parseFloat(markers[i].getAttribute("lng")));
            var marker = createMarker(point, name, address, type, alarma, hora_oos, tiempo, avance);
            map.addOverlay(marker);
          }
        });
      }
    }

    function createMarker(point, name, address, type, alarma, hora_oos, tiempo, avance) {
      var marker = new GMarker(point, customIcons[type]);
      var html = "<div style=' font-size: 8pt; font-family: arial' <b>" + name + "</b> <br/>" + address+"<br/> <b>Alarma:</b> "+alarma+"<br/> <b>Hora OOS:</b> "+hora_oos+"<br/><b>Tiempo OOS: </b>"+tiempo+"<br/><b>Ultimo Avance: </b>"+avance+"</div>";
      GEvent.addListener(marker, 'click', function() {
        marker.openInfoWindowHtml(html);
      });
      return marker;
    }
    //]]>
  </script>


<meta http-equiv="refresh" content="420" />


  </head>
  <div class="centrar-imagen"><img src="logo_sox.png"></div>

  <body onload="load()" onunload="GUnload()">
<table width="230" border="0" align="center">

    <div id="map" style="width: 1200px; height: 650px"></div>






<BR>

<?php


	$conn_server_ticket=mysql_connect("sql300.epizy.com","epiz_32418681","7sz0r5nk");
	mysql_select_db("epiz_32418681_cehn",$conn_server_ticket);

	
			$total=0;
			$QUERY_CANTIDAD=mysql_query("SELECT count(*) as total FROM markers WHERE alarma <> 'CELDA EN ESTADO HALTED' and ne_sitename!='' ORDER BY ne_sitename" ,$conn_server_ticket);
			$ID_CANTIDAD_ROW=mysql_fetch_assoc($QUERY_CANTIDAD);
			$total = $ID_CANTIDAD_ROW['total'];
	

	if($total==0)
	{
		echo "<BR><BR><B>NOTA</B>: En estos momentos no hay celdas fuera de servicio";
	}else
	{
	
	$TT_QUERY_ABIERTOS = "SELECT type,alarma, name, address,hora_oos, timediff(NOW() ,hora_oos) as tiempo,avance,lat,lng, tt FROM markers WHERE alarma <> 'CELDA EN ESTADO HALTED' and name!='' GROUP BY name ORDER BY name ASC, alarma DESC";
	$TT_QUERY_RESULT_ABIERTOS = mysql_query ($TT_QUERY_ABIERTOS, $conn_server_ticket);
	$TT_ROW_QUERY_RESULT_ABIERTOS  = mysql_fetch_assoc($TT_QUERY_RESULT_ABIERTOS);
$cont=1;

   	?>


		<div id="itsthetable" align="center">
		<table summary="Submitted table designs">
			<thead>
				<tr>
					<th scope="col">No.</th>
					<th scope="col">TIPO</th>
					<th scope="col">ALARMA</th>
					<th scope="col">ID</th>
					<th scope="col">CELDA</th>
					
					
					<th scope="col">HORA OOS</th>
					<th scope="col">TIEMPO OOS</th>
					<th scope="col">ULTIMO AVANCE</th>
					<th scope="col">TICKET</th>
					
				</tr>
			</thead>

			<tbody>
   <?php DO { ?>

				<tr class="odd">
					<td><?php echo $cont ?></td>

				<?php
					$tipo=$TT_ROW_QUERY_RESULT_ABIERTOS['type'];
						
					
						if ( $tipo=="2G")
						{
					          ?>
							<td bgcolor="#FF0000"><?php echo $TT_ROW_QUERY_RESULT_ABIERTOS['type'] ?> </td>
						  <?php
						} 
 
						if ( $tipo=="3G")
						{
					          ?>
							<td bgcolor="#FFFF00"><?php echo $TT_ROW_QUERY_RESULT_ABIERTOS['type'] ?> </td>
						  <?php
						} 
						
						if ( $tipo=="4G")
						{
					          ?>
							<td bgcolor="#FF9900"><?php echo $TT_ROW_QUERY_RESULT_ABIERTOS['type'] ?> </td>
						  <?php
						} 
						
						if ( $tipo=="HALTED")
						{
					          ?>
							<td bgcolor="#C4C4C4"><?php echo $TT_ROW_QUERY_RESULT_ABIERTOS['type'] ?> </td>
						  <?php
						} 
						if ( $tipo=="3G - HALTED")
						{
					          ?>
							<td bgcolor="#C4C4C4"><?php echo $TT_ROW_QUERY_RESULT_ABIERTOS['type'] ?> </td>
						  <?php
						} 
						if ( $tipo=="2G - HALTED")
						{
					          ?>
							<td bgcolor="#C4C4C4"><?php echo $TT_ROW_QUERY_RESULT_ABIERTOS['type'] ?> </td>
						  <?php
						} 
						if ( $tipo=="LTE - HALTED")
						{
					          ?>
							<td bgcolor="#C4C4C4"><?php echo $TT_ROW_QUERY_RESULT_ABIERTOS['type'] ?> </td>
						  <?php
						} 
					?>


					<td><?php echo $TT_ROW_QUERY_RESULT_ABIERTOS['alarma'] ?></td>
                   <th scope="row"><?php echo $TT_ROW_QUERY_RESULT_ABIERTOS['name'] ?></th>
					<td><?php echo $TT_ROW_QUERY_RESULT_ABIERTOS['address'] ?></td>
					
					
					<td><?php echo $TT_ROW_QUERY_RESULT_ABIERTOS['hora_oos'] ?></td>
					<td><?php echo $TT_ROW_QUERY_RESULT_ABIERTOS['tiempo'] ?></td>
					<td><?php echo utf8_decode($TT_ROW_QUERY_RESULT_ABIERTOS['avance']) ?></td>
					<td><?php echo $TT_ROW_QUERY_RESULT_ABIERTOS['tt'] ?></td>



				</tr>
<?php $cont=$cont+1; ?>
   <?php } WHILE ($TT_ROW_QUERY_RESULT_ABIERTOS=mysql_fetch_assoc($TT_QUERY_RESULT_ABIERTOS)); ?> 
			</tbody>
		</table>

	




</table>

<?php
}
?>

  </body>

<BR>
      


</div>


<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>


</html>
