
// Ultraschall-Sensor HC-SR04, einfachster Sketch, Anzeige im seriellen Monitor.

const int Trig = 12;
const int Echo = 11;
long zeit, distanz;         // Deklaration der benoetigten Variablen als "long"

void setup() {
  Serial.begin(9600);
  pinMode(Trig, OUTPUT);
  pinMode(Echo, INPUT);
}

void loop() {
 
 digitalWrite(Trig, LOW);        // Erzeugen des Triggerimpulses (5 Zeilen)
 delayMicroseconds(5);           
 digitalWrite(Trig, HIGH);
 delayMicroseconds(10);
 digitalWrite(Trig, LOW);
                                 // beachte: "Echo" ist nicht die Laenge des Echo-Impulses! Sondern......
 zeit = pulseIn(Echo, HIGH);     // misst die Impulsdauer, beginnend mit High bis Low in Mikrosekunden
 
 distanz = zeit*0.0343/2;        // Berechnung der Distanz aus der Signal-Laufzeit

 Serial.print(distanz);
 Serial.println("  cm");
 delay(200);                     // Zeit zwischen zwei Messungen
}

 

