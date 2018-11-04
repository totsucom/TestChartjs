<?php
//timescatter_ajaxテスト用

//データセット１
//名称
$dataset1['label'] = 'Scatter Dataset1';
//背景色
$dataset1['backgroundColor'] = "rgba(75,192,192,0.4)";
//境界線の色
$dataset1['borderColor'] = "rgba(75,192,192,1)";
//点の色
$dataset1['pointBorderColor'] = "rgba(75,192,192,1)";
//点のサイズ
$dataset1['pointBorderWidth'] = 1;
$dataset1['pointHoverRadius'] = 2.5;
$dataset1['pointRadius'] = 2;
//データ
//phpのstrtotime()の値は1970/01/01 00:00:00からの経過時間秒
$dataset1['data'][] = array('x' => strtotime('2018/11/2 00:00:00'),'y' =>   0);
$dataset1['data'][] = array('x' => strtotime('2018/11/2 00:10:00'),'y' =>   2);
$dataset1['data'][] = array('x' => strtotime('2018/11/2 02:30:23'),'y' =>   8);
$dataset1['data'][] = array('x' => strtotime('2018/11/2 03:00:01'),'y' =>  10);
$dataset1['data'][] = array('x' => strtotime('2018/11/2 15:04:00'),'y' => 8.2);
$dataset1['data'][] = array('x' => strtotime('2018/11/2 21:40:00'),'y' =>   7);
$dataset1['data'][] = array('x' => strtotime('2018/11/3 06:00:00'),'y' =>   5);

//データセット２
$dataset2['label'] = 'Scatter Dataset2';
$dataset2['backgroundColor'] = "rgba(192,75,192,0.4)";
$dataset2['borderColor'] = "rgba(192,75,192,1)";
$dataset2['pointBorderColor'] = "rgba(192,75,192,1)";
$dataset2['pointBorderWidth'] = 1;
$dataset2['pointHoverRadius'] = 2.5;
$dataset2['pointRadius'] = 2;
$dataset2['data'][] = array('x' => strtotime('2018/11/2 01:00:00'),'y' =>   0);
$dataset2['data'][] = array('x' => strtotime('2018/11/2 01:10:00'),'y' =>   2);
$dataset2['data'][] = array('x' => strtotime('2018/11/2 03:30:23'),'y' =>   8);
$dataset2['data'][] = array('x' => strtotime('2018/11/2 04:00:01'),'y' =>  10);
$dataset2['data'][] = array('x' => strtotime('2018/11/2 12:04:00'),'y' => 8.2);
$dataset2['data'][] = array('x' => strtotime('2018/11/2 20:40:00'),'y' =>   7);
$dataset2['data'][] = array('x' => strtotime('2018/11/3 03:00:00'),'y' =>   5);

$data[] = $dataset1;
$data[] = $dataset2;
echo json_encode($data);
