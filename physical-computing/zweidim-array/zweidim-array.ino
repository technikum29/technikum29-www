
// Hochzaehlen einer 7-Segment-Anzeige, Aufgabe 1, Blatt 4

//zweidimensionales Array. Die Elemente des "aeusseren" Arrays sind selbst Arrays.

int segmente[10][7] = {{1, 1, 1, 1, 1, 1, 0},  // 0    Segmente in der Reihenfolge a,b,c,d,e,f,g
                       {0, 1, 1, 0, 0, 0, 0},  // 1
                       {1, 1, 0, 1, 1, 0, 1},  // 2
                       {1, 1, 1, 1, 0, 0, 1},  // 3
                       {0, 1, 1, 0, 0, 1, 1},  // 4
                       {1, 0, 1, 1, 0, 1, 1},  // 5
                       {1, 0, 1, 1, 1, 1, 1},  // 6
                       {1, 1, 1, 0, 0, 0, 0},  // 7
                       {1, 1, 1, 1, 1, 1, 1},  // 8
                       {1, 1, 1, 1, 0, 1, 1}}; // 9 
                       
int pinArray[] = {2, 3, 4, 5, 6, 7, 8};                       

void setup(){                                 // ueberlege selbst, was das setup hier bewirkt
  for(int i = 0; i < 7; i++)
    pinMode(pinArray[i], OUTPUT);  
}

void loop(){                                 
    for(int i = 0; i < 10; i++)               // zunaechst wird die Ziffer ausgewaehlt (Index "i")
  {
    for(int pin = 0; pin < 7; pin++)          // dann werden aus dem inneren Array nacheinander
    {                                         // die pinWerte ausgelesen. Dazu wurde eine neue Index-Variable "pin"
      if(segmente[i][pin]==1)                 // eingefuehrt.  Die Elemente von Arrays beginnen immer mit "0",
      {                                       // also steht Pin2 auf dem Nullten Platz, Pin3 auf dem ersten usw.
        digitalWrite(pinArray[pin],LOW);      // Mit "LOW" leuchtet das entsprechende Segment (gemeinsame Anode = +5V)
      }
      else
      {
        digitalWrite(pinArray[pin], HIGH);
      }
    }   
    delay(1000);                              // Pause von einer Sekunde
  }
}
 


