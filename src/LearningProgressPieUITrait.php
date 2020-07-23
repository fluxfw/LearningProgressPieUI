<?php

namespace srag\LearningProgressPieUI;

/**
 * Trait LearningProgressPieUITrait
 *
 * @package srag\LearningProgressPieUI
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
trait LearningProgressPieUITrait
{

    /**
     * @return Factory
     */
    protected static function LearningProgressPieUI() : Factory
    {
        return Factory::getInstance();
    }
}
