<?php
/**
 * Created by PhpStorm.
 * User: jokamjohn
 * Date: 2/16/2016
 * Time: 4:04 PM
 */
namespace Kagga\Flash;

interface SessionStore
{
    /**Make a flash message to the session.
     *
     * @param $key
     * @param $data
     */
    public function flash($key, $data);
}