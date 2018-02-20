<?php

    require_once("utils.php");

    /**
     * Function receives an array with integer numbers,
     * should return its sum. It is not alowed to use built-in php functions.
     *
     * Функция получает на вход массив чисел, должна вернуть сумму этих чисел.
     * Не использовать встроенные функции суммирования php.
     *
     * @param array $arr
     * @return integer
     */
    function my_sum($arr){
       	$sum = 0; 
    	foreach ($arr as $value) {
    	$sum = $sum + $value;
    	}
        return $sum;//...wite your code here
    }


    /**
     * Function receives a long string with many words.
     * It should return the same string, but words,
     * larger then 6 symbols, should be changed, symbols
     * after the sixth one should be replaced by symbol *
     *
     * Функция получает на вход длинную строку с множеством слов.
     * Она должна вернуть ту же строку, но в словах, которые длиннее 6 символов,
     * функция должна вместо всех символов после шестого поставить одну звездочку.
     * Пример: Из слова 'verwijdering' должно получиться 'verwij*'
     *
     * @param string $shortMe
     * @return string
     */
    function shortener($shortMe) {
    $str_arr = explode(" ", $shortMe);
    	for($j = 0; $j < count($str_arr); $j++){ 
    		if(strlen($str_arr[$j]) <= 6) $str_arr[$j] = $str_arr[$j];
    			else $str_arr[$j] = substr($str_arr[$j],0,6)."*";
    	}
     	$str2 = implode(" ",$str_arr);
     	//echo $str2."\n";
	 
	 return $str2;         //...wite your code here
    }

    /**
     * Function receives an array of strings.
     * Please return number of strings, which
     * length is at least 2 symbols and first character
     * is equal to the last character
     *
     * Функция получает на вход массив строк. Вернуть надо количество строк,
     * которые не короче двух символов и у которых первый и последний
     * символ совпадают.
     *
     * @param array $arr
     * @return number
     */
    function compare_ends($arr) {
    $num = 0;
    $end1 = count($arr);
    	for($i = 0; $i < $end1; $i++){
    		$str = $arr[$i];
    		$arr1 = str_split($str);
    		$num1 = count($arr1);
    		$arr_big = array_shift($arr1);
    		$arr_end = array_pop($arr1);
    			if(($arr_big == $arr_end)&& $num1 >=2) $num++;
    	}  	
    return $num;
    }



    /**
     * Function receives a string, should return this string reversed.
     *
     * Функция получает на вход строку, должна вернуть ее перевернутой.
     *
     * @param string $str
     * @return string
     */
    function reverse_string($str) {	
    $arr1 = str_split($str); 
    $arr2 = array_reverse($arr1);
    $str2 = implode("",$arr2);
   return $str2; 		
    }
    		
        //...write your code here

test_shortener();

test_compare_ends();

test_my_sum();

test_reverse_string();










