<?php
/**
 * Created by PhpStorm.
 * User: jokamjohn
 * Date: 2/16/2016
 * Time: 4:01 PM
 */

namespace Kagga\Flash;


use Session;

class LaravelSession implements SessionStore
{
    /**
     * @var Session
     */
    private $session;

    /**
     * LaravelSession constructor.
     * @param Session $session
     */
    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    /**Make a flash message to the session.
     *
     * @param $key
     * @param $data
     */
    public function flash($key, $data)
    {
        $this->session->flash($key, $data);
    }
}