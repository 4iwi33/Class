<?php
$today = getdate();
echo $today['month'];
echo '<br>';
echo $today['wday'];
echo '<br>';
echo $today['weekday'];

$rusArray = [
    'Monday' => 'Понедельник',
    'Thusday' => 'Вторник', 
    'Wensday' => 'Среда',
    'Thursday' => 'Четверг',
    'Friday' => 'Пятница',
    'Saturday' => 'Суббота',
    'Sunday' => 'Воскресенье',
];
echo $rusArray[$today['weekday']];
echo $rusArray[getdate()['weekday']];
