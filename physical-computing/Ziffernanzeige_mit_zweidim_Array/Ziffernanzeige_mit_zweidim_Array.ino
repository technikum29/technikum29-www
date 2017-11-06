
// Hochzaehlen einer 7-Segment-Anzeige, Aufgabe 3, Blatt 4

//zweidimensionales Array. Die Elemente des "aeusseren" Arrays sind selbst Arrays.

int segmente[10][7] = {{1, 1, 1, 1, 1, 1, 0},  // 0   Segmente in der Reihenfolge a,b,c,d,e,f,g
                       {0, 1, 1, 0, 0, 0, 0},  // 1
                       {1, 1, 0, 1, 1, 0, 1},  // 2   dieses zweidimensionale Array hat 10 Zeilen....   
                       {1, 1, 1, 1, 0, 0, 1},  // 3   ....und 7 Spalten, daher [10][7]
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
    for(int zeile = 0; zeile < 10; zeile++)   // zunaechst wird die Ziffer ausgewaehlt (Index "zeile")
  {
    for(int spalte = 0; spalte < 7; spalte++) // dann werden aus dem inneren Array nacheinander...
    {                                         // ...die pinWerte ausgelesen. Dazu wurde eine neue Index-Variable "spalte"...
      if(segmente[zeile][spalte]==1)          // ...eingeführt.  Die Elemente von Arrays beginnen immer mit "0",...
      {                                       // ...also steht Pin2 auf dem Nullten Platz, Pin3 auf dem ersten usw.
        digitalWrite(pinArray[spalte],LOW);   // Mit "LOW" leuchtet das entsprechende Segment (gemeinsame Anode = +5V)
      }
      else
      {
        digitalWrite(pinArray[spalte], HIGH);
      }                                       
    }                                         // Ende der Anweisungen der inneren Schleife   
    delay(1000);                             
  }                                           // Ende der Anweisungen der aeusseren Schleife
}                                             // Loop 
 

