<?php

namespace srag\CustomInputGUIs\H5P\UIInputComponentWrapperInputGUI;

use ILIAS\UI\Implementation\Component\Input\NameSource;

/**
 * Class UIInputComponentWrapperNameSource
 *
 * @package srag\CustomInputGUIs\H5P\UIInputComponentWrapperInputGUI
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class UIInputComponentWrapperNameSource implements NameSource
{

    /**
     * @var string
     */
    protected $post_var;


    /**
     * UIInputComponentWrapperNameSource constructor
     *
     * @param string $post_var
     */
    public function __construct($post_var)
    {
        $this->post_var = $post_var;
    }


    /**
     * @inheritDoc
     */
    public function getNewName()
    {
        return $this->post_var;
    }
}