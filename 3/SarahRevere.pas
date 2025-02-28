PROGRAM PaulRevere(INPUT, OUTPUT);

USES DOS;
VAR
  Lanterns: STRING;
BEGIN {PaulRevere} 
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Lanterns := GetEnv('QUERY_STRING');
  // POS('Lanterns=', Lanterns);
  DELETE(Lanterns, 1, 9);
  WRITELN(Lanterns);
  {Issue Paul Revere's message}
  IF Lanterns = '1'
  THEN
    WRITELN('The British are coming by sea.')
  ELSE  
    IF Lanterns = '2'
    THEN
      WRITELN('The British are coming by land.')
    ELSE
      WRITELN('The North Church shows only ''', Lanterns, '''.')
END. {PaulRevere}
