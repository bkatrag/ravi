function oe(meldung, url, zeile){
   var txt = "Es ist ein Fehler aufgetreten! Das macht aber nichts...\n\n";
   txt += "Meldung: " + meldung + "\n";
   txt += "URL: " + url + "\n";
   txt += "Zeile: " + zeile;
   if(txt.search("exit is not defined") == -1){
	alert(txt);
   }
   
   return true;
}
window.onerror = oe;
