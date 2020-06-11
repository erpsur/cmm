<?php
/**
 * @copyright	Copyright (c) 2019 - Alaniz Fabian - Soft Empresarial SA
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['email_must_be_array'] = 'El m�todo de validaci�n de correo electr�nico debe pasar una matriz.';
$lang['email_invalid_address'] = 'Direcci�n de correo electr�nico no v�lida: %s';
$lang['email_attachment_missing'] = 'No se puede localizar el siguiente archivo adjunto de correo electr�nico: %s';
$lang['email_attachment_unreadable'] = 'No se puede abrir este archivo adjunto: %s';
$lang['email_no_from'] = 'No se puede enviar correo sin encabezado "De".';
$lang['email_no_recipients'] = 'Debe incluir destinatarios';
$lang['email_send_failure_phpmail'] = 'No se puede enviar un correo electr�nico utilizando el correo PHP (). Es posible que su servidor no est� configurado para enviar correo usando este m�todo.';
$lang['email_send_failure_sendmail'] = 'No se puede enviar correo electr�nico utilizando PHP Sendmail. Es posible que su servidor no est� configurado para enviar correo usando este m�todo.';
$lang['email_send_failure_smtp'] = 'No se puede enviar correo electr�nico utilizando PHP SMTP. Es posible que su servidor no est� configurado para enviar correo usando este m�todo.';
$lang['email_sent'] = 'Su mensaje ha sido enviado exitosamente usando el siguiente protocolo: %s';
$lang['email_no_socket'] = 'No se puede abrir un socket a Sendmail. Por favor, compruebe la configuraci�n.';
$lang['email_no_hostname'] = 'No ha especificado un nombre de host SMTP.';
$lang['email_smtp_error'] = 'Se encontr� el siguiente error SMTP: %s';
$lang['email_no_smtp_unpw'] = 'Error: debe asignar un nombre de usuario y contrase�a SMTP.';
$lang['email_failed_smtp_login'] = 'Error al enviar el comando AUTH LOGIN. Error: %s';
$lang['email_smtp_auth_un'] = 'Error al autenticar el nombre de usuario. Error: %s';
$lang['email_smtp_auth_pw'] = 'Error al autenticar la contrase�a. Error: %s';
$lang['email_smtp_data_failure'] = 'No se pueden enviar datos: %s';
$lang['email_exit_status'] = 'C�digo de estado de salida: %s';
