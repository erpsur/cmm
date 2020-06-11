<?php
/**
 * @copyright	Copyright (c) 2019 - Alaniz Fabian - Soft Empresarial SA
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['db_invalid_connection_str'] = 'No se puede determinar la configuraci�n de la base de datos en funci�n de la cadena de conexi�n que envi�.';
$lang['db_unable_to_connect'] = 'No se puede conectar a su servidor de base de datos utilizando la configuraci�n proporcionada.';
$lang['db_unable_to_select'] = 'No se puede seleccionar la base de datos especificada: %s';
$lang['db_unable_to_create'] = 'No se puede crear la base de datos especificada: %s';
$lang['db_invalid_query'] = 'La consulta que ha enviado no es v�lida.';
$lang['db_must_set_table'] = 'Debe configurar la tabla de la base de datos que se utilizar� con su consulta.';
$lang['db_must_use_set'] = 'Debe utilizar el m�todo "set" para actualizar una entrada.';
$lang['db_must_use_index'] = 'Debe especificar un �ndice para que coincida en las actualizaciones por lotes.';
$lang['db_batch_missing_index'] = 'Falta una o m�s filas enviadas para la actualizaci�n por lotes del �ndice especificado.';
$lang['db_must_use_where'] = 'Las actualizaciones no est�n permitidas a menos que contengan una cl�usula "donde".';
$lang['db_del_must_use_where'] = 'No se permiten las eliminaciones a menos que contengan una cl�usula "donde" o "me gusta".';
$lang['db_field_param_missing'] = 'Para obtener los campos requiere el nombre de la tabla como par�metro.';
$lang['db_unsupported_function'] = 'Esta funci�n no est� disponible para la base de datos que est� utilizando.';
$lang['db_transaction_failure'] = 'Fallo de transacci�n: Rollback realizado.';
$lang['db_unable_to_drop'] = 'No se puede eliminar la base de datos especificada.';
$lang['db_unsupported_feature'] = 'Caracter�stica no admitida de la plataforma de base de datos que est� utilizando.';
$lang['db_unsupported_compression'] = 'El formato de compresi�n de archivos que eligi� no es compatible con su servidor.';
$lang['db_filepath_error'] = 'No se pueden escribir datos en la ruta del archivo que ha enviado.';
$lang['db_invalid_cache_path'] = 'La ruta de la cach� que ha enviado no es v�lida o no se puede escribir.';
$lang['db_table_name_required'] = 'Se requiere un nombre de tabla para esa operaci�n.';
$lang['db_column_name_required'] = 'Se requiere un nombre de columna para esa operaci�n.';
$lang['db_column_definition_required'] = 'Se requiere una definici�n de columna para esa operaci�n.';
$lang['db_unable_to_set_charset'] = 'No se puede establecer el conjunto de caracteres de conexi�n del cliente: %s';
$lang['db_error_heading'] = 'Ocurri� Un Error en la Base de Datos';
