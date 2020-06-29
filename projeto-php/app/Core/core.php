<?php

    class Core 
    {
        public function start($urlP)
        {
            if (isset($urlP['action'])) {
				$acao = $urlP['action'];
			} else {
				$acao = 'index';
            }
            
            if (isset($urlP['page'])) {
                $controller = ucfirst($urlP['page'].'Controller');
            } else {
                $controller = 'HomeController';
            }

            if (!class_exists($controller)) {
				$controller = 'ErroController';
            }
            
            if (isset($urlP['id']) && $urlP['id'] != null) {
				$id = $urlP['id'];
			} else {
				$id = null;
			}
            $call = new $controller;

            call_user_func_array(array($call, $acao), array('id' => $id));
        }
    }