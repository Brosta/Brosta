<?php


$install = function() {

	$args = func_get_args();
	$nums = func_num_args();
	$max = 8;

	if($nums > $max) {
		echo 'input not parametered '.$args[$nums - 1];
		exit;
	}

	if(!$nums) {
		return $GLOBALS['BROSTA_THIRD'];
	} else {
		if(isset($GLOBALS['BROSTA_THIRD'])) {
			$third = $GLOBALS['BROSTA_THIRD'];
		} else {
			if(is_object($args[0])) {
				// --------------n------k--------------------
				// ------oio------------------------oPo---p--
				// --------------------o---------------------
				// ---t------------u-----------------u-------
				// --------S-------------fM------------------
				// ---------------m--------------------------
				if(!function_exists('third')) {
					function third() {
						$args = func_get_args();
						$nums = func_num_args();
						return $GLOBALS['BROSTA_THIRD'](...$args);
					}
				}
				// ---h---------i-------e-----t-------t------
				// ---------------------j-----------i--------
				// -------o-------o---------y----------------
				// -------5------------------------9---------
				// ------u----------k--------g---------------
				// ------------o-----------------l-----------
				if(function_exists('third')) {
					if($third = $GLOBALS['BROSTA_THIRD'] = $args[0]) {
						if(!function_exists('Brosta')) {
							$args[0] = 'brosta';
						}
					}
				}
			}
		}
	}


		if($nums < $max) {
			for($i=$nums;$i<$max;$i++) {
				$args[$i] = null;
			}
		}

		switch($args[0]) {
			case'brosta':
				if(function_exists('third')) {
					function Brosta($context = null, $logic = [], $app = []) {
						if(isset($app['update']) && $app['update'] != 0) {
							$app['update'] = 0;
							if($app['update'] === 0) {
								$pin = func_get_args();

								$args		= !isset($pin[0]) ? 'fly'		: $pin[0];
								$body		= !isset($pin[1]) ? ''			: $pin[1];
								$global		= !isset($pin[2]) ? $glovar		: $pin[2];
								$ity		= !isset($pin[3]) ? 'brosta' 	: $pin[3];
								$ityn		= !isset($pin[4]) ? 'ity' 		: $pin[4];

								$items = null;
								$algorithm = [];
								$certs = [
									'is_on_helper' => [],
									'is_on_switch' => [],
									'callbacks' => [],
								];

								if($global) {
									$ity = isset($COOKIE[$ityn]) && $COOKIE[$ityn] ? $COOKIE[$ityn] : $ity;
									if(!isset($GLOBALS[$ity])) {
										$GLOBALS[$ity] = [];
									}
									if(!isset($GLOBALS[$ity]['certificated_args'])) {
										$GLOBALS[$ity]['certificated_args'] = $certs;
									} else {
										$certs = $GLOBALS[$ity]['certificated_args'];
									}
								}

								if(is_string($args)) {
									if($args != 'fly') {
										if(isset($certs['callbacks'][$args])) {
											return $certs['callbacks'][$args];
										}
										return null;
									} else {
										$args = [$args];
										if(!isset($certs['is_on_switch']['fly'])) {
											$algorithm['is_on_switch'] = 1;
											$items = $body;
											$body = '';
										} else {
											if(!$body) {
												return $certs;
											}
											if(is_object($body) && $body instanceof manager) {
												$body = third('infinity', 'fly', $body->get('this'));
											}

											switch(gettype($body)) {									
												case'array':
													echo json_encode($body);
												break;
												case'string':
													echo $body;
												break;
											}
										}
									}
								}

								$tmp = $args;
								if(!isset($tmp['name'])) {
									$tmp = [
										'name' => '',
										'args' => [],
										'inst' => null,
									];
									for($i=0;$i<count($args);$i++) {
										if($i == 0) {
											$tmp['name'] = $args[$i];
										} else {
											$tmp['args'][$i-1] = $args[$i];
										}
									}
								}

								$algorithm['max'] = 8;
								$algorithm['count'] = count($tmp['args']);
								$algorithm['is_on_global'] = function_exists($tmp['name']) ? 1 : 0;
								$algorithm['is_on_helper'] = function_exists('_'.$tmp['name']) ? 1 : 0;
								$algorithm['is_on_switch'] = isset($certs['is_on_switch'][$tmp['name']]) ? 1 : 0;
								$algorithm['is_on_glovar'] = $global ? 1 : 0;
								$algorithm['icall_global'] = 0;
								$algorithm['icall_helper'] = 0;
								$algorithm['icall_manage'] = 0;
								$algorithm['icall_switch'] = 0;
								$algorithm['name'] = $tmp['name'];
								$algorithm['args'] = $tmp['args'];
								$algorithm['inst'] = $tmp['inst'];
								$algorithm['ityn'] = $ityn;
								$algorithm['ity'] = $ity;
								$algorithm['items'] = $items;

								if(!empty($items)) {
									$algorithm['items'] = $items;
								}
								if($body != '') {
									$algorithm['body'] = $body;
								}
								if(!$algorithm['is_on_switch']) {
									$certs['is_on_switch'][$algorithm['name']] = $algorithm;
								} else {
									$algorithm['args'] = array_replace($certs['is_on_switch'][$algorithm['name']]['args'], $algorithm['args']);
								}
								if($algorithm['is_on_glovar']) {
									if($GLOBALS[$ity]['certificated_args'] !== $certs) {
										$GLOBALS[$ity]['certificated_args'] = $certs;
									}
								}
								$app['certs'] = $certs;
							}
							return $app;
						}

						if(is_object($context) && !is_array($context)) {
							$app = Brosta($logic, $app)->app;

							return $context($app);
						} else {
							if(!$app) {
								$root = realpath($_SERVER['DOCUMENT_ROOT'].'/../').DIRECTORY_SEPARATOR;

								$default = [
									'local' => 0,
									'mode' => 'static_client_managered',
									'public_root' => $root,
									'key' => '0000-0000-0000-0000-0000',
									'name' => 'brosta',
									'namespace' => [
										'brosta\interframework',
										'provider\brosta\src\interframework',
									],
									'volan' => [
										'interframework' => 'provider/brosta/src/interframework/0000-0000-0000-0000-0000.php',
										'manager' => 'provider/brosta/src/interframework/manager.php',
									],
									'consciousness' => [
										'decoder' => 'provider/brosta/src/interframework/decoder.php',
										'signal' =>  'provider/brosta/src/interframework/signal.php',
										'helpers' => 'provider/brosta/src/interframework/helpers.php',
									],
								];

								if($context === null) {
									$context = $default;
								} else {
									if(is_array($context)) {
										$context = array_merge($default, $context);
										if(isset($default['mode'])) {
											$context['mode'] = $default['mode'];
										}
									}
								}

								if(!isset($context['mode'])) {
									$context['mode'] = 'dynamic_client';
								}

								$app['infinity'] = Brosta('fly', $context, [
									'update' => 1,
									'infinity' => 1,
								]);
							} else {
								if($context === null) {
									return $app->manager;
								}
							}

							if(is_array($context)) {
								if(isset($context['volan'])) {
									foreach($context['volan'] as $original => $infinity) {
										unset($context['volan'][$original]);

										if(is_string($infinity)) {
											$infinity = str_replace(['/', ''], DIRECTORY_SEPARATOR, $infinity);
										}

										// ----------------------------------------------------------------------

										if(!isset($logic[$infinity])) {
											if($original === 'manager') {
												if(!isset($app['manager'])) {
													require $context['public_root'].$infinity;
													$app['manager'] = new brosta\interframework\manager(null, $app);
												}
											}
											elseif($original === 'interframework') {
												if(!isset($app['interframework'])) {
													if(!function_exists('Brosta')) {
														require $context['public_root'].$infinity;
													}
												}
												// interframework
											}

											$logic[$infinity] = 1;
										}
									}
								}
							}

							return $app['manager'];
						}
					}
				}
			break;
			case'infinity':
				$pin = $args;

				$glovar = isset($GLOBALS) ? 1 : 0;

				$args		= $pin[1] === null ? 'fly'		: $pin[1];
				$body		= $pin[2] === null ? ''			: $pin[2];
				$global		= $pin[3] === null ? $glovar	: $pin[3];
				$ity		= $pin[4] === null ? 'brosta' 	: $pin[4];
				$ityn		= $pin[5] === null ? 'ity' 		: $pin[5];

				$items = null;
				$algorithm = [];
				$certs = [
					'is_on_helper' => [],
					'is_on_switch' => [],
					'callbacks' => [],
				];

				if($global) {
					$ity = isset($COOKIE[$ityn]) && $COOKIE[$ityn] ? $COOKIE[$ityn] : $ity;
					if(!isset($GLOBALS[$ity])) {
						$GLOBALS[$ity] = [];
					}
					if(!isset($GLOBALS[$ity]['certificated_args'])) {
						$GLOBALS[$ity]['certificated_args'] = $certs;
					} else {
						$certs = $GLOBALS[$ity]['certificated_args'];
					}
				}

				if(is_string($args)) {
					if($args != 'fly') {
						if(isset($certs['callbacks'][$args])) {
							return $certs['callbacks'][$args];
						}
						return null;
					} else {
						$args = [$args];

						if(!isset($certs['is_on_switch']['fly'])) {
							$algorithm['is_on_switch'] = 1;
							$items = $body;
							$body = '';
						} else {

							if(!$body) {
								return $certs;
							}

							if(is_object($body) && $body instanceof manager) {
								$body = third('infinity', 'fly', $body->get('this'));
							}

							switch(gettype($body)) {									
								case'array':
									echo json_encode($body);
								break;
								case'string':
									echo $body;
								break;
							}
						}
					}
				}

				$tmp = $args;
				if(!isset($tmp['name'])) {
					$tmp = [
						'name' => '',
						'args' => [],
						'inst' => null,
					];
					for($i=0;$i<count($args);$i++) {
						if($i == 0) {
							$tmp['name'] = $args[$i];
						} else {
							$tmp['args'][$i-1] = $args[$i];
						}
					}
				}

				$algorithm['max'] = 8;
				$algorithm['count'] = count($tmp['args']);

				$algorithm['is_on_global'] = function_exists($tmp['name']) ? 1 : 0;
				$algorithm['is_on_helper'] = function_exists('_'.$tmp['name']) ? 1 : 0;
				$algorithm['is_on_switch'] = isset($certs['is_on_switch'][$tmp['name']]) ? 1 : 0;
				$algorithm['is_on_contro'] = isset($certs['is_on_contro'][$tmp['name']]) ? 1 : 0;

				$algorithm['is_on_glovar'] = $global ? 1 : 0;

				$algorithm['icall_global'] = 0;
				$algorithm['icall_helper'] = 0;
				$algorithm['icall_switch'] = 0;

				$algorithm['name'] = $tmp['name'];
				$algorithm['args'] = $tmp['args'];
				$algorithm['inst'] = $tmp['inst'];

				$algorithm['ityn'] = $ityn;
				$algorithm['ity'] = $ity;
				$algorithm['items'] = $items;

				if(!empty($items)) {
					$algorithm['items'] = $items;
				}

				if($body != '') {
					$algorithm['body'] = $body;
				}

				if(!$algorithm['is_on_switch']) {
					$certs['is_on_switch'][$algorithm['name']] = $algorithm;
				} else {
					$algorithm['args'] = array_replace($certs['is_on_switch'][$algorithm['name']]['args'], $algorithm['args']);
				}

				if($algorithm['is_on_glovar']) {
					if($GLOBALS[$ity]['certificated_args'] !== $certs) {
						$GLOBALS[$ity]['certificated_args'] = $certs;
					}
				}

				return $algorithm;
			break;
			case'realpath':
				return realpath(__DIR__.'/../../../../').$args[1];
			break;
			case'ltrim':
				if(is_null($args[2])) {
					return ltrim($args[1]);
				} else {
					return ltrim($args[1], $args[2]);
				}
			break;
			case'rtrim':
				if(is_null($args[2])) {
					return rtrim($args[1]);
				} else {
					return rtrim($args[1], $args[2]);
				}
			break;
			case'trim':
				if(is_null($args[2])) {
					return trim($args[1]);
				} else {
					return trim($args[1], $args[2]);
				}
			break;
			case'file':
				return file_exists($args[1]);
			break;
			case'file_extention':
				return pathinfo($args[1], PATHINFO_EXTENSION);
			break;
			case'make_dir_force':
				return @mkdir($args[1], $args[2], $args[3]);
			break;
			case'print':
				return print_r($args[1]);
			break;
			case'file_extention':
				return pathinfo($args[1], PATHINFO_EXTENSION);
			break;
			case'upper':
				return strtoupper($args[1]);
			break;
			case'lower':
				return strtolower($args[1]);
			break;
			case'is_string':
				return is_string($args[1]);
			break;
			case'is_null':
				return is_null($args[1]);
			break;
			case'is_object':
				return is_object($args[1]);
			break;
			case'length':
				return strlen($args[1]);
			break;
			case'copy_file':
				return copy($args[1], $args[2]);
			break;
			case'json_decode':
				return json_decode($args[1], $args[2]);
			break;
			case'function_exists':
				return function_exists($args[1]);
			break;
			case'json_encode':
				return json_encode($args[1]);
			break;
			case'file_append':
				return file_put_contents($args[1], $args[2], FILE_APPEND);
			break;
			case'in_array':
				return in_array($args[1], $args[2], $args[3]);
			break;
			case'explode':
				if(is_array($args[2])) {
					print_r($args[2]); exit;
				}
				return explode($args[1], $args[2]);
			break;
			case'implode':
				return implode($args[1], $args[2]);
			break;
			case'array_zero':
				return array_values($args[1]);
			break;
			case'cmd':
				return shell_exec('powershell.exe -command '.$args[1]);
			break;
			case'basename':
				return basename($args[1]);
			break;
			case'count':
				return count($args[1]);
			break;
			case'unlink':
				return @unlink($args[1]);
			break;
			case'exit':
				return exit;
			break;
			case'file_get_contents':
				return file_get_contents($args[1]);
			break;
			case'key_exists':
				return array_key_exists($args[1], $args[2]);
			break;
			case'is_empty':
				return empty($args[1]);
			break;
			case'urldecode':
				return urldecode($args[1]);
			break;
			case'urlencode':
				return urlencode($args[1]);
			break;
			case'parse_url':
				return parse_url($args[1]);
			break;
			case'is_array':
				return is_array($args[1]);
			break;
			case'substr':
				if(is_null($args[3])) {
					return substr($args[1], $args[2]);
				} else {
					return substr($args[1], $args[2], $args[3]);
				}
			break;
			case'file_put_contents':
				return file_put_contents($args[1], $args[2], $args[3] === true ? LOCK_EX : false);
			break;
			case'replace':
				return str_replace($args[1], $args[2], $args[3]);
			break;
			case'require_local':
				if(!empty($args[2])) {
					extract($args[2], EXTR_SKIP);
				}
				return require($args[1]);
			break;
			case'replace_spaces_with_one':
				return preg_replace('/\s+/', ' ', $args[1]);
			break;
			case'preg_replace':
				return preg_replace($args[1], $args[2], $args[3]);
			break;
			case'pos':
				return strpos($args[1], $args[2]);
			break;
			case'echo':
				echo($args[1]);
			break;
			case'ucwords':
				return ucwords($args[1]);
			break;
			case'call_user_func_array':
				return call_user_func_array($args[1], $args[2]);
			break;
			case'build_query':
				return http_build_query($args[1], $args[2], $args[3]);
			break;
			case'header':
				return header($args[1]);
			break;
			case'str_trans':
				return strtr($args[1], $args[2]);
			break;
			case'mysqli':
				return new mysqli($args[1], $args[2], $args[3], $args[4]);
			break;
			case'remove_spaces':
				return preg_replace('/\s+/', '', $args[1]);
			break;
			case'instanceof':
				return $args[1] instanceof $args[2];
			break;
			case'int':
				return (int)$args[1];
			break;
			case'string':
				return (string)$args[1];
			break;
			case'array_replace':
				return array_replace($args[1], $args[1]);
			break;
			case'ord':
				return ord($args[1]);
			break;
			case'mkdir':
				return mkdir($args[1], $args[2], $args[3]);
			break;
			case'delete_dir':
				return @rmdir($args[1]);
			break;
			case'str_split':
				return str_split($args[1]);
			break;
			case'is_numeric':
				return is_numeric($args[1]);
			break;
			case'get_time_in_milliseconds':
				return time();
			break;
			case'get_type':
				return gettype($args[1]);
			break;
			case'is_double':
				return is_double($args[1]);
			break;
			case'is_float':
				return is_float($args[1]);
			break;
			case'is_integer':
				return is_integer($args[1]);
			break;
			case'part':
				return strstr($args[1], $args[2], $args[3]);
			break;
			case'is_dir':
				return is_dir($args[1]);
			break;
			case'get_date_time_zone':
				return new DateTimeZone($args[1]);
			break;
			case'date_time':
				return new DateTime($args[1], $args[2]);
			break;
			case'get_paths':
				return glob($args[1], GLOB_ONLYDIR);
			break;
			case'get_paths_only':
				return glob($args[1].'\*', GLOB_ONLYDIR);
			break;
			case'reflection':
				return new ReflectionClass($args[1]);
			break;
			case'bind':
				return Closure::bind($args[1], $args[2]);
			break;
			case'file_system':
				return new FilesystemIterator($args[1]);
			break;
			case'get_compiler_info':
				return phpinfo();
			break;
			case'method_exists':
				return method_exists($args[1], $args[2]);
			break;
			case'dirsep':
				return DIRECTORY_SEPARATOR;
			break;
			case'urlsep':
				return '/';
			break;
			default:
				echo 'Fattal error: '.$args[0];
				die();
			break;
		}
};

$install($install);
