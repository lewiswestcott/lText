<?php

function humanFileSize($size,$unit="") 
    {
    if( (!$unit && $size >= 1<<30) || $unit == "GB")
      return number_format($size/(1<<30),2)."GB";
    if( (!$unit && $size >= 1<<20) || $unit == "MB")
      return number_format($size/(1<<20),2)."MB";
    if( (!$unit && $size >= 1<<10) || $unit == "KB")
      return number_format($size/(1<<10),2)."KB";
    return number_format($size)." bytes";
    }

    date_default_timezone_set('Europe/London');

    function timeElapsedString($datetime, $full = false) {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);
    
        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;
    
        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }
    
        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }

    
  //}

  function GenerateID() {
    $IDData = $IDData ?? random_bytes(16);
    assert(strlen($IDData) == 16);
    $IDData[6] = chr(ord($IDData[6]) & 0x0f | 0x40);
    $IDData[8] = chr(ord($IDData[8]) & 0x3f | 0x80);
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($IDData), 4));
  }

function getLangs() {
  return array(
    "txt" => "Plain Text",
    "csharp" => "C#",
    "cpp" => "C++"
  );
}

function GetIP()
{
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  } else {
      $ip = $_SERVER['REMOTE_ADDR'];
  }

  return $ip;
}


?>