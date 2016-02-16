<?php
/**
 * Created by PhpStorm.
 * User: jokamjohn
 * Date: 1/20/2016
 * Time: 1:41 PM
 */

namespace Kagga\Flash;


class Flash
{
    /**
     * @var SessionStore
     */
    private $session;

    /**
     * Flash constructor.
     * @param SessionStore $session
     */
    public function __construct(SessionStore $session)
    {
        $this->session = $session;
    }


    /**Generic method that creates a flash message.
     *
     * @param $title
     * @param $message
     * @param $level
     * @param string $key
     */
    public function create($title, $message, $level, $key = 'message')
    {
        $this->session->flash($key, [
            'title' => $title,
            'message' => $message,
            'level' => $level
        ]);
    }

    /**This flashes an info message to the session.
     *
     * @param $title
     * @param $message
     */
    public function info($title, $message)
    {
        $this->create($title, $message, 'info');
    }

    /**This flashes an error message to the session.
     *
     * @param $title
     * @param $message
     */
    public function error($title, $message)
    {
        $this->create($title, $message, 'error');
    }

    /**This flashes a warning message to the session.
     *
     * @param $title
     * @param $message
     */
    public function warning($title, $message)
    {
        $this->create($title, $message, 'warning');
    }

    /**This flashes a success message to the session.
     *
     * @param $title
     * @param $message
     */
    public function success($title, $message)
    {
        $this->create($title, $message, 'success');
    }

    /**This creates an overlay message to the session.
     *
     * @param $title
     * @param $message
     * @param string $level
     */
    public function overlay($title, $message, $level = 'success')
    {
        $this->create($title, $message, $level, "message_overlay");
    }
}