<?php

namespace srag\LearningProgressPieUI;

/**
 * Trait LearningProgressPieUITrait
 *
 * @package srag\LearningProgressPieUI
 */
trait LearningProgressPieUITrait
{

    /**
     * @return Factory
     */
    protected static function learningProgressPieUI() : Factory
    {
        return Factory::getInstance();
    }
}
