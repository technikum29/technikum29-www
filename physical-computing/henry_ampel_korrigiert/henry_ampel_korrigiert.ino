/*
 * Henrys Sketch (korrigiert):
Die gruene LED wird an PIN 8 angeschlossen;
Die gelbe LED wird an PIN 9 angeschlossen;
Die rote LED wird an PIN 10 angeschlossen;
Der Lautsprecher wird an PIN 11 angeschlossen;
Der Helligkeitssensor wird an A0 angeschlossen.
*/

int gruen=8;      //Intitialisierung von gruen
int gelb=9;       //  "  gelb
int rot=10;       //  "  rot
      
void setup() {
                  pinMode(gruen,OUTPUT);    
                  pinMode(gelb, OUTPUT);    
                  pinMode(rot,  OUTPUT);    
                  Serial.begin(9600);
}                                         
                                          
void loop() {  
                  int brightness=analogRead(A0);
                  Serial.println(brightness);
                             
if (brightness<234){                             
                   digitalWrite (rot,  HIGH);    //rote LED an
                   digitalWrite (gelb, LOW);     //gelbe LED aus           
                   digitalWrite (gruen, LOW);    //gruene LED aus
                   tone(11,300);                 //....tiefer Ton 
                   delay(10);                    // zur Entkopplung, hat kaum Einfluss auf die Tonlaenge!
      }

if (brightness>235 && brightness<700){               
                     digitalWrite (rot,   LOW);     //rote LED aus
                     digitalWrite (gelb,  HIGH);    //gelbe LED an
                     digitalWrite (gruen, LOW);     //gruene LED aus
                     tone(11,600);                  //...mittlerer Ton 
                     delay(10);                            
      }

if (brightness>701){                                
                     digitalWrite (rot,  LOW);      //rote LED aus
                     digitalWrite (gelb, LOW);      //gelbe LED aus
                     digitalWrite (gruen,HIGH);     //gruene LED an
                     tone(11,1000);                 //....hoher Ton   
                     delay(10);                        
     }   
}             

