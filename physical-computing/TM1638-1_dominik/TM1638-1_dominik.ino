

//TM 1638 LED & Key.  "Manuelles" Einlesen der Ziffern mit shiftOut, (von Dominik)

const int stb = 7;    // Strobe
const int clk = 9;    // Clock
const int dio = 8;    // Data

const byte NUMBER_FONT[] = { 
  0b00111111, // 0
  0b00000110, // 1
  0b01011011, // 2
  0b01001111, // 3
  0b01100110, // 4
  0b01101101, // 5
  0b01111101, // 6
  0b00000111, // 7
  0b01111111, // 8
  0b01101111  // 9
  };

void setup() {

  pinMode(stb, OUTPUT);
  pinMode(clk, OUTPUT);
  pinMode(dio, OUTPUT);

  digitalWrite(stb, LOW);
  
  shiftOut(dio, clk, LSBFIRST, 0b10001111); //Command-Byte (erstes Byte)

  clearLn();        // loeschen des Displays, ausgelagerte Methode
  
  printLn(7,0,0);   // Daten einlesen, ausgelagerte Methode, s.u.
  printLn(3,0,1);
  printLn(4,1,0);   // hier wird z.B. die Zahl 734.12 eingegeben und ueber der 3 sowie 1
  printLn(1,0,1);   // wird die LED eingeschaltet
  printLn(2,0,0);  
  
  digitalWrite(stb, HIGH);        //uebernimmt Daten aus dem Schieberegister zur Anzeige
}

void loop() {

}

void clearLn() {              // loescht das Display und die LEDs
  for(int i = 0;i<8;i++){
    shiftOut(dio, clk, LSBFIRST, 0b00000000);
    shiftOut(dio, clk, LSBFIRST, 0b10000000); 
  } 

}
  
void printLn(int number, int point, int led) {    // setzt Ziffer, Punkt und LED über der Ziffer
  byte byte2 = NUMBER_FONT[number];     // liest Byte der gewuenschten Nummer aus dem Array
  
  if (point==1){                        // setzt bei Bedarf das Bit für den Dezimalpunkt auf 1
    bitSet(byte2,7);  // hier wird im NUMBER-FONT das 8. Bit (Array-Index=7) gesetzt, falls an dieser
  }                   // Stelle ein Dezimalpunkt erscheinen soll
  
  shiftOut(dio, clk, LSBFIRST, byte2);   // gibt die Ziffer an das Modul(und evtl. den Punkt)
  if (led==1){                         
    shiftOut(dio, clk, LSBFIRST, 0b10000001);    // drittes Byte setzt die LED ueber der Ziffer AN oder AUS
  }else{
    shiftOut(dio, clk, LSBFIRST, 0b10000000);
  }
}


