<?php

class CFMControllerUninstall_cfm {
  ////////////////////////////////////////////////////////////////////////////////////////
  // Events                                                                             //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Constants                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Variables                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Constructor & Destructor                                                           //
  ////////////////////////////////////////////////////////////////////////////////////////
  public function __construct() {
  }
  ////////////////////////////////////////////////////////////////////////////////////////
  // Public Methods                                                                     //
  ////////////////////////////////////////////////////////////////////////////////////////
  public function execute() {
    $task = ((isset($_POST['task'])) ? esc_html(stripslashes($_POST['task'])) : '');
    if (method_exists($this, $task)) {
      check_admin_referer('nonce_cfm', 'nonce_cfm');
      $this->$task();
    }
    else {
      $this->display();
    }
  }

  public function display() {
    require_once WD_CFM_DIR . "/admin/models/CFMModelUninstall_cfm.php";
    $model = new CFMModelUninstall_cfm();

    require_once WD_CFM_DIR . "/admin/views/CFMViewUninstall_cfm.php";
    $view = new CFMViewUninstall_cfm($model);
    $view->display();
  }

  public function uninstall() {
    require_once WD_CFM_DIR . "/admin/models/CFMModelUninstall_cfm.php";
    $model = new CFMModelUninstall_cfm();

    require_once WD_CFM_DIR . "/admin/views/CFMViewUninstall_cfm.php";
    $view = new CFMViewUninstall_cfm($model);
    $view->uninstall();
  }
  ////////////////////////////////////////////////////////////////////////////////////////
  // Getters & Setters                                                                  //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Private Methods                                                                    //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Listeners                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
}