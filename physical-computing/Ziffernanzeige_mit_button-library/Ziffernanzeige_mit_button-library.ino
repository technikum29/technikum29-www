

// Hochzaehlen einer 7-Segment-Anzeige, Aufgabe 3f, Blatt 4, vorwaerts, rueckwaerts, auf Null stellen


#include<Button.h>

//************************Variable deklarieren (initialisieren)********************************

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
Button  tasteHoch = Button(12, PULLUP);     // woher? vergl. Button-Library "Examples"
Button  tasteRunter = Button(13, PULLUP);
Button  tasteNull = Button(11, PULLUP);
int aktuelleZiffer = 0;                     // Zaehlvariable fuer die Ziffern

//********************Pin-Modes festlegen**************

void setup(){                                 
  for(int i = 0; i < 7; i++)
    pinMode(pinArray[i], OUTPUT);  
}

//*******************Taster abfragen*******************
void loop()
{
         if(tasteHoch.uniquePress())
         {
          aktuelleZiffer++;
          if(aktuelleZiffer> 9)
          {
            aktuelleZiffer = 0;
          }
        }
         
         if(tasteRunter.uniquePress())
         {
          aktuelleZiffer--;
          if(aktuelleZiffer< 0)
          {
            aktuelleZiffer = 9;
          }
        }

        if(tasteNull.uniquePress())
         {
            aktuelleZiffer = 0;
        }
  //*****************Ziffern anzeigen****************************  
     
    for(int segment = 0; segment< 7; segment++)   
    {                                             
      bool segmentAn = segmente[aktuelleZiffer][segment];  // "segmentAn" ist eine Hilfsvariable, damit der Sketch...
                                                           // ...besser lesbar wird
      if(segmentAn)                               
      {                                           
        digitalWrite(pinArray[segment], LOW);      
      }
      else
      {
        digitalWrite(pinArray[segment], HIGH);
      }                                       
    }                                                     // Ende Anweisungsblock "for"                                          
    delay(30);
}                                             




