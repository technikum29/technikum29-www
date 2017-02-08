#include "SevenSegmentTM1637.h"

// Ultraschall-Sensor HC-SR04 mit 7-Segment-Anzeige, Lern-Sketch mit einigen korrigierten Fehlern


const int Trig = 12;
const int Echo = 11;
  // long zeit, distanz;   "Fehler 1":  Diese Deklaration sollte nicht im "Global-Bereich" stehen, s.u.
const byte PIN_CLK = 4;   
const byte PIN_DIO = 5;
SevenSegmentTM1637   display(PIN_CLK, PIN_DIO);  //Hier wird der Datentyp "SevenSegmentTM1637" mit dem Variablennamen "display" installiert

void setup() {
  display.begin();
 // Serial.begin(9600);    Fehler 4: Seriellen Monitor deaktivieren, der frisst Zeit, das fuehrt zum Flackern der Anzeige
  pinMode(Trig, OUTPUT);
  pinMode(Echo, INPUT);
}

void loop() {
  
 long zeit, distanz;  //Variable sollte man moeglichst nahe am "Gebrauchsort" deklarieren (hier im LOOP) und nicht global        
 digitalWrite(Trig, LOW);   // Trigger-Generierung (5 Zeilen)
 delayMicroseconds(5);            
 digitalWrite(Trig, HIGH);
 delayMicroseconds(10);
 digitalWrite(Trig, LOW);
 
 zeit = pulseIn(Echo, HIGH);  
  distanz = zeit*0.0343/2; 
  
  display.clear();              // Fehler 3: Vor der Neuanzeige Display loeschen!
  display.print(distanz);       // Fehler 2; Es soll immer angezeigt werden! Also gehoert es hierhin.
  delay(300);                   // Messwiederholung nicht zu kurz waehlen (unruhige Anzeige)
 display.setBacklight(10); 
 //Serial.print(distanz);       // s.o.
 //Serial.println("  cm");
  
  if (distanz<60)
  {
  display.setBacklight(100);  
  //distanz = zeit*0.0343/2;     Fehler 2: Das gehoert nicht in die if-Abfrage!   
  //display.print(distanz);  
  }
 
  if (distanz<15){
  display.blink();
  }               
}

 

