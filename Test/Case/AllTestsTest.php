<?php
class AllTestsTest extends PHPUnit_Framework_TestSuite {

/**
 * suite
 *
 * @return CakeTestSuite
 */
	public static function suite() {
		$suite = new CakeTestSuite('All TinyMail tests');
		$suite->addTestDirectoryRecursive(CakePlugin::path('TinyMail') . 'Test' . DS . 'Case' . DS);
		return $suite;
	}

}
