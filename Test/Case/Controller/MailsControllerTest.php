<?php
App::uses('MailsController', 'TinyMail.Controller');

/**
 * MailsController Test Case
 *
 */
class MailsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.tiny_mail.mail'
	);

	public function startTest() {
		$this->Mail = ClassRegistry::init('TinyMail.Mail');
	}

	public function endTest() {
		unset($this->Mail);
		ClassRegistry::flush();
	}

/**
 * testAdminIndexUno method
 *
 * @return void
 */
	public function testAdminIndexUno() {
		$result = $this->_testAction('/admin/tiny_mail/mails/index');
		$this->assertContains(1, Set::classicExtract($this->vars['mails'], '{n}.Mail.id'));
		debug($result);
	}

/**
 * testAdminViewWithInvalidId method
 *
 * @return void
 */
	public function testAdminViewWithInvalidId() {
		$this->setExpectedException('NotFoundException');
		$result = $this->_testAction('/admin/tiny_mail/mails/view/0');
		debug($result);
	}

/**
 * testAdminAddWithInvalidData method
 *
 * @return void
 */
	public function testAdminAddWithInvalidData() {
		$data = array(
			'Mail' => array(
				'alias' => '',
			)
		);

		$oldCount = $this->Mail->find('count');
		$result = $this->_testAction('/admin/tiny_mail/mails/add', array('data' => $data));
		$newCount = $this->Mail->find('count');

		$this->assertSame($oldCount, $newCount);
		debug($result);
	}

/**
 * testAdminAddUno method
 *
 * @return void
 */
	public function testAdminAddUno() {
		$data = array(
			'Mail' => array(
				'alias' => 'Lorem ipsum dolor sit amet',
			)
		);

		$oldCount = $this->Mail->find('count');
		$result = $this->_testAction('/admin/tiny_mail/mails/add', array('data' => $data));
		$newCount = $this->Mail->find('count');

		$this->assertSame($oldCount + 1, $newCount);
		$this->assertContains('/admin/tiny_mail', $this->headers['Location']);
		debug($result);
	}

/**
 * testAdminEditWithInvalidId method
 *
 * @return void
 */
	public function testAdminEditWithInvalidId() {
		$this->setExpectedException('NotFoundException');
		$result = $this->_testAction('/admin/tiny_mail/mails/edit/0');
		debug($result);
	}

/**
 * testAdminEditWithInvalidData method
 *
 * @return void
 */
	public function testAdminEditWithInvalidData() {
		$data = array(
			'Mail' => array(
				'id' => 1,
				'alias' => '',
			)
		);

		$oldCount = $this->Mail->find('count');
		$result = $this->_testAction('/admin/tiny_mail/mails/edit/1', array('data' => $data));
		$newCount = $this->Mail->find('count');

		$this->assertSame($oldCount, $newCount);
		debug($result);
	}

/**
 * testAdminEditUno method
 *
 * @return void
 */
	public function testAdminEditUno() {
		$data = array(
			'Mail' => array(
				'id' => 1,
				'alias' => 'Lorem ipsum dolor sit amet',
			)
		);

		$oldUpdated = $this->Mail->field('updated', array('id' => 1));
		$result = $this->_testAction('/admin/tiny_mail/mails/edit/1', array('data' => $data));
		$newUpdated = $this->Mail->field('updated', array('id' => 1));

		$this->assertNotEquals($oldUpdated, $newUpdated);
		$this->assertContains('/admin/tiny_mail', $this->headers['Location']);
		debug($result);
	}

/**
 * testAdminDeleteWithInvalidId method
 *
 * @return void
 */
	public function testAdminDeleteWithInvalidId() {
		$this->setExpectedException('NotFoundException');
		$result = $this->_testAction('/admin/tiny_mail/mails/delete/0');
		debug($result);
	}

/**
 * testAdminDeleteWithNotAllowedMethod method
 *
 * @return void
 */
	public function testAdminDeleteWithNotAllowedMethod() {
		$this->setExpectedException('MethodNotAllowedException');
		$result = $this->_testAction('/admin/tiny_mail/mails/delete/1', array('method' => 'GET'));
		debug($result);
	}

/**
 * testAdminDeleteUno method
 *
 * @return void
 */
	public function testAdminDeleteUno() {
		$result = $this->_testAction('/admin/tiny_mail/mails/delete/1');
		debug($result);
	}

}
