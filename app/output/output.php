<?php

namespace App\Output;

/**
 *
 * @author hennell
 */
interface output {
  function outputArray(Array $array);
  function outputArrayWithKeys(Array $array);
  function outputString(String $string);
}
