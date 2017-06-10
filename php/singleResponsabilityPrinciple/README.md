#Single Responsability Principle

This principle tells us that a class must have methods that are proper to the entity, in the example we can see that the methods of formatting the result were taken to classes whose function is to format the date.

Test:

~~~~
php correct/index.php

// string(30) "{"name":"Dev","pass":"Lusaja"}"
// string(23) "Name: Dev, Pass: Lusaja"
~~~~

~~~~
php incorrect/index.php

// string(30) "{"Name":"Dev","pass":"Lusaja"}"
// string(23) "Name: Dev, Pass: Lusaja"
~~~~