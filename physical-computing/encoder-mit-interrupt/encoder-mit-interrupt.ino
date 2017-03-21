/* 
 * Rotary-Encoder Sketch mit Interrupt 
 * beachte: Bei schnellem Drehen verlangsamt der Serielle-Monitor den Sketch!
 * Wenn die 7-Segment-Anzeige eingebaut ist, solltest du den SM deaktivieren.
 * Wenn du den Button (Switch) zum Rueckstellen ins Programm eingebaust, musst
 * du den INPUT mit "PULLUP" versehen! 
*/ 

#define encoderPinA  2       // "#define" ist eine einfache Methode, um Pins festzulegen
#define encoderPinB  3

volatile int encoderPos = 0;   // "volatile" (fluechtig), siehe Aufgabenstellung

void setup() { 
  
  pinMode(encoderPinA, INPUT); 
  pinMode(encoderPinB, INPUT); 
  
  attachInterrupt(0, doEncoder, CHANGE);      // Interrupt Nr. 0 aktivieren, beobachtet durch Pin 2
  Serial.begin (9600);
  Serial.println("Start des Programms");      // Beliebiger Text, wird einmal im SM angezeigt             
} 

void loop(){    
}

void doEncoder() {
  
  if (digitalRead(encoderPinA) == digitalRead(encoderPinB)) {
    encoderPos++;
  } else {
    encoderPos--;                 // Erklaerungen: Siehe Extra-Blatt
  }
  Serial.print("    ");
  Serial.println (encoderPos);
}

 

