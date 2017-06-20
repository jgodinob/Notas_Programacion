<?php

/* FUNCIÓN MUESTRA INFORMACIÓN DE UNA FECHA */

function dateAdaptedType($date, $type){
	switch($type){
		case 'year':
			// año de la fecha
			$dateAdapted = date('Y', strtotime($date));
		break;
		case 'monthN':
			// mes en número de la fecha
			$dateAdapted = date('m', strtotime($date));
		break;
		case 'monthL':
			// mes en número de la fecha
			$dateAdapted = date('F', strtotime($date));
		break;
		case 'totalDayOfMonth':
			// total de días del mes de la fecha
			$dateAdapted = date('t', strtotime($date));
		break;
		case 'weeksNumbersMonthF':
			// número de semanas que tiene el mes (fracciones)
			$totalDayOfMonth = date('t', strtotime($date));		
			$dateAdapted = $totalDayOfMonth/7;
		break;
		case 'weeksNumbersMonthT':
			// número de semanas que tiene el mes (entera)
			$totalDayOfMonth = date('t', strtotime($date));		
			$weeksNumbersMonthF = $totalDayOfMonth/7;
			$dateAdapted = round($weeksNumbersMonthF);
		break;
		case 'weeksNumbersMonthR':
			// días sueltos semanas mes
			$totalDayOfMonth = date('t', strtotime($date));		
			$weeksNumbersMonthF = $totalDayOfMonth/7;
			$weeksNumbersMonthT = round($weeksNumbersMonthF);
			$dateAdapted = ($weeksNumbersMonthF - $weeksNumbersMonthT) * 7;
		break;
		case 'dayOfMonth':		
			// día del mes de la fecha
			$dateAdapted = date('d', strtotime($date));
		break;
		case 'fristDayOfWeekMonthL':
			// primer día del mes en semana numero de la fecha
			$year = date('Y', strtotime($date));
			$monthN = date('m', strtotime($date));
			$dateAdapted = date("l", mktime(0,0,0,$monthN,1,$year));
		break;
		case 'fristDayOfWeekMonthN':
			// primer día del mes en semana numero de la fecha
			$year = date('Y', strtotime($date));
			$monthN = date('m', strtotime($date));
			$dateAdapted = date("w", mktime(0,0,0,$monthN,1,$year));
		break;
		case 'daysRemain';
			// días que quedan del mes de la fecha		
			$totalDayOfMonth = date('t', strtotime($date));
			$dayOfMonth = date('d', strtotime($date));
			$dateAdapted = $totalDayOfMonth - $dayOfMonth;
		break;
		case 'dayOfWeekL';
			// día de la semana en letra de la fecha
			$dateAdapted = date('l', strtotime($datos[$clave]['date']));
		}
	return $dateAdapted;
}

$year=dateAdaptedType('25-01-2013','year');

echo $year."<br>";

/* FUNCIÓN GENERA UN ARRAY CON DATOS DE FECHAS */

function datesArray ($datos){
	$length=count($datos)-1;
	for( $clave=0 ; $clave<=$length ; $clave++ ){
		// fecha
		$date = $datos[$clave]['date'];
			$datesArray[$clave]['date'] = $date;
		// año de la fecha
		$datesArray[$clave]['year'] = dateAdaptedType($date, 'year');
	};
	return $datesArray;
};

var_dump(datesArray ($datos));

function orderOldestFirst( $a, $b ) {
	return strtotime($a['date']) - strtotime($b['date']);
};

function orderOldestLast( $a, $b ) {
	return strtotime($b['date']) - strtotime($a['date']);
};

function showArray($datos) {
	foreach($datos as $dato) {
		echo '{$dato['date']} -> {$dato['nombre']}<br/>';
	}
};
 
echo "FECHAS ANTIGUAS PRIMERAS<br>"; 
usort($datos, 'orderOldestFirst');
showArray($datos);

echo "FECHAS ANTIGUAS ÚLTIMAS<br>";
usort($datos, 'orderOldestLast');
showArray($datos);
