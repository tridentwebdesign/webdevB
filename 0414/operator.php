<style>
    body{
        font-size: 36px;
    }
 </style>

 <!-- 加算（足し算） -->
 <?php
 $a = 10;
 $b = 2;
 echo $a + $b;
 ?>
 <!-- 閉じて改行 -->
<br>

 <!-- 減算（引き算） -->
 <?php 
 echo $a - $b;
 ?>
 <br>
 <!-- 乗算（掛け算） -->
  <?php
  echo $a * $b;
  ?>
<br>

<!-- 除算（割り算） -->
  <?php
  echo $a / $b;
  ?>
<br>
<!-- 加減乗除（四則演算） -->
<!-- 剰余（あまり） -->

<?php
$b = 3;
echo $a % $b;
?>
<br>

<!-- 累乗（べき乗） -->
<?php
echo $a**2;
?>