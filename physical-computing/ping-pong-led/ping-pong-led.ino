// ping-pong-LED mit bitSet und outShift (inkl. Toene)
// Aufgabe 1a/b von Blatt 5

int clockPin = 8;
int latchPin = 9;
int dataPin = 10;

int leds = 0;

void setup() 
{
 pinMode(latchPin, OUTPUT);
 pinMode(dataPin, OUTPUT);  
 pinMode(clockPin, OUTPUT);
}

void loop() 
{
  int frequenz = 200;
  
  for (int n = 0; n< 8; n++)
  {
    bitSet(leds, n);
    updateShiftRegister();
    tone(7, frequenz, 100);
    delay(100); 
    frequenz=frequenz+50;
    leds=0;
    updateShiftRegister();    
  }
  
frequenz=1000;

  for (int n = 7; n>=0; n--)
  {
    bitSet(leds, n);
    updateShiftRegister();  
    tone(7, frequenz, 100);
    delay(100);
    frequenz=frequenz-50;
    updateShiftRegister();
    leds=0;    
  }
}

void updateShiftRegister()    
{
   digitalWrite(latchPin, LOW);
   shiftOut(dataPin, clockPin, MSBFIRST, leds);
   digitalWrite(latchPin, HIGH);
}


