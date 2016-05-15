<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2014.1.6
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Formularz Kontakt zgłoszenie',
	'heading' => 'Przesłano nowy formularz',
	'success_redirect' => '',
	'email' => array(
		'from' => 'kamieniarstwo.kedzierski@gmail.com',
		'to' => 'kamieniarstwo.kedzierski@gmail.com'
	),
	'fields' => array(
		'custom_U1117' => array(
			'type' => 'string',
			'label' => 'Name',
			'required' => true,
			'errors' => array(
				'required' => 'Pole „Name” jest wymagane.'
			)
		),
		'Email' => array(
			'type' => 'email',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'Pole „Email” jest wymagane.',
				'format' => 'Adres e-mail znajdujący się w polu „Email” jest nieprawidłowy.'
			)
		),
		'custom_U1105' => array(
			'type' => 'string',
			'label' => 'Message',
			'required' => true,
			'errors' => array(
				'required' => 'Pole „Message” jest wymagane.'
			)
		)
	)
);

process_form($form);
?>
