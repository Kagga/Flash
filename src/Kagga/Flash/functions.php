<?php

if (!function_exists('flash')) {
    /**
     * Helper for passing a flash message to the view.
     * Return a flash instance if the args are null.
     * Return a flash message if they are not.
     *
     * @param $title
     * @param $message
     * @return \Illuminate\Foundation\Application|mixed
     */
    function flash($title = null, $message = null)
    {
        $flash = app('flash');

        if (func_num_args() == 0) {
            return $flash;
        }

        return $flash->info($title, $message);
    }
}