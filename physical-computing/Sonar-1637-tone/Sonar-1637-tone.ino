// ---------------------------------------------------------------------------
// Ultraschall mit TM1637-Anzeige, 
// beachte: Bei Verwendung von "NewPing" und "tone()" kommt es zum Konflikt. 
// Daher wird hier "NewPing" nicht verwendet sondern unser selbst gebastelter Sketch
// ---------------------------------------------------------------------------

#include "SevenSegmentTM1637.h"  // inkludieren der Display-Library

int TRIGGER_PIN = 12;       // Pin-Definition
#define ECHO_PIN 11         // alternative Pin-Definition, benoetigt weniger Speicherplatz 

#define PIN_CLK  4   // wie oben 
#define PIN_DIO  5   // wie oben 

SevenSegmentTM1637    display(PIN_CLK, PIN_DIO);   // Einbinden des 4x7-Segment-Displays

void setup() {
  
  display.begin();            // initialisieren des Displays

  pinMode(TRIGGER_PIN, OUTPUT);
  pinMode(ECHO_PIN, INPUT);
  
}

void loop() {

 delay(100);
 noTone(8);                         // der Lautsprecher muss an Pin 8 angeschlossen werden
 
 digitalWrite(TRIGGER_PIN, LOW);    // Erzeugen des Triggerimpulses (Ultraschall)
 delayMicroseconds(10);            
 digitalWrite(TRIGGER_PIN, HIGH);
 delayMicroseconds(15);
 digitalWrite(TRIGGER_PIN, LOW);
 
 long zeit = pulseIn(ECHO_PIN, HIGH);  // misst die Impulsdauer, beginnend mit High bis Low in micro-Sekunden
 long d = zeit*0.0343/2;               // berechnet die Distanz (wurde besprochen!)
 display.clear();                      // alte Anzeige loeschen
 display.print(d);                     // aktuelle Distanz anzeigen
 
if (d>=60) {
  display.setBacklight(20);         // Display soll schwach leuchten (20)
  }
  
 if (d<60) {                     
  display.setBacklight(100);        // Display "volle Pulle" (100)
  tone(8,map(d,15,60,2000,150));    // die map-Anweisung berechnet die Frequenz (Tonhoehe)         
  
  if (d<15) {
     tone(8,800); delay(100); tone(8,400,100); display.blink();  // Intervall-Ton zuerst (Gefahr), dann das Blinken.
                                    // anstelle des Intervalltones kann man auch eine Ansage ueber das Ton-Modul erzeugen
  }    // drittes "if" Ende
}      // zweites "if" Ende               

}   // Loop Ende
