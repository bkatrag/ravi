<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>RaVi - Die Raumvisualisierung Projekt 1 - VI 2013 - 2014 - HWR-Berlin</title>
	<!-- Inkludierte Stylesheet-Dateien -->
<?php include "css/_includes" ?>	
	<!-- Inkludierte Javascript-Dateien -->
<?php include "js/_includes" ?>
</head>
<body> <!-- onLoad="rmrFrageStandorteAb()"><!--rmrFrageStandorteAb() -->
	<div id="header"></div>
	<div id="noheader">
		<div id="navigation">
			<!-- Start: Eingabeformular -->
			<form name="menu">   
				<!-- Start: Standort-, Haus-, Raum-Auswahl -->
				<table border="0">
					<tr>
						<td>Standort</td>
						<td><select id="standort" name="standort" style="width:225px;" size="1" onChange="rmrFrageHaeuserAb(this.form)" disabled>
								<option>Bitte warten</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Haus</td>
						<td>
							<select id="haus"name="haus" style="width:225px" size="1" onChange="rmrFrageRaeumeAb(this.form)" disabled>
								<option>Standort auswählen</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Raum</td>
						<td>
							<select id="raum" name="raum" style="width:225px" size="1" disabled>
								<option>Haus auswählen</option>
							</select>
						</td>
					</tr>
				</table>
				<!-- Ende: Standort-, Haus-, Raum-Auswahl -->
				
				<!-- Start: Datumsauswahl -->
				<p>Datum:&nbsp;&nbsp;&nbsp;			
					<!-- Tag auswählen -->
					<select id="Day">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>								
					</select>
		 
					<!-- Monat auswählen -->
					<select id="Month">
						<option value="1">Januar</option>
						<option value="2">Februar</option>
						<option value="3">März</option>
						<option value="4">April</option>
						<option value="5">Mai</option>
						<option value="6">Juni</option>
						<option value="7">Juli</option>
						<option value="8">August</option>
						<option value="9">September</option>
						<option value="10">Oktober</option>
						<option value="11">November</option>
						<option value="12">Dezember</option>
					</select>

					<!-- Jahr auswählen -->
					<select id= "Year">
						<option value="2008">2008</option>
						<option value="2009">2009</option>
						<option value="2010">2010</option>
						<option value="2011">2011</option>
						<option value="2012">2012</option>
						<option value="2013">2013</option>
					</select>
					<input type="hidden" id="datepicker"/>
				</p>		
				<!-- Ende: Datumsauswahl -->
				
				<!-- Start: Zeitraum -->
				<p> Zeitraum:</p>
				<p>
					<input type="radio" name="zeitraum" value="woche"> 7 Tage<br>
					<input type="radio" name="zeitraum" value="monat"> 4 Wochen<br>
					<input type="radio" name="zeitraum" value="semester"> 6 Monate (1 Semester)<br>
					<input type="radio" name="zeitraum" value="jahr"> 12 Monate<br>
				</p>
				<!-- Ende: Zeitraum -->	
				
				<!-- Start: Diagrammtyp-->
				<p>Diagrammtyp:</p>  
				<table>
					<tr>
						<td>	
							<span class="hover"><label for ="Dounut"><img src="./Bilder/logodounut.jpg" ><span class="infobox">&nbsp;Dounutdiagramm&nbsp; </span></span>
						</td>
						<td>	
							<span class="hover"><label for ="Balken"><img src="./Bilder/logobalken.jpg"><span class="infobox">&nbsp;Balkendiagramm&nbsp;</span></span>
						</td>
						<td>	
							<span class="hover"><label for ="Kreis"><img src="./Bilder/logokreis.jpg"><span class="infobox">&nbsp;Kreisdiagramm&nbsp;</span></span>
						</td>
						<td>	
							<span class="hover"><label for ="Linie"><img src="./Bilder/logolinie.jpg"><span class="infobox">&nbsp;Liniendiagramm&nbsp;</span></span>
						</td>
					</tr>
					<tr>
						<td style="text-align:center">
							<input  type="radio" id="Dounut"  name="Diagrammtyp" value="Dounut" > 
						</td>
						<td style="text-align:center">
							<input type="radio" id="Balken" name="Diagrammtyp" value="Balkendiagramm">  
						</td>
						<td style="text-align:center">
							 <input type="radio" id="Kreis" name="Diagrammtyp" value="Kreisdiagramm"> 
						</td>
						<td style="text-align:center">
							<input  type="radio" id="Linie" name="Diagrammtyp" value="Linie" > 
						</td>
					</tr>
				</table>
				</p>
				<!-- Ende: Diagrammtyp -->
				
				<input type="button" onClick="rd1FrageDatenAb()" value="anzeigen"/>
			</form>
		</div>				
		<div id="main">
			<div id="top">
				<div id="pfad"><b>HWR-Campus-Lichtenberg > Haus 6A > Raum 123</b></div>
				<div id="titel"><b><center>Raumbelegung</center></b></div>
			</div>
			<div id="grafik" style="height: 300px; width: 100%;">  </div>
			<div id="impressum"><center>&copy; Team-RaVi / Impressum</center></div>
		</div>
	</div>
</body>
</html> 