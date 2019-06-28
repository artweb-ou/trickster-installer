<?php

class projectRssDesignTheme extends designTheme
{
    use InheritedThemesTrait;

    public function initialize()
    {
        $this->generateInheritedThemesNames('rss');

        $controller = controller::getInstance();
        $this->templatesFolder = $controller->getProjectPath() . 'templates/rss/';
    }
}