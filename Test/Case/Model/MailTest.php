<?php
App::uses('Mail', 'TinyMail.Model');

/**
 * Mail Test Case
 *
 */
class MailTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.tiny_mail.mail'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mail = ClassRegistry::init('TinyMail.Mail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mail);

		parent::tearDown();
	}

/**
 * testDummy method
 *
 * @return void
 */
	public function testDummy() {

	}

}
