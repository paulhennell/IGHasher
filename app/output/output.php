<?php

namespace App\Output;

/**
 *
 * @author hennell
 */
interface output {
  function outputHashtags(Array $array);
  function outputTagInfo(Array $array);
  function outputString(String $string);
}
