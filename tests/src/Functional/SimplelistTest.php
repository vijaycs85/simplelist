<?php

namespace Drupal\Tests\simplelist\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests the Configuration Simplelist module.
 *
 * @group simplelist
 */
class SimplelistTest extends BrowserTestBase {

  /**
   * A user with permission to administer feeds and create content.
   *
   * @var \Drupal\user\Entity\User
   */
  protected $adminUser;

  /**
   * {@inheritdoc}
   */
  protected $profile = 'standard';

  /**
   * {@inheritdoc}
   *
   * Remove after
   * https://www.drupal.org/project/entityqueue/issues/2933989 is fixed.
   */
  protected $strictConfigSchema = FALSE;

  /**
   * Modules to install.
   *
   * @var array
   */
  public static $modules = [
    'views',
    'entityqueue',
    'default_content',
    'simplelist',
  ];

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

    $this->adminUser = $this->drupalCreateUser([
      'access administration pages',
      'access simplelist',
      'administer simplelist',
      'manipulate all entityqueues',
    ]);
    $this->drupalPlaceBlock('local_tasks_block');
    $this->drupalPlaceBlock('local_actions_block');
    $this->drupalLogin($this->adminUser);
  }

  /**
   * Tests default functionality.
   */
  public function testSimplelist() {
    $session = $this->assertSession();
    // Make sure entity queue exist.
    $this->drupalGet('/admin/structure/entityqueue');
    $session->pageTextContains('FAQ');
    $this->drupalGet('/faq');
    $session->pageTextContains('Frequently Asked Questions');
  }

}
