<?php

class Controller {



  public function model($model){
    require_once '../app/models/' . $model . '.php';
    return new $model();
  }

  public function view($view, $data = []){
    require_once '../app/views/head.php';
    require_once '../app/views/header.php';
    require_once '../app/views/'. $view .'.php';
    
  }

  protected function printJson($array = null, $allowCORS = false){
    
    $json = array();
    if($array){
        if(is_array($array)){
            foreach($array as $key => $item){
                if(is_object($item)){
                    $json[] = $item->toArray();
                }
                else
                {
                    $json[$key] = $item;
                }
            }
        }else{
            $json = $array->toArray();
        }
    }
    $this->array = array_merge($this->array, $json);
    header_remove();
    if($allowCORS){
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: _GET, POST');
    }
    header('Content-Type: application/json');
    echo json_encode($this->array, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);
    exit();
}

}