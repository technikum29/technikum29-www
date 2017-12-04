// Blatt 5, Aufgabe 3 mit Zusatz und Erweiterung:
// Einstellbare Zahl der abgespielten Toene in einem Zyklus

int Dauer=200;           // Dauer fuer einen Ton in ms, Start mit 200ms
int Zahl = 0;            // Zaehler fuer die Zahl der abgespielten Toene
int maxZahl = 250;       // maximale Zahl der abgespielten Toene

void setup() {
}

void loop() {
 
  int frequenz = random(100, 2000);   // Frequenzbereich von 100 bis 2000 Hz
  tone(8, frequenz);
  delay(Dauer);
  //Dauer=Dauer-0.4;        // alternativ: 
  Dauer=Dauer*0.996;        // Vorsicht! Kein Komma verwenden!
  Zahl++;                   // Zaehler hochzaehlen
  if(Zahl>maxZahl){
    noTone(8);              // Ton abschalten
    while(1);               // das Programm laeuft in eine Dauerschleife
    }
}
