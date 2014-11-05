<?php
Router::connect('/tiny_mail', array('plugin' => 'TinyMail', 'admin' => false, 'controller' => 'mails', 'action' => 'index'));
Router::connect('/tiny_mail/:controller', array('plugin' => 'TinyMail', 'admin' => false, 'action' => 'index'));
Router::connect('/tiny_mail/:controller/:action/*', array('plugin' => 'TinyMail', 'admin' => false));
Router::connect('/admin/tiny_mail', array('plugin' => 'TinyMail', 'admin' => true, 'controller' => 'mails', 'action' => 'index'));
Router::connect('/admin/tiny_mail/:controller', array('plugin' => 'TinyMail', 'admin' => true, 'action' => 'index'));
Router::connect('/admin/tiny_mail/:controller/:action/*', array('plugin' => 'TinyMail', 'admin' => true));
