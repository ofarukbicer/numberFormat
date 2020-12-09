<?php

  // Sayı çevirici
  function numberConverter($number)
  {
    $endNumber = ['B', 'Mn', 'Mr', 'Tr'];
    $numberLen = strlen($number);

    if ($numberLen < 4) {
      $formatNumber = $number;
    }elseif ($numberLen >= 4 && $numberLen <= 6) {
      $number = number_format($number);
      $number = array_filter(explode(',', $number));
      if (substr($number[1], 0, 1) == 0) {
        $formatNumber = $number[0] . ' ' . $endNumber[0];
      }else {
        $formatNumber = $number[0] . ',' . substr($number[1], 0, 1) . ' ' . $endNumber[0];
      }
    }elseif ($numberLen >= 7 && $numberLen <= 9) {
      $number = number_format($number);
      $number = array_filter(explode(',', $number));
      if (substr($number[1], 0, 1) == 0) {
        $formatNumber = $number[0] . ' ' . $endNumber[1];
      }else {
        $formatNumber = $number[0] . ',' . substr($number[1], 0, 1) . ' ' . $endNumber[1];
      }
    }elseif ($numberLen >= 10 && $numberLen <= 12) {
      $number = number_format($number);
      $number = array_filter(explode(',', $number));
      if (substr($number[1], 0, 1) == 0) {
        $formatNumber = $number[0] . ' ' . $endNumber[2];
      }else {
        $formatNumber = $number[0] . ',' . substr($number[1], 0, 1) . ' ' . $endNumber[2];
      }
    }elseif ($numberLen >= 13 && $numberLen <= 15) {
      $number = number_format($number);
      $number = array_filter(explode(',', $number));
      if (substr($number[1], 0, 1) == 0) {
        $formatNumber = $number[0] . ' ' . $endNumber[3];
      }else {
        $formatNumber = $number[0] . ',' . substr($number[1], 0, 1) . ' ' . $endNumber[3];
      }
    }else {
      $formatNumber = $number;
    }
    if (!$formatNumber) {
      $formatNumber = 'Lütfen bir sayı giriniz';
    }
    return $formatNumber;
  }
  echo numberConverter(123456789);
 ?>
