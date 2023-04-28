<?php

// 設置要顯示的年份和月份
if (isset($_GET['year']) && isset($_GET['month'])) {
  $year = $_GET['year'];
  $month = $_GET['month'];
} else {
  $year = date('Y');
  $month = date('m');
}

// 計算該月份的第一天是星期幾
$firstDay = date('w', strtotime($year . '-' . $month . '-01'));

// 計算該月份的天數
$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);

// 生成 HTML 代碼，顯示該月份的日曆
echo '<table>';
echo '<tr><th>日</th><th>一</th><th>二</th><th>三</th><th>四</th><th>五</th><th>六</th></tr>';

echo '<tr>';
for ($i = 0; $i < $firstDay; $i++) {
  echo '<td></td>';
}

for ($i = 1; $i <= $daysInMonth; $i++) {
  $weekday = date('w', strtotime($year . '-' . $month . '-' . $i));
  if ($weekday == 0) {
    echo '</tr><tr>';
  }
  echo '<td>' . $i . '</td>';
}

for ($i = $weekday; $i < 6; $i++) {
  echo '<td></td>';
}
echo '</tr>';

echo '</table>';

?>
