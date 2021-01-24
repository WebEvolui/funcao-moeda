<?php 

namespace WebEvolui;

class FuncaoMoeda {
    public function formatarParaBD(string $moeda) {
        if (empty($moeda)) {
            return 0;
        }
        
        if(substr($moeda, 0, 3) == 'R$ ') {
            $moeda = substr($moeda, 3);
        }
        
        $source = array('.', ',');
        $replace = array('', '.');
        $valor = str_replace($source, $replace, $moeda);
        return $valor; 
    }
}