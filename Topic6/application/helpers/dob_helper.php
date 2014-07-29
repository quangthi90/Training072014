<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if ( ! function_exists('generate_options')){
		function generate_options($from, $to, $callback=false)
		{
			# code...
			$reverse=false;

			if ($from > $to) {
				# code...
				$temp = $from;
				$from = $to;
				$to = $temp;
				$reverse = true;
			}
			$return_str = array();

			for ($i=$from; $i <= $to; $i++) { 
				# code...
				$return_str [] = '
					<option value="'.$i.'">'.($callback?$callback($i):$i).'</option>';
			}

			if ($reverse) {
				# code...
				$return_str = array_reverse($return_str);
			}
			return join('', $return_str);
		}
	}

	if (! function_exists('callback_month')) {
		# code...
		function callback_month($month)
		{
			# code...
			return date('F', mktime(0,0,0,$month,1));
		}
	}

	if (! function_exists('format_date')) {
		# code...
		function format_date($date)
		{
			# code...
			$part = explode('-', $date);
			return date('F j, Y', mktime(0, 0, 0, $part[1], $part[2], $part[3]));
		}
	}
 ?>