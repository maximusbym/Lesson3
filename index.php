<?php


// Динамическая типизация

$a1  = "0"; // $foo это строка (ASCII 48)
$a2 += 2;
// $foo теперь целое число (2)
$a3  = $foo + 1.3; // $foo теперь число с плавающей точкой (3.3)
$a4  = 5 + "10 Small little pigs"; // $foo это целое число 15
$a5  = 5 + "Small pigs 10"; // $foo это целое число 5

// Индексирование в строках

$a  = "car";	//  $a - это строка 
$a[0]  = 'b';   // $a все еще строка 
echo $a;        //  bar



/**
 * Приведение типов
 **/

// Bool

var_dump((bool) "");		// bool(false)
var_dump((bool) 1); 	    // bool(true) 
var_dump((bool) 0);		    // bool(false) 
var_dump((bool) - 2);		// bool(true)
var_dump((bool) "foo");	    // bool(true)
var_dump((bool) 2.3e5);	    // bool(true)
var_dump((bool) array(12));	// bool(true)
var_dump((bool) array());	// bool(false)
var_dump((bool) "false");	// bool(true)

// Int

echo (int) ( (0.1 + 0.7) * 10 ); // выводит 7!
echo (int)True; // выводит 1!
echo (int)1.9; // выводит 1!

// Строки

echo (string)[1, 2, 3,]; 	// выводит "Array"!
echo (string)True; 		// выводит  "1"!
echo (string)1.9; 		// выводит "1.9"!

$foo  = 10;             // $foo - это целое число
$str  = "$foo";         //$str - это строка
$fst  = (string) $foo;  // $fst - это тоже строка

// Массивы

var_dump((array) 1); 		// array([0] => 1)
var_dump((array) "1"); 		// array([0] => "1")
var_dump((array)NULL); 	// array()

// NULL

$name  = 'Felipe';
var_dump((unset) $name);	 //  NULL 
var_dump($name);			 //  string(6) "Felipe"
unset($foo);  				//  удаляем одну переменную
unset($bar['quux']);  		//  удаляем один элемент массива
unset($foo1, $foo2, $foo3);  	//  удаляем несколько переменных




/**
 * Логические операторы
 **/




// Логическое ИЛИ (OR и ||)

  // Оператор "||" имеет больший приоритет, чем "or" и чем "="
  // Результат выражения (false || true) будет присвоен переменной $var1
  // Действие приоритета: $var1 = (false || true)
  $var1 = false || true;
  echo $var1; // => 1

  // Сначала переменной присваивается значение false, а затем вычисляется второй операнд
  // Действие приоритета: ($var2 = false) or true
  $var2 = false or true;
  echo $var2;  // false не выводится

  // ($var3 = 0) or 3
  $var3 = 0 or 3;

  echo "<br>$var3";   // => 0




// Логическое И (AND и &&)

// Оператор "&&" имеет больший приоритет, чем "and" и чем "="
// Результат выражения (true && false) будет присвоен переменной $bar1
// Действие приоритета: $bar1 = (true && false)
$bar1 = true && false;

// Сначала переменной присваивается значение true, а затем вычисляется второй операнд
// Действие приоритета: ($bar2 = true) and false
$bar2 = true and false;
var_dump($bar1, $bar2);

// ($bar3 = 9) and 3
$bar3 = 9 and 3;

echo "<br>$bar3"; // => 9



// Исключающее ИЛИ (XOR)

// ($a1 = 19) xor 5 > 6
$a1 = 19 xor 5 > 6;

var_dump($a1);                      // => 19
var_dump($a1 = 19 xor 5 > 6);	    // (bool) true
var_dump(true xor true); 	        // false
var_dump((2 < 3) xor (5 != 5)); 	// true



// Логическое НЕ (!) или оператор Отрицания

$a1 = 10;

var_dump((11 == 11)); 	// true

// оператора ! инвертирует значение
var_dump(!(11 == 11));	// false

// преобразует в логическое значение
var_dump(!!$a1);		// true

  if (!$product) {
      exit();
  }

