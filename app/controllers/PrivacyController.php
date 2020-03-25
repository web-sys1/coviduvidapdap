<?php

use Phalcon\Mvc\Controller;

/**
 * Privacy Controller class.
 * 
 * @since 1.0.1
 */
class PrivacyController extends Controller
{

    /**
     * Initialize page.
     * 
     * @since  1.0.1
     * @access public
     * 
     * @return void
     */
    public function initialize()
    {
        $this->tag->setTitle( 'Privacy Policy / Coviduvidapdap' );
    }

    /**
     * Index actions.
     * 
     * @since  1.0.1
     * @access public
     * 
     * @return void
     */
    public function indexAction()
    {

    }

}