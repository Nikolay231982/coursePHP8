<?php
echo "<h2>Константы</h2>";
echo "<h3>Оператор const</h3>";

const PI = 3.14;
echo PI;

echo "<h3>Функция define()</h3>";
define('NUMBER', 22);
echo NUMBER;

echo "<h3>Магические константы</h3>";
?>


<ul>
	<li><?= __FILE__ ?></li>
	<li><?= __LINE__ ?></li>
	<li><?= __DIR__ ?></li>
	<li>__FUNCTION__</li>
	<li>__CLASS__</li>
	<li>__TRAIT__</li>
	<li>__METHOD__</li>
	<li>__NAMESPACE__</li>
	<li>ClassName::class</li>
	
</ul>