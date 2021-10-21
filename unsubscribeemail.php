<?php

require_once 'unsubscribeemail.civix.php';
use CRM_Unsubscribeemail_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 */
function unsubscribeemail_civicrm_config(&$config) {
  _unsubscribeemail_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @param array $files
 */
function unsubscribeemail_civicrm_xmlMenu(&$files) {
  _unsubscribeemail_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 */
function unsubscribeemail_civicrm_install() {
  _unsubscribeemail_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 */
function unsubscribeemail_civicrm_postInstall() {
  _unsubscribeemail_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 */
function unsubscribeemail_civicrm_uninstall() {
  _unsubscribeemail_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 */
function unsubscribeemail_civicrm_enable() {
  _unsubscribeemail_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 */
function unsubscribeemail_civicrm_disable() {
  _unsubscribeemail_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed
 *   Based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 */
function unsubscribeemail_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _unsubscribeemail_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 */
function unsubscribeemail_civicrm_managed(&$entities) {
  _unsubscribeemail_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 */
function unsubscribeemail_civicrm_angularModules(&$angularModules) {
_unsubscribeemail_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 */
function unsubscribeemail_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _unsubscribeemail_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * @param array $permissions
 */
function unsubscribeemail_civicrm_permission(&$permissions) {
  $prefix = 'CiviCRM UnsubscribeEmail: ';
  $permissions['access unsubscribe email form'] = [
    $prefix . 'access unsubscribe email form',
    E::ts('Access the form to unsubscribe any contact by entering email address.'),
  ];
}

/**
 * Implements hook_civicrm_navigationMenu().
 */
function unsubscribeemail_civicrm_navigationMenu(&$menu) {
  _unsubscribeemail_civix_insert_navigation_menu($menu, 'Contacts', [
    'label' => E::ts('Unsubscribe email'),
    'name' => 'unsubscribe_email',
    'url' => 'civicrm/a/#/email/unsubscribe',
    'permission' => 'access unsubscribe email form,edit all contacts',
    'operator' => 'OR',
  ]);
  _unsubscribeemail_civix_navigationMenu($menu);
}

