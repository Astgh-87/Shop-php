<?php

if(isset($_POST['selval'])) {


$arr=array(

array("lang"=>'arm',"Home"=>'Գլխավոր',"Blog"=>'Բլոգ',"Fruits"=> 'Մրգեր',"Driedfruits"=>'Չրեր',"Vegetables"=>'Բանջարեղեն',"Nuts"=>'Ընկույզեղեն',"Candy"=>'Կոնֆետ',"Waffle"=>'Վաֆլի',"Cake"=>'Տորթեր',
	"Registration"=>'Գրանցում',"Login"=>'Մուտք գործել',"Login"=>'Մուտք գործել',"Myaccount"=>'Իմ էջը',"Contactus"=>'Կապ մեզ հետ',"SOCIALS"=>'ՍՈՑ ԿԱՊ',"©2022AllRightsReserved."=>'©  2022  Բոլոր  իրավունքները  պաշտպանված  են:'),

array("lang"=>'eng',"Home"=>'Home',"Blog"=>'Blog',"Fruits"=> 'Fruits',"Driedfruits"=>'Dried fruit',"Vegetables"=>'Vegetables',"Nuts"=>'Nuts',"Candy"=>'Candy',"Waffle"=>'Waffle',"Cake"=>'Cake',"Registration"=>'Registration',"Login"=>'Log in',"Login"=>'Log in',"Myaccount"=>'My account',"Contactus"=>'Contact us',),

array("lang"=>'ru',"Home"=>'Главное',"Blog"=>'Блог',"Fruits"=> 'Фрукты',"Driedfruits"=>'Сухофрукты',"Vegetables"=>'Овощи',"Nuts"=>'Орехи',"Candy"=>'Конфеты',"Waffle"=>'Вафля',"Cake"=>'Торты',"Registration"=>'Регистрация',"Login"=>'Войти',"Login"=>'Войти',"Myaccount"=>'Мой профайл',"Contactus"=>'Свяжитесь с нами',"SOCIALS"=>'СОЦИАЛЬНАЯ СВЯЗ',"©2022AllRightsReserved."=>'© 2022 Все права защищены.')
);
foreach ($arr as $k => $v){
if ($_POST['selval'] == $v["lang"]){
echo json_encode($v);
break;
}
}
}
?>
