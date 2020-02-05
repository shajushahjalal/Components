<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Component;

/**
 *
 * @author Shaju
 */
trait NumberFormat {
    
    /*
     * -------------------------------------------------
     * Make Number Format 
     * _________________________________________________
     */
    public function makeNumber($data) {
        return str_replace([',',"'",'-'],'',$data);        
    }
    
    
}
