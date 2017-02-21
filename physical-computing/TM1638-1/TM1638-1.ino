//TM 1638 LED & Key.  "Manuelles" Einlesen der Ziffern mit shiftOut, Library kommt später!

const int stb = 7;    // Strobe     // Datenübernahme in die Anzeige
const int clk = 9;    // Clock      // shiften einzelnr Bits ins Register
const int dio = 8;    // Data       // hier werden die Daten seriell geliefert


void setup() {

  pinMode(stb, OUTPUT);
  pinMode(clk, OUTPUT);
  pinMode(dio, OUTPUT);

  digitalWrite(stb, LOW);                    // Wenn stb (Strobe) von LOW auf HIGH geht, wird die Information übernommen
  
  shiftOut(dio, clk, LSBFIRST, 0b10001111);  //Command-Byte, mit dem 4. Bit kann man das Display an- bzw. ausschalten
 //for(int i=0; i<8; i++) {                  //mit den letzten 3 Bits wird die Helligkeit eingestellt. 1111=max. Helligkeit
    //delay(500);                            //danach kommen die zwei Datenbytes für eine einzelne Anzeige
    
    //                              gfedcba  Reihenfolge der Segmente, das niederwertigste Bit steht für Segment a
    shiftOut(dio, clk, LSBFIRST, 0b00000110); // mit dem ersten Bit (vorne) wird der DP gesetzt, ist alles Null, wird die Anzeige gelöscht
    shiftOut(dio, clk, LSBFIRST, 0b10000000); // mit dem letzten Bit wird die LED oben gesetzt. 
   
 // }
  
  digitalWrite(stb, HIGH);
}

void loop() {
  
}

/* Hier der Number-Font für Aufg. 1c von Blatt 6
 *  
 *  const byte NUMBER_FONT[] = {
  0b00111111, // 0
  0b00000110, // 1
  0b01011011, // 2
  0b01001111, // 3
  0b01100110, // 4
  0b01101101, // 5
  0b01111101, // 6
  0b00000111, // 7
  0b01111111, // 8
  0b01101111, // 9
  }
 */
