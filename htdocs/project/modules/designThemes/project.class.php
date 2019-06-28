<?php

class projectDesignTheme extends designTheme
{
    use InheritedThemesTrait;

    public function initialize()
    {
        $this->generateInheritedThemesNames('public');

        $controller = controller::getInstance();
        $this->templatesFolder = $controller->getProjectPath() . 'templates/public/';
        $this->cssPath = $controller->getProjectPath() . 'css/public/';
        $this->javascriptPath = $controller->getProjectPath() . 'js/public/';
        $this->imagesFolder = 'project/images/public/';
        $this->imagesPath = ROOT_PATH . $this->imagesFolder;
        $this->javascriptFiles = array(
            'smartpost.js',
            'post24.js',
        );
    }
}