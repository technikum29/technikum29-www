/* 
 * Rotary-Encoder Sketch mit Interrupt Nr. 2
 * beachte: Bei schnellen Vorgaengen verlangsamt der Serielle-Monitor den Sketch!
 * Wenn der Button (Switch) zum Rueckstellen ins Programm eingebaut wird, muss
 * man den INPUT mit PULLUP versehen! 
 * 
 * read a rotary encoder with interrupts
   Encoder hooked up with common to GROUND,
   encoder0PinA to pin 2, encoder0PinB to pin 3 
   it doesn't matter which encoder pin you use for A or B  

   uses Arduino pull-ups on A & B channel outputs
   turning on the pull-ups saves having to hook up resistors 
   to the A & B channel outputs 
*/ 

#define encoder0PinA  2
#define encoder0PinB  3

volatile int encoder0Pos = 0;

void setup() { 
  
  pinMode(encoder0PinA, INPUT); 
  pinMode(encoder0PinB, INPUT); 
  
  attachInterrupt(0, doEncoder, CHANGE);  // encoder pin on interrupt 0 - pin 2
  Serial.begin (9600);
  Serial.println("Start des Programms");               
} 

void loop(){    

}
}
void doEncoder() {
  /* If pinA and pinB are both high or both low, it is spinning
   * forward. If they're different, it's going backward.
   */
  if (digitalRead(encoder0PinA) == digitalRead(encoder0PinB)) {
    encoder0Pos++;
  } else {
    encoder0Pos--;
  }
   Serial.print("    ");
  Serial.println (encoder0Pos);
}

 

