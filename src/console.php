<?php

namespace netnaveed\debugger;

/**
 * console
 */
class console {

    /**
     * Write content to console
     */
    public static function log( $log ) {

        // convert to json string if data is array
        if( is_array($log) ) {
            $log = json_encode($log);
        }

        // get information from where function is called
        $bt = debug_backtrace();
        $caller = array_shift($bt);
        
        if( isset( $caller['file'] ) ) {
            
            $file_info = pathinfo( $caller['file'] );
            $filename = $file_info['basename'];
            $line = isset( $caller['line'] ) ? $caller['line'] : '';

            // log data with filename and line number
            $display = $log . ' - ' . $filename . '(' . $line . ')';

        } else {

            // log data without filename and line number
            $display = $log;
        }
        
        echo '<script>';
        echo 'console.log("' . $display . '");';
        echo '</script>';
    }
}


?>