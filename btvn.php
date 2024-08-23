
<?php

$text = "Xin chao Tran Thi Ly";
$text_1 = "Xin chao Chan Ly";
$text_2 = "     Xin chao Chan Ly     ";
$text_3 = "Xin chao Ly     ";

// 1.Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().
$a = strlen($text);
echo "1. Số ký tự của chuỗi là: $a <br>";

// 2.Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
$b = str_word_count($text);
echo "2. Số từ của chuỗi là: " . $b ;
echo '<br>';

//3.Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
$c = strrev($text);
echo "3. Chuỗi đảo ngược: " . $c ;
echo '<br>';

//4. Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
$d = strpos($text, "Ly");
echo "4. Đáp án là: " . $d ;
echo '<br>';

//5. Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
$e = str_replace('Tran Thi', 'Chan', $text);
echo "5. Chuỗi thay thế: " . $e ;
echo '<br>';

//6. Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
$f = strncmp($text, $text_1, 20);
echo "6. Đáp án là: " . $f ;
echo '<br>';

//7. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
$g = strtoupper($text);
echo "7. Chuyển đổi thành chữ hoa: " . $g ;
echo '<br>';

//8. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
$h = strtolower($text);
echo "8. Chuyển đổi thành chữ thường: " . $h ;
echo '<br>';

//9. Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
$i = ucwords($text);
echo "9. Chuỗi đúng yêu cầu: " . $i ;
echo '<br>';

//10. Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
$k = trim($text_2);
echo "10. Chuỗi đúng yêu cầu: " . $k ;
echo '<br>';

//11. Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
$l = ltrim($text_2);
echo "11. Chuỗi đúng yêu cầu: " . $l ;
echo '<br>';

//12. Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
$m = rtrim($text_3);
echo "12. Chuỗi đúng yêu cầu: " . $m ;
echo '<br>';

//13. Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
$n = explode(" ", $text);
echo "13. Chuỗi đúng yêu cầu là: ";
print_r($n);
echo '<br>';

//14. Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
$arr = array('Xin','Chao','Ly');
echo "14. " . implode(" ",$arr) ."<br>";

//15. Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
$str = "Hello Everyone";
echo "15. " . str_pad($str,20,".") ."<br>";

//16. Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
echo "16. " . strrchr("Xin chào mọi người", "chào") ."<br>";

//17. Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
echo "17. " . strstr("Hello cạ nhà","cạ") ."<br>";

//18. Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
$str = 'Hello Python!';
$pattern = '/python/i';
echo "18. " . preg_replace($pattern, 'PHP', $str) ."<br>";

//19. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
$y = 30.5;
echo "19. ";
    if (is_int($y)) {
    echo 'Biến là kiểu số nguyên';
    }else{
        echo 'Biến kp số nguyên';
    }
echo "<br>";
//20. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
$email = "lyt592004@gmail.com";
echo "20. ";

	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo("$email là địa chỉ email hơp lệ");
	} else {
		echo("$email không là địa chỉ email hơp lệ");
	}
echo "<br>";

?>