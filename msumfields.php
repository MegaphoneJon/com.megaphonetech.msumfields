<?php

require_once 'msumfields.civix.php';
use CRM_Msumfields_ExtensionUtil as E;

/**
 * Implements hook_civicrm_sumfields_definitions()
 *
 * Change "mycustom" to the name of your own extension.
 */
function msumfields_civicrm_sumfields_definitions(&$custom) {
  $custom['fields']['last_financial_type'] = [
    // Choose which group you want this field to appear with.
    'optgroup' => 'fundraising', // could just add this to the existing "fundraising" optgroup
    'label' => 'Financial Type of Last Contribution',
    'data_type' => 'String',
    'html_type' => 'Text',
    'weight' => '1',
    'text_length' => '64',
    // A change in the "trigger_table" should cause the field to be re-calculated.
    'trigger_table' => 'civicrm_contribution',
    // A parentheses enclosed SQL statement with a function to ensure a single
    // value is returned. The value should be restricted to a single
    // contact_id using the NEW.contact_id field
    'trigger_sql' => '(SELECT ft.name FROM civicrm_contribution t1
      JOIN civicrm_financial_type ft ON t1.financial_type_id = ft.id
      WHERE t1.contact_id = NEW.contact_id AND
      t1.contribution_status_id = 1  AND t1.financial_type_id IN
      (%financial_type_ids) ORDER BY t1.receive_date DESC LIMIT 1)',
  ];


  $custom['fields']['largest_contribution_financial_type'] = [
    // Choose which group you want this field to appear with.
    'optgroup' => 'fundraising', // could just add this to the existing "fundraising" optgroup
    'label' => 'Largest Contribution Financial Type',
    'data_type' => 'String',
    'html_type' => 'Text',
    'weight' => '1',
    'text_length' => '64',
    // A change in the "trigger_table" should cause the field to be re-calculated.
    'trigger_table' => 'civicrm_contribution',
    // A parentheses enclosed SQL statement with a function to ensure a single
    // value is returned. The value should be restricted to a single
    // contact_id using the NEW.contact_id field
    'trigger_sql' => '(SELECT ft.name FROM civicrm_contribution AS t1     
      JOIN civicrm_financial_type AS ft ON t1.financial_type_id = ft.id
      WHERE t1.contact_id = NEW.contact_id
      AND t1.contribution_status_id = 1  
     AND t1.financial_type_id IN (%financial_type_ids) 
     ORDER BY t1.total_amount DESC LIMIT 1)',
  ];



}

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function msumfields_civicrm_config(&$config) {
  _msumfields_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function msumfields_civicrm_install() {
  _msumfields_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_postInstall
 */
function msumfields_civicrm_postInstall() {
  _msumfields_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function msumfields_civicrm_uninstall() {
  _msumfields_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function msumfields_civicrm_enable() {
  _msumfields_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function msumfields_civicrm_disable() {
  _msumfields_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function msumfields_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _msumfields_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_entityTypes
 */
function msumfields_civicrm_entityTypes(&$entityTypes) {
  _msumfields_civix_civicrm_entityTypes($entityTypes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *

 // */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_navigationMenu
 *
function msumfields_civicrm_navigationMenu(&$menu) {
  _msumfields_civix_insert_navigation_menu($menu, 'Mailings', array(
    'label' => E::ts('New subliminal message'),
    'name' => 'mailing_subliminal_message',
    'url' => 'civicrm/mailing/subliminal',
    'permission' => 'access CiviMail',
    'operator' => 'OR',
    'separator' => 0,
  ));
  _msumfields_civix_navigationMenu($menu);
} // */