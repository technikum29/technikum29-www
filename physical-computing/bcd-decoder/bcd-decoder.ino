
 
// 7-Segment-Ziffernanzeige, aufgebaut mit Hilfe des CA3161E BCD-Decoders, Aufg. 2 Blatt 4

const int A=4;    // wir benoetigen 4 Ausgaenge fuer den Decoder (A=2^0 bis D=2^3)
const int B=5;    // diesen Ausgaengen werden die Pins 4,5,6,7 zugeordnet
const int C=6;
const int D=7;    

const int TASTE = 8;  // gedrueckt: LOW
 
void setup() {
  pinMode(TASTE, INPUT_PULLUP);   // erklaere, warum hier ein PULLUP notwendig ist 
  pinMode(A, OUTPUT); // 2^0     
  pinMode(B, OUTPUT);
  pinMode(C, OUTPUT);
  pinMode(D, OUTPUT); // 2^3

  Serial.begin(9600);       // Initialisieren des Seriellen Monitors
 
}
 
int count = 0;     // Zaehlvariable (= angezeigte Ziffer)
 
void loop() {
  if (digitalRead(TASTE) == LOW)   // Abfrage, ob die Taste gedrueckt ist
    {
    count++;                    // ausfuehrlich:  count=count + 1
    delay(300);           // erklaere, warum hier ein delay() stehen muss
    if (count == 10)      // wir wollen ja nur bis 9 zaehlen!
      count = 0;

/*{  alternativ mit C++ :
  Setzten der vier oberen PINs des Ports D und beibehalten der Zustaende der unteren vier PINs 
  PORTD = (count << 4) & 0xf0 | (PORTD & 0xf)  ;
  return ;  
  diese 2 Zeilen bewirken das Gleiche, wie der Rest unten. Sie sind aber "deaktiviert" 
  weil wir sie noch nicht verstehen! } 
  */

    if (count == 0) //write 0000   ab hier steht die Umsetzung des BCD Codes
    {
      digitalWrite(A, LOW);
      digitalWrite(B, LOW);
      digitalWrite(C, LOW);
      digitalWrite(D, LOW);
     
    }
     
    if (count == 1) //write 0001
    {
      digitalWrite(A, HIGH);
      digitalWrite(B, LOW);
      digitalWrite(C, LOW);
      digitalWrite(D, LOW);
     
    }
     
    if (count == 2) //write 0010
    {
      digitalWrite(A, LOW);
      digitalWrite(B, HIGH);
      digitalWrite(C, LOW);
      digitalWrite(D, LOW);
       
    }
     
    if (count == 3) //write 0011
    {
      digitalWrite(A, HIGH);
      digitalWrite(B, HIGH);
      digitalWrite(C, LOW);
      digitalWrite(D, LOW);
      
    }
     
    if (count == 4) //write 0100
    {
      digitalWrite(A, LOW);
      digitalWrite(B, LOW);
      digitalWrite(C, HIGH);
      digitalWrite(D, LOW);
    }

     //  den Rest kannst du sicher selbst machen  :-)
   
    } 
    
}
