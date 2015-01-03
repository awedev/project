<?php namespace Awesomedeveloper\Helpers;

use Illuminate\Support\Facades\Config;

class Helper{
	public function createMessage($status, $statusMessage){
		$_layout = null;
		switch ($status) {
			case "info":
				$_layout = sprintf(Config::get('helpers::app.message_info'), $statusMessage);
				break;
			case "success":
				$_layout = sprintf(Config::get('helpers::app.message_success'), $statusMessage);
				break;
			case "warning":
				$_layout = sprintf(Config::get('helpers::app.message_warning'), $statusMessage);
				break;
			case "danger":
				$_layout = sprintf(Config::get('helpers::app.message_danger'), $statusMessage);
				break;
			default :
				$_layout = sprintf(Config::get('helpers::app.message_info'), $statusMessage);
				break;
		}
		if(asset($_layout))
			return $_layout;
		else
			return 'status is not defined';
	}

	public function addTracing($message, $type = null){
		if(Config::get('helpers::app.tracing_enabled')){   
			echo sprintf(Config::get('helpers::app.tracing_format'), var_export($message).' @ '.date("Y-m-d H:i:s").'</br>');
		}
	}
} 