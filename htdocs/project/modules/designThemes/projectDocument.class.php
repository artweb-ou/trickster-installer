<?php

class projectDocumentDesignTheme extends designTheme
{
    use InheritedThemesTrait;

    public function initialize()
    {
        $controller = controller::getInstance();

        $this->generateInheritedThemesNames('document');
        $this->cssPath = $controller->getProjectPath() . 'css/document/';
        $this->templatesFolder = $controller->getProjectPath() . 'templates/document/';
    }
}