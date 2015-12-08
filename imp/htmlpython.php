
	<html>
  <body style="background-image: url(red.jpg)">
    <div id = "formatobody">
      <strong>
        <table width="195" border="0">
    	<tr>
      	<th width="67" scope="row"><a href="index.php" title="Ir a Inicio"><img src = "Raspi_Colour_R.PNG" alt="gg" width="67" height="57" style=" margin-left:auto; margin-right:auto; display:block; " align="top"/></a></th>
      	<td width="112" style="font-family:MankSans; color:#D9D9D9;">Servidor de Impresion Rasperry</td>
    	</tr>
  		</table>
        <form enctype="multipart/form-data" method="post">
        <p style="font-size:30px; font-family:MankSans; color:#D9D9D9">Centro de Impresion</p>
        <p style="font-family:MankSans; color:#D9D9D9">Archivo: 
        <input name="file" type="file" style="font-family:MankSans; color:#D9D9D9">
        </p>
        <p style="font-family:MankSans; color:#D9D9D9">Imprimir en: </p>
	    <p style="font-family:MankSans; color:#D9D9D9;">
        <input type="radio" name="selcolor" value="COLOR" > Color <br>
        <input type="radio" name="selcolor" value="MONO"  checked> Blanco y negro <br>
        </p>
        <p style="font-family:MankSans; color:#D9D9D9">
        Seleccione la calidad de la impresion:
        <select name="Quality" style="font-family:MankSans; color:#000">
        <option value="PLAIN_DRAFT"  selected>Borrador (se ve bien)</option>
        <option value="PLAIN_NORMAL">Normal</option>
        <option value="PLAIN_HIGH">Alta</option>
        <option value="PMPHOTO_DRAFT">Borrador foto</option>
        <option value="PMPHOTO_NORMAL">Normal foto</option>
        <option value="PMPHOTO_HIGH">Alta foto</option>
        </select>
        </p>
        <p style="font-family:MankSans; color:#D9D9D9">
        Seleccione las paginas a imprimir:
        <select name="selpages" style="font-family:MankSans; color:#000">
        <option value="all" selected>Todas</option>
        <option value="odd">Impares</option>
        <option value="even">Pares</option>
        </select>
        </p>
        <p style="font-family:MankSans; color:#D9D9D9">    
          <input type="submit" class="button2" value="Subir"></p>
        </form>
        </strong>
      </div>
        </body>
        <style type="text/css">
		@import url("MankSans/stylesheet.css");
		
		   .button2 {
   border-top: 1px solid #ff03d1;
   background: #ff0073;
   background: -webkit-gradient(linear, left top, left bottom, from(#f71b90), to(#ff0073));
   background: -webkit-linear-gradient(top, #f71b90, #ff0073);
   background: -moz-linear-gradient(top, #f71b90, #ff0073);
   background: -ms-linear-gradient(top, #f71b90, #ff0073);
   background: -o-linear-gradient(top, #f71b90, #ff0073);
   padding: 9.5px 19px;
   -webkit-border-radius: 40px;
   -moz-border-radius: 40px;
   border-radius: 40px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: white;
   font-size: 19px;
   font-family: MankSans;
   text-decoration: none;
   vertical-align: middle;
   }

   #formatobody{
    
    position: relative;
    top:200px;
    right:-660px;
    display: block;  
    margin: auto;
   }
.button2:hover {
   border-top-color: #a6336b;
   background: #a6336b;
   color: #6b6b6b;
   }
.button2:active {
   border-top-color: #ff0048;
   background: #ff0048;
   }
  body
  {
   text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;

  }
        </html>

