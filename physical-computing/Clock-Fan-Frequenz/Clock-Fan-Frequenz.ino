
// Sketch zur Feststellung der Zahl der Umdrehungen pro Sekunde (=Frequenz) der LED-Clock-Fan

const int maxWert = 1;
bool istMax = false;
int startZeit;
int impulse = 0;                    // Zahl der Impulse pro Sekunde

void setup() {
  Serial.begin(9600);
  startZeit = millis();             // millis: eine Art Stoppuhr (in ms), die mit dem Start... 
  pinMode(2, INPUT);
}                                   //...des Programms auf 0 gesetzt wird



void loop() {
  int aktuellerWert = leseSensor();  // leseSensor ist als U-Programm ausgelagert (s.u.)

  if(aktuellerWert >= maxWert)
  {
    istMax = true;
  }

  if(aktuellerWert < maxWert && istMax)
  {
    istMax = false;
    impulse++;
  }

  int aktuelleZeit = millis();

  if(aktuelleZeit - startZeit > 1000)
  {
    Serial.println(impulse);
    impulse = 0;
    startZeit = millis();
  }
}


int leseSensor()                  // ausgelagertes Unterprogramm fuer das Auslesen des...
{                                 // ...Helligkeitssensors
  int wert = digitalRead(2);
  //Serial.println(wert);
  return wert;
}

