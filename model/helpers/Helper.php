<?php
class Helper {
	public static function coverteData($data) {
		if (strstr ( $data, '/' )) {
			$data = explode ( '/', $data );
			$separador = '-';
		} else {
			$data = explode ( '-', $data );
			$separador = '/';
		}
		$data = "$data[2]$separador$data[1]$separador$data[0]";
		return $data;
	}
}