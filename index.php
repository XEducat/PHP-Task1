
  <?php
  $count = 10;
  $array[$count];

  function NumberFunc($array, $arr_size)
  {
      $sum;
      $element_count;
      for($i=0; $i < $arr_size; $i++)
      {
          $element_count++;
          if($array[$i]%5 == 0)
          {
              $sum += $array[$i];
          }
      }
      
      print "\n\n  Сумма чисел кратних п'яти: $sum";
      print "\n  Кількість елементів масиву: $element_count";
  }

  for($i=0; $i < $count; $i++)
  {
      $array[] = rand(0,10);
  }

  print "Масив: "; 
  for($i=0; $i < $count; $i++)
  {
    print "$array[$i] ";
  }
  NumberFunc($array, $count);

  ?>  