<?php 

if (! function_exists('is_active')) {
    /**
     * Active current URL.
     *
     * @param  string|array     $path
     * @param  string           $class_name
     * @return string
     */
    function is_active($path, $class_name = 'active') {
        $name = \Route::current()->getName();
        if ( is_array( $path ) ) {
            return in_array($name, $path) ? $class_name : '';
        }
        return $name == $path ? $class_name : '';
    }
}
