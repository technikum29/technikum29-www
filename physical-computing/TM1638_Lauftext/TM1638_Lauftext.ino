
// Mit diesem Sketch kannst du auf dem Modul LED & KEY einen Lauftext darstellen

#include <TM1638.h>

TM1638 Module(8, 9, 7);   //(DIO, CLK, STB)

void setup() {
}

const char nachricht[] = "        AES SUPER AG        ";  //8 Blank´s vor und hinter dem Text
int startIndex = 0;

void loop() 
{
  //bestimme Ausschnitt der Nachricht zum Anzeigen passend zum Module.
  
  Module.setDisplayToString(&nachricht[startIndex]);

  startIndex++;

  // Nachricht am Ende angekommen: Wieder von vorne anfangen.
  
  if (startIndex >= (sizeof(nachricht) - 8))
  {
    startIndex = 0;
  }

  delay(200);
}

