
 
//Declaration of Arduino pins used as CA3161E (BCD-Decoder) inputs

const int A=4;    // wir ordnen der Variablen A die Zahl 4 zu
const int B=5;    // wir koennten auch ueberall fuer A,B,C,D die Zahlen 4,5,6,7 verwenden
const int C=6;
const int D=7;    

const int TASTE = 8;  // gedrueckt: LOW
 
void setup() {
  pinMode(TASTE, INPUT_PULLUP);
  pinMode(A, OUTPUT); // 2^0     
  pinMode(B, OUTPUT);
  pinMode(C, OUTPUT);
  pinMode(D, OUTPUT); // 2^3

  Serial.begin(9600);
 
}
 
int count = 0;     //the variable used to show the number
 
void loop() {
  if (digitalRead(TASTE) == LOW)   //if button is pressed
    {
    count++;                    // ausfuehrlich:  c=c+1
    delay(500);           //the delay prevent from button bouncing
    if (count == 10)      //we want to count from 0 to 9!
      count = 0;

/*{  alternativ mit C++ :
  Setzten der vier oberen PINs des Ports D und beibehalten der Zustände der unteren vier PINs 
  PORTD = (count << 4) & 0xf0 | (PORTD & 0xf)  ;
  return ;  //diese 2 Zeilen bewirken das Gleiche, wie der Rest unten. Sie sind aber "deaktiviert" 
            //weil wir sie noch nicht verstehen! } 
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
     
    if (count == 5) //write 0101
    {
      digitalWrite(A, HIGH);
      digitalWrite(B, LOW);
      digitalWrite(C, HIGH);
      digitalWrite(D, LOW);
    }
     
    if (count == 6) //write 0110
    {
      digitalWrite(A, LOW);
      digitalWrite(B, HIGH);
      digitalWrite(C, HIGH);
      digitalWrite(D, LOW);
    }
     
    if (count == 7) //write 0111
    {
      digitalWrite(A, HIGH);
      digitalWrite(B, HIGH);
      digitalWrite(C, HIGH);
      digitalWrite(D, LOW);
    }
     
    if (count == 8) //write 1000
    {
      digitalWrite(A, LOW);
      digitalWrite(B, LOW);
      digitalWrite(C, LOW);
      digitalWrite(D, HIGH);
    }
     
    if (count == 9) //write 1001
    {
      digitalWrite(A, HIGH);
      digitalWrite(B, LOW);
      digitalWrite(C, LOW);
      digitalWrite(D, HIGH);
    }
    } 
    
}
