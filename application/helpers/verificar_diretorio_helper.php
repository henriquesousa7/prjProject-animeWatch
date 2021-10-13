<?php

function verificar_diretorio($dir){
		if (!file_exists($dir)) {
			mkdir($dir, 0777, TRUE);
	   	}
	}