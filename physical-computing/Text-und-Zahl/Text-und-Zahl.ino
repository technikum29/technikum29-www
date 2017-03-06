// Anzeige von Text (Display links) und Variable (Display rechts)

#include <TM1638.h>

TM1638 module(8, 9, 7);   // (DIO, CLK, STB)

void setup() {
                              // Einschalten und Helligkeit setzten
    module.setupDisplay(true, 7);
}

void loop() {
  unsigned long runningSecs = millis()/1000;  //millis ist eine interne Zeitbasis

  int variable = runningSecs; 
  
  char text[9];        // 8+1 fuer \0 am Ende vom String
  
  sprintf(text, "SECS %03d", variable); 
  
                      // % Formatierungsanweisung, 0 mit führenden Nullen
                      // 3 Stellen, d dezimale Darstellung
                      
  module.setDisplayToString(text); 
}
