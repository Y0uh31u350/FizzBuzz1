<?php

/*普通に書いたバージョン*/

for ($i=1; $i<101; $i++) {
  if($i % 3 == 0 && $i % 5 == 0) {
    print "FizzBuzz<br>";
  } else if($i % 3 == 0) {
    print "Fizz<br>";
  } else if ($i % 5 == 0) {
    print "Buzz<br>";
  } else {
    print $i;
    print "<br>";
  }
}

?>
