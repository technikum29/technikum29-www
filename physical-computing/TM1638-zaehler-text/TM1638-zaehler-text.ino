//TM 1638 Zähler + anschließender Text

#include <TM1638.h>

const int stb = 7;   
const int clk = 9;
const int dio = 8;
TM1638 module(dio, clk, stb);    // definiert "module" mit data pin 8, clock pin 9 und strobe pin 7
int a=1;      // Variable des Zählers

void setup()
{       // in der Library werden diese Pins bereits als OUTPUT deklariert, daher steht hier nichts
}
 
void loop()
{
for (a=1; a<=100; a++)  // klassischer Zähler mit for-Schleife
{
/* "a" ist die Variable, deren Zahl dezimal angezeigt wird.
Mit 0b00000000 kann man das Komma setzen. Für z.B. 0b00000100 würde das Komma bei der 3. Ziffer gesetzt. 
Im 3. Term kann man führende Nullen (Vornullen) mit "true"=richtig setzen oder mit "false" ausblenden. */

module.setDisplayToDecNumber(a,0b00000000,false);  
delay(50);
}
module.setDisplayToString("SCHLUSS ");    // Textanzeige für 8 Zeichen
delay(3000);
}
