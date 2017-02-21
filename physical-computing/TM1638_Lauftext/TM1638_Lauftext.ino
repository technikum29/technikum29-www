
// Sketch "laufender Text" auf TM1638 (LED & Key)

#include <TM1638.h>

TM1638  aktuellesModule(8, 9, 7);

const char nachricht[] = "       AES SUPER AG        ";
int base = 0;

void setup() {
}

void loop() 
{
  //bestimme Ausschnitt der Nachricht zum Anzeigen passend zum module.
  const char* pos = nachricht + base;

  if ( (pos >= nachricht) && ((pos + 8) < (nachricht + sizeof(nachricht)))) {
    aktuellesModule.setDisplayToString(pos);
  } else {
    aktuellesModule.clearDisplay();
  }

  base++;

  //Wenn das Ende der Nachricht erreicht ist, wieder von vorne anfangen.
  if (base == sizeof(nachricht) - 8) {
    base = -8;
  }

  delay(200);
}

/* Kurzinfo: "sizeof" kann den Speicherbedarf von Variablen bzw.Datentypen ermitteln
 *  "char" hat ähnliche Bedeutung wie int, byte usw. Um z.B. Buchstaben zu speichern 
 *  benötigt man den Variablentyp char.
 */
