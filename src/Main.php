<?php namespace BaunPlugin\AdminTheme;

use Baun\Plugin;

class Main extends Plugin {

  public function init()
  {
    // $this->events->addListener('baun.afterSetupRoutes', [$this, 'setupRoutes']);

    // $this->users = $this->config->get('plugins-bauncms-baun-admin-admin.users');


   /* $sectionsHandler = new SectionsHandler($this->config, $this->router, $this->events, $this->theme);
    $this->events->addListener('baun.beforePageRender', function($event, $template, $data) use ($sectionsHandler) {
      $data = $sectionsHandler->processPageSections(array($data));
    });*/

    $this->theme->addPath(dirname(__DIR__) . '/templates');
  }




 }
