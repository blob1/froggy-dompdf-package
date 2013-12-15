<?php

class PDF {

	public static function make($html,$filename,$download=false){
		require 'src/dompdf_config.inc.php';

		$dompdf = new DOMPDF();
		$dompdf->load_html($html);
		$dompdf->render();
		if($download==true){
			$dompdf->stream($filename);
		}else{
			$dompdf->stream($filename,array('Attachment'=>0));
		}
	}

	public static function makeFromFile($link,$filename,$download=false){
		require 'src/dompdf_config.inc.php';

		$dompdf = new DOMPDF();
		$dompdf->load_html_file($html);
		$dompdf->render();
		if($download==true){
			$dompdf->stream($filename);
		}else{
			$dompdf->stream($filename,array('Attachment'=>0));
		}
	}

}