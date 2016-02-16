<?php
/**
 * Created by PhpStorm.
 * User: jokamjohn
 * Date: 2/16/2016
 * Time: 4:01 PM
 */

namespace Kagga\Flash;


use Illuminate\Session\Store;
use Session;

class LaravelSession implements SessionStore
{
    /**
     * @var Session
     */
    private $session;

    /**
     * LaravelSession constructor.
     * @param Store $session
     */
    public function __construct(Store $session)
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