<?php

class projectAdminDesignTheme extends designTheme
{
    use InheritedThemesTrait;

    public function initialize()
    {
        $this->generateInheritedThemesNames('admin');

        $controller = controller::getInstance();
        $this->templatesFolder = $controller->getProjectPath() . 'templates/admin/';
        $this->cssPath = $controller->getProjectPath() . 'css/admin/';
        $this->javascriptPath = $controller->getProjectPath() . 'js/admin/';
        $this->imagesFolder = 'project/images/admin/';
        $this->imagesPath = ROOT_PATH . $this->imagesFolder;
    }
}