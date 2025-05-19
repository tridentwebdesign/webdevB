<?php
//htmlspecialchars2.php
// HTMLエンティティされた文字列を表示する
echo htmlspecialchars($_POST['a'], ENT_QUOTES, 'UTF-8');