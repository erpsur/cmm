<?php

# Version 1.0.0
#
# General
$lang['id']                   = 'ID';
$lang['name']                 = 'Nombre';
$lang['options']              = 'Opciones';
$lang['submit']               = 'Guardar';
$lang['added_successfully']   = '%s agregado exitosamente.';
$lang['updated_successfully'] = '%s actualizado exitosamente';
$lang['edit']                 = 'Editar %s';
$lang['add_new']              = 'A�adir nuevo %s';
$lang['deleted']              = '%s eliminado';
$lang['problem_deleting']     = 'Problema de eliminaci�n %s';
$lang['is_referenced']        = 'El ID de %s ya se est� utilizando.';
$lang['close']                = 'Cerrar';
$lang['send']                 = 'Enviar';
$lang['cancel']               = 'Cancelar';
$lang['go_back']              = 'Regresar';
$lang['error_uploading_file'] = 'Error al subir el archivo';
$lang['load_more']            = 'Carga m�s';
$lang['cant_delete_default']  = 'No se puede eliminar por defecto %s';

# Invoice General
$lang['invoice_status_paid']                   = 'Pagado';
$lang['invoice_status_unpaid']                 = 'No pagado';
$lang['invoice_status_overdue']                = 'Atrasado';
$lang['invoice_status_not_paid_completely']    = 'Parcialmente pagado';
$lang['invoice_pdf_heading']                   = 'FACTURA';
$lang['invoice_table_item_heading']            = 'Art�culo';
$lang['invoice_table_quantity_heading']        = 'Cantidad';
$lang['invoice_table_rate_heading']            = 'Tarifa';
$lang['invoice_table_tax_heading']             = 'Impuesto';
$lang['invoice_table_amount_heading']          = 'Cantidad';
$lang['invoice_subtotal']                      = 'Sub Total';
$lang['invoice_adjustment']                    = 'Ajuste';
$lang['invoice_total']                         = 'Total';
$lang['invoice_bill_to']                       = 'Cobrar a';
$lang['invoice_data_date']                     = 'Fecha de la factura:';
$lang['invoice_data_duedate']                  = 'Fecha de vencimiento:';
$lang['invoice_received_payments']             = 'Transacciones';
$lang['invoice_no_payments_found']             = 'No se han encontrado pagos para esta factura.';
$lang['invoice_note']                          = 'Nota:';
$lang['invoice_payments_table_number_heading'] = 'Pago #';
$lang['invoice_payments_table_mode_heading']   = 'Modo de pago';
$lang['invoice_payments_table_date_heading']   = 'Fecha';
$lang['invoice_payments_table_amount_heading'] = 'Cantidad';

# Announcements
$lang['announcement']                 = 'Anuncio';
$lang['announcement_lowercase']       = 'anuncio';
$lang['announcements']                = 'Anuncios';
$lang['announcements_lowercase']      = 'anuncios';
$lang['new_announcement']             = 'Nuevo anuncio';
$lang['announcement_name']            = 'Tema';
$lang['announcement_message']         = 'Mensaje';
$lang['announcement_show_to_staff']   = 'Mostrar al personal';
$lang['announcement_show_to_clients'] = 'Mostrar a los clientes';
$lang['announcement_show_my_name']    = 'Mostrar mi nombre';

# Clients
$lang['clients']                                 = 'Clientes';
$lang['client']                                  = 'Cliente';
$lang['new_client']                              = 'Nuevo cliente';
$lang['client_lowercase']                        = 'cliente';
$lang['client_firstname']                        = 'Nombre';
$lang['client_lastname']                         = 'Apellido';
$lang['client_email']                            = 'Email';
$lang['client_company']                          = 'Empresa';
$lang['client_vat_number']                       = 'N�mero de CUIT';
$lang['client_address']                          = 'Direcci�n';
$lang['client_city']                             = 'Ciudad';
$lang['client_postal_code']                      = 'C�digo postal';
$lang['client_state']                            = 'Provincia';
$lang['client_password']                         = 'Contrase�a';
$lang['client_password_change_populate_note']    = 'Nota: si rellena este campo, la contrase�a se cambiar� en este contacto.';
$lang['client_password_last_changed']            = 'Contrase�a modificada por �ltima vez:';
$lang['login_as_client']                         = 'Iniciar sesi�n como cliente';
$lang['client_invoices_tab']                     = 'Facturas';
$lang['contracts_invoices_tab']                  = 'Contratos';
$lang['contracts_tickets_tab']                   = 'Solicitudes';
$lang['contracts_notes_tab']                     = 'Notas';
$lang['note_description']                        = 'Nota descripci�n';
$lang['client_do_not_send_welcome_email']        = 'No enviar correo de bienvenida';
$lang['clients_notes_table_description_heading'] = 'Descripci�n';
$lang['clients_notes_table_addedfrom_heading']   = 'A�adido de';
$lang['clients_notes_table_dateadded_heading']   = 'Fecha Agregada';
$lang['clients_list_full_name']                  = 'Nombre completo';
$lang['clients_list_last_login']                 = '�ltimo acceso';

# Contracts
$lang['contracts']                = 'Contratos';
$lang['contract']                 = 'Contrato';
$lang['new_contract']             = 'Nuevo contrato';
$lang['contract_lowercase']       = 'contrato';
$lang['contract_start_date']      = 'Fecha de inicio';
$lang['contract_end_date']        = 'Fecha de finalizaci�n';
$lang['contract_subject']         = 'Tema';
$lang['contract_description']     = 'Descripci�n';
$lang['contract_subject_tooltip'] = 'El sujeto tambi�n es visible para el cliente';
$lang['contract_client_string']   = 'Cliente';
$lang['contract_attach']          = 'Documento adjunto';
$lang['contract_list_client']     = 'Cliente';
$lang['contract_list_subject']    = 'Tema';
$lang['contract_list_start_date'] = 'Fecha de inicio';
$lang['contract_list_end_date']   = 'Fecha final';

# Currencies
$lang['currencies']                    = 'Monedas';
$lang['currency']                      = 'Moneda';
$lang['new_currency']                  = 'Nueva moneda';
$lang['currency_lowercase']            = 'moneda';
$lang['base_currency_set']             = 'Esta es ahora su moneda principal.';
$lang['make_base_currency']            = 'Hacer la moneda principal';
$lang['base_currency_string']          = 'Moneda Principal';
$lang['currency_list_name']            = 'Nombre';
$lang['currency_list_symbol']          = 'S�mbolo';
$lang['currency_add_edit_description'] = 'C�digo de moneda';
$lang['currency_add_edit_rate']        = 'S�mbolo';
$lang['currency_edit_heading']         = 'Editar moneda';
$lang['currency_add_heading']          = 'A�adir nueva moneda';

# Department
$lang['departments']                 = 'Departamentos';
$lang['department']                  = 'Departamento';
$lang['new_department']              = 'Nuevo departamento';
$lang['department_lowercase']        = 'Departamento';
$lang['department_name']             = 'Nombre de Departamento';
$lang['department_email']            = 'Email del Departamento';
$lang['department_hide_from_client'] = 'Ocultar del cliente?';
$lang['department_list_name']        = 'Nombre';

# Email Templates
$lang['email_templates']                        = 'Plantillas de correo electr�nico';
$lang['email_template']                         = 'Plantilla de correo electr�nico';
$lang['email_template_lowercase']               = 'plantilla de correo electr�nico';
$lang['email_templates_lowercase']              = 'Plantillas de correo electr�nico';
$lang['email_template_ticket_fields_heading']   = 'Solicitudes';
$lang['email_template_invoices_fields_heading'] = 'Facturas';
$lang['email_template_clients_fields_heading']  = 'Clientes';

$lang['template_name']                = 'Nombre de la plantilla';
$lang['template_subject']             = 'Tema';
$lang['template_fromname']            = 'De Nombre';
$lang['template_fromemail']           = 'Desde el e-mail';
$lang['send_as_plain_text']           = 'Enviar como texto sin formato';
$lang['email_template_disabled']      = 'Desactivado';
$lang['email_template_email_message'] = 'Mensaje de correo electr�nico';
$lang['available_merge_fields']       = 'Campos de combinaci�n disponibles';
# Home
$lang['dashboard_string']                          = 'Inicio';
$lang['home_latest_todos']                         = 'Trabajos por hacer';
$lang['home_no_latest_todos']                      = 'Nada para mostrar.';
$lang['home_latest_finished_todos']                = 'Trabajos terminados';
$lang['home_no_finished_todos_found']              = 'Nada para mostrar.';
$lang['home_tickets_awaiting_reply_by_department'] = 'Solicitudes en espera de respuesta por sector';
$lang['home_tickets_awaiting_reply_by_status']     = 'Solicitudes en espera de respuesta por estado';
$lang['home_this_week_events']                     = 'Eventos de esta semana';
$lang['home_upcoming_events_next_week']            = 'Pr�ximos eventos la pr�xima semana';
$lang['home_event_added_by']                       = 'Evento agregado por';
$lang['home_public_event']                         = 'Evento p�blico';
$lang['home_weekly_payment_records']               = 'Registros de pagos semanales';
$lang['home_weekend_ticket_opening_statistics']    = 'Estad�stica de aperturas de entradas semanales';
# Newsfeed
$lang['whats_on_your_mind']                                 = 'Compartir documentos, ideas ..';
$lang['new_post']                                           = 'Postear';
$lang['newsfeed_upload_tooltip']                            = 'Consejo: Arrastra y suelta archivos para subir.';
$lang['newsfeed_all_departments']                           = 'Todos los departamentos';
$lang['newsfeed_pin_post']                                  = 'Bloquear post';
$lang['newsfeed_unpin_post']                                = 'Desbloquear publicaci�n';
$lang['newsfeed_delete_post']                               = 'Borrar';
$lang['newsfeed_published_post']                            = 'Publicado';
$lang['newsfeed_you_like_this']                             = 'Te gusta esto';
$lang['newsfeed_like_this']                                 = 'Me gusta esto';
$lang['newsfeed_one_other']                                 = 'otro';
$lang['newsfeed_you']                                       = 'T�';
$lang['newsfeed_and']                                       = 'y';
$lang['newsfeed_you_and']                                   = 'Vos y';
$lang['newsfeed_like_this_saying']                          = 'Me gusta esto';
$lang['newsfeed_unlike_this_saying']                        = 'No me gusta esto';
$lang['newsfeed_show_more_comments']                        = 'Mostrar mas comentarios';
$lang['comment_this_post_placeholder']                      = 'Comenta esta publicaci�n...';
$lang['newsfeed_post_likes_modal_heading']                  = 'Compa�eros que les gusta este post';
$lang['newsfeed_comment_likes_modal_heading']               = 'Compa�eros que les gusta este comentario.';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'Esta publicaci�n solo es visible para los siguientes departamentos: %s';

# Invoice Items
$lang['invoice_items']                     = 'Art�culos de factura';
$lang['invoice_item']                      = 'Art�culo de factura';
$lang['new_invoice_item']                  = 'Nuevo art�culo';
$lang['invoice_item_lowercase']            = 'art�culos de factura';
$lang['invoice_items_list_description']    = 'Descripci�n';
$lang['invoice_items_list_rate']           = 'Precio';
$lang['invoice_item_add_edit_description'] = 'Descripci�n';
$lang['invoice_item_add_edit_rate']        = 'Precio';
$lang['invoice_item_edit_heading']         = 'Editar elemento';
$lang['invoice_item_add_heading']          = 'Agregar art�culo nuevo';

# Invoices
$lang['invoices']                                = 'Facturas';
$lang['invoice']                                 = 'Factura';
$lang['invoice_lowercase']                       = 'factura';
$lang['create_new_invoice']                      = 'Crear nueva factura';
$lang['view_invoice']                            = 'Ver la factura';
$lang['invoice_payment_recorded']                = 'Pago de factura registrado';
$lang['invoice_payment_record_failed']           = 'Error al registrar el pago de la factura';
$lang['invoice_sent_to_client_success']          = 'La factura se env�a con �xito al cliente.';
$lang['invoice_sent_to_client_fail']             = 'Problema al enviar la factura';
$lang['invoice_reminder_send_problem']           = 'Problema al enviar factura recordatorio de vencimiento';
$lang['invoice_overdue_reminder_sent']           = 'Aviso de vencimiento de factura enviado con �xito';
$lang['invoice_details']                         = 'Detalles de la factura';
$lang['invoice_view']                            = 'Mirar la factura';
$lang['invoice_select_customer']                 = 'Cliente';
$lang['invoice_add_edit_number']                 = 'N�mero de factura';
$lang['invoice_add_edit_date']                   = 'Fecha de la factura';
$lang['invoice_add_edit_duedate']                = 'Fecha de vencimiento';
$lang['invoice_add_edit_currency']               = 'Moneda';
$lang['invoice_add_edit_client_note']            = 'Nota del cliente';
$lang['invoice_add_edit_admin_note']             = 'Nota de administrador';
$lang['invoices_toggle_table_tooltip']           = 'Tabla';
$lang['edit_invoice_tooltip']                    = 'Editar factura';
$lang['delete_invoice_tooltip']                  = 'Eliminar factura. Nota: Todos los pagos relacionados con esta factura se eliminar�n (si corresponde).';
$lang['invoice_sent_to_email_tooltip']           = 'Enviar al email';
$lang['invoice_already_send_to_client_tooltip']  = 'Esta factura ya se ha enviado al cliente. %s';
$lang['send_overdue_notice_tooltip']             = 'Enviar aviso de vencimiento';
$lang['invoice_view_activity_tooltip']           = 'Registro de actividades';
$lang['invoice_record_payment']                  = 'Pago de registro';
$lang['invoice_send_to_client_modal_heading']    = 'Enviar factura al cliente';
$lang['invoice_send_to_client_attach_pdf']       = 'Adjuntar factura PDF';
$lang['invoice_send_to_client_preview_template'] = 'Vista previa de la plantilla del email';
$lang['invoice_dt_table_heading_number']         = 'Factura #';
$lang['invoice_dt_table_heading_date']           = 'Fecha';
$lang['invoice_dt_table_heading_client']         = 'Cliente';
$lang['invoice_dt_table_heading_duedate']        = 'Fecha de vencimiento';
$lang['invoice_dt_table_heading_amount']         = 'Cantidad';
$lang['invoice_dt_table_heading_status']         = 'Estado';
$lang['record_payment_for_invoice']              = 'Pagado por';
$lang['record_payment_amount_received']          = 'Cantidad recibida';
$lang['record_payment_date']                     = 'Fecha de pago';
$lang['record_payment_leave_note']               = 'Dejar una nota';
$lang['invoice_payments_received']               = 'Pagos recibidos';
$lang['invoice_record_payment_note_placeholder'] = 'Nota de administrador';
$lang['no_payments_found']                       = 'No se han encontrado pagos para esta factura.';

# Payments
$lang['payments']                             = 'Pagos';
$lang['payment']                              = 'Pago';
$lang['payment_lowercase']                    = 'pago';
$lang['payments_table_number_heading']        = 'Pago #';
$lang['payments_table_invoicenumber_heading'] = 'Factura #';
$lang['payments_table_mode_heading']          = 'Modo de pago';
$lang['payments_table_date_heading']          = 'Fecha';
$lang['payments_table_amount_heading']        = 'Cantidad';
$lang['payments_table_client_heading']        = 'Cliente';
$lang['payment_not_exists']                   = 'El pago no existe.';
$lang['payment_edit_for_invoice']             = 'Pago por factura';
$lang['payment_edit_amount_received']         = 'Cantidad recibida';
$lang['payment_edit_date']                    = 'Fecha de pago';

# Knowledge Base
$lang['kb_article_add_edit_subject']   = 'Tema';
$lang['kb_article_add_edit_group']     = 'Grupo';
$lang['kb_string']                     = 'Manuales';
$lang['kb_article']                    = 'Manual';
$lang['kb_article_lowercase']          = 'manual';
$lang['kb_article_new_article']        = 'Nuevo Manual';
$lang['kb_article_disabled']           = 'Desactivado';
$lang['kb_article_description']        = 'Descripci�n del manual';
$lang['kb_no_articles_found']          = 'No se han encontrado manuales.';
$lang['kb_dt_article_name']            = 'Nombre del manual';
$lang['kb_dt_group_name']              = 'Grupo';
$lang['new_group']                     = 'Nuevo grupo';
$lang['kb_group_add_edit_name']        = 'Nombre del grupo';
$lang['kb_group_add_edit_description'] = 'Breve descripci�n';
$lang['kb_group_add_edit_disabled']    = 'Desactivado';
$lang['kb_group_add_edit_note']        = 'Nota: todos los art�culos de este grupo se ocultar�n si se selecciona deshabilitado';
$lang['group_table_name_heading']      = 'Nombre';
$lang['group_table_isactive_heading']  = 'Activo';
$lang['kb_no_groups_found']            = 'No se encontraron grupos de base de conocimiento';

# Mail Lists
$lang['mail_lists']                            = 'Listas de correo';
$lang['mail_list']                             = 'Lista de correo';
$lang['new_mail_list']                         = 'Nueva lista de correo';
$lang['mail_list_lowercase']                   = 'lista de correo';
$lang['custom_field_deleted_success']          = 'Campo personalizado eliminado';
$lang['custom_field_deleted_fail']             = 'Problema al eliminar el campo personalizado';
$lang['email_removed_from_list']               = 'Correo electr�nico eliminado de la lista';
$lang['email_remove_fail']                     = 'Correo electr�nico eliminado de la lista';
$lang['staff_mail_lists']                      = 'Lista de correos del personal';
$lang['clients_mail_lists']                    = 'Lista de correos de clientes';
$lang['mail_list_total_imported']              = 'Total de correos importados: %s';
$lang['mail_list_total_duplicate']             = 'Total de correos duplicados: %s';
$lang['mail_list_total_failed_to_insert']      = 'Los correos electr�nicos no pudieron insertar: %s';
$lang['mail_list_total_invalid']               = 'Direcci�n de correo electr�nico no v�lida: %s';
$lang['cant_edit_mail_list']                   = 'No puedes editar esta lista, esta lista se rellena autom�ticamente.';
$lang['mail_list_add_edit_name']               = 'Nombre de la lista de correo';
$lang['mail_list_add_edit_customfield']        = 'A�adir campo personalizado';
$lang['mail_lists_view_email_email_heading']   = 'Email';
$lang['mail_lists_view_email_date_heading']    = 'Fecha Agregada';
$lang['add_new_email_to']                      = 'A�adir nuevo correo electr�nico a %s';
$lang['import_emails_to']                      = 'Importar correos electr�nicos a %s';
$lang['mail_list_new_email_edit_add_label']    = 'Email';
$lang['mail_list_import_file']                 = 'Importar archivo';
$lang['mail_list_available_custom_fields']     = 'Campos personalizados disponibles';
$lang['submit_import_emails']                  = 'Importar correos electr�nicos';
$lang['btn_import_emails']                     = 'Importar correos electr�nicos (Excel)';
$lang['btn_add_email_to_list']                 = 'A�adir correo electr�nico a esta lista';
$lang['mail_lists_dt_list_name']               = 'Lista de nombres';
$lang['mail_lists_dt_datecreated']             = 'Fecha de creacion';
$lang['mail_lists_dt_creator']                 = 'Creador';
$lang['email_added_to_mail_list_successfully'] = 'Email agregado a la lista';
$lang['email_is_duplicate_mail_list']          = 'El correo electr�nico ya existe en esta lista';

# Media
$lang['media_files'] = 'Files';

# Payment modes
$lang['new_payment_mode']           = 'Nuevo modo de pago';
$lang['payment_modes']              = 'Modos de pago';
$lang['payment_mode']               = 'Modo de pago';
$lang['payment_mode_lowercase']     = 'modo de pago';
$lang['payment_modes_dt_name']      = 'Nombre del modo de pago';
$lang['payment_mode_add_edit_name'] = 'Nombre del modo de pago';
$lang['payment_mode_edit_heading']  = 'Editar modo de pago';
$lang['payment_mode_add_heading']   = 'A�adir nuevo modo de pago';

# Predefined Ticket Replies
$lang['new_predefined_reply']              = 'Nueva respuesta predefinida';
$lang['predefined_replies']                = 'Respuestas predefinidas';
$lang['predefined_reply']                  = 'Respuesta predefinida';
$lang['predefined_reply_lowercase']        = 'respuesta predefinida';
$lang['predefined_replies_dt_name']        = 'Nombre de respuesta predefinido';
$lang['predefined_reply_add_edit_name']    = 'Nombre de respuesta predefinido';
$lang['predefined_reply_add_edit_content'] = 'Responder contenido';

# Ticket Priorities
$lang['new_ticket_priority']           = 'Nueva prioridad';
$lang['ticket_priorities']             = 'Prioridades de solicitudes';
$lang['ticket_priority']               = 'Prioridad de solicitud';
$lang['ticket_priority_lowercase']     = 'prioridad de la solicitud';
$lang['no_ticket_priorities_found']    = 'No se encontraron prioridades de solicitudes';
$lang['ticket_priority_dt_name']       = 'Nombre de prioridad de la solicitud';
$lang['ticket_priority_add_edit_name'] = 'Nombre de prioridad';

# Reports
$lang['kb_reports']                                       = 'Informes de manuales.';
$lang['sales_reports']                                    = 'Reportes de ventas';
$lang['reports_choose_kb_group']                          = 'Elegir grupo';
$lang['report_kb_yes']                                    = 'S�';
$lang['report_kb_no']                                     = 'No';
$lang['report_kb_no_votes']                               = 'No hay votos todav�a';
$lang['report_this_week_leads_conversions']               = 'Conversiones de la semana';
$lang['report_leads_sources_conversions']                 = 'Conversi�n de fuentes';
$lang['report_leads_monthly_conversions']                 = 'Mensual';
$lang['sales_report_heading']                             = 'Reporte de ventas';
$lang['report_sales_type_income']                         = 'Ingresos totales';
$lang['report_sales_type_customer']                       = 'Informe de clientes';
$lang['report_sales_base_currency_select_explanation']    = 'Necesita seleccionar moneda porque tiene facturas con moneda diferente';
$lang['report_sales_from_date']                           = 'Desde la fecha';
$lang['report_sales_to_date']                             = 'Hasta la fecha';
$lang['report_sales_months_all_time']                     = 'Todo el tiempo';
$lang['report_sales_months_six_months']                   = '�ltimos 6 meses';
$lang['report_sales_months_twelve_months']                = '�ltimos 12 meses';
$lang['reports_sales_generated_report']                   = 'Reporte generado';
$lang['reports_sales_dt_customers_client']                = 'Cliente';
$lang['reports_sales_dt_customers_total_invoices']        = 'Facturas Totales';
$lang['reports_sales_dt_items_customers_amount']          = 'Cantidad';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = 'Importe con Impuesto';

# Roles
$lang['new_role']           = 'Nuevo rol';
$lang['all_roles']          = 'Todos los Roles';
$lang['roles']              = 'Roles del personal';
$lang['role']               = 'Rol';
$lang['role_lowercase']     = 'rol';
$lang['roles_total_users']  = 'Usuarios totales: ';
$lang['roles_dt_name']      = 'Nombre de rol';
$lang['role_add_edit_name'] = 'Nombre de rol';

# Service
$lang['new_service']           = 'Nuevo servicio';
$lang['services']              = 'Servicios';
$lang['service']               = 'Servicio';
$lang['service_lowercase']     = 'servicio';
$lang['services_dt_name']      = 'Nombre del Servicio';
$lang['service_add_edit_name'] = 'Nombre del Servicio';

# Settings
$lang['settings']                                                  = 'Ajustes';
$lang['settings_updated']                                          = 'Ajustes actualizan';
$lang['settings_save']                                             = 'Guardar ajustes';
$lang['settings_group_general']                                    = 'General';
$lang['settings_group_localization']                               = 'Localizaci�n';
$lang['settings_group_tickets']                                    = 'Solicitudes';
$lang['settings_group_sales']                                      = 'Financiar';
$lang['settings_group_email']                                      = 'Email';
$lang['settings_group_clients']                                    = 'Clientes';
$lang['settings_group_newsfeed']                                   = 'Noticias';
$lang['settings_group_cronjob']                                    = 'Sistemas';
$lang['settings_yes']                                              = 'S�';
$lang['settings_no']                                               = 'No';
$lang['settings_clients_default_theme']                            = 'Tema de clientes por defecto';
$lang['settings_clients_allow_registration']                       = 'Permitir a los clientes registrarse';
$lang['settings_clients_allow_kb_view_without_registration']       = 'Permitir que la base de conocimientos se vea sin registro';
$lang['settings_cron_send_overdue_reminder']                       = 'Enviar factura recordatorio de vencimiento';
$lang['settings_cron_send_overdue_reminder_tooltip']               = 'Env�e el correo electr�nico vencido al cliente cuando el estado de la factura se actualice como vencido por sistema';
$lang['automatically_send_invoice_overdue_reminder_after']         = 'Auto enviar recordatorio despu�s de (d�as)';
$lang['automatically_resend_invoice_overdue_reminder_after']       = 'Recordatorio de reenv�o autom�tico despu�s de (d�as)';
$lang['settings_email_host']                                       = 'SMTP Host';
$lang['settings_email_port']                                       = 'SMTP Puerto';
$lang['settings_email']                                            = 'Email';
$lang['settings_email_password']                                   = 'SMTP Contrase�a';
$lang['settings_email_charset']                                    = 'Correo electr�nico Charset';
$lang['settings_email_signature']                                  = 'Firma de email';
$lang['settings_general_company_logo']                             = 'Logo de la Empresa';
$lang['settings_general_company_logo_tooltip']                     = 'Dimensiones recomendadas: 150 x 34px';
$lang['settings_general_company_remove_logo_tooltip']              = 'Quitar logo de la empresa';
$lang['settings_general_company_name']                             = 'Nombre de empresa';
$lang['settings_general_company_main_domain']                      = 'Dominio principal de empresa';
$lang['settings_general_use_knowledgebase']                        = 'Usar manuales';
$lang['settings_general_use_knowledgebase_tooltip']                = 'Si permite esta opci�n, la base de conocimientos se mostrar� tambi�n en el lado del cliente.';
$lang['settings_general_tables_limit']                             = 'L�mite de paginaci�n de tablas';
$lang['settings_general_default_staff_role']                       = 'Rol de personal predeterminado';
$lang['settings_general_default_staff_role_tooltip']               = 'Cuando agregue un nuevo miembro del personal, esta funci�n se seleccionar� de forma predeterminada';
$lang['settings_localization_date_format']                         = 'Formato de fecha';
$lang['settings_localization_default_timezone']                    = 'Zona horaria predeterminada';
$lang['settings_localization_default_language']                    = 'Idioma predeterminado';
$lang['settings_newsfeed_max_file_upload_post']                    = 'Carga m�xima de archivos en la publicaci�n';
$lang['settings_reminders_contracts']                              = 'Recordatorio de vencimiento del contrato antes';
$lang['settings_reminders_contracts_tooltip']                      = 'Aviso de vencimiento en d�as.';
$lang['settings_tickets_use_services']                             = 'Servicios de uso';
$lang['settings_tickets_max_attachments']                          = 'Entradas m�ximas para los billetes';
$lang['settings_tickets_allow_departments_access']                 = 'Permitir que el personal acceda solo al ticket que pertenece a los departamentos del personal';
$lang['settings_tickets_allowed_file_extensions']                  = 'Extensiones de archivos adjuntos permitidos';
$lang['settings_sales_general']                                    = 'General';
$lang['settings_sales_general_note']                               = 'Ajustes generales';
$lang['settings_sales_invoice_prefix']                             = 'Prefijo de n�mero de factura';
$lang['settings_sales_decimal_separator']                          = 'Separador decimal';
$lang['settings_sales_thousand_separator']                         = 'Mil separador';
$lang['settings_sales_currency_placement']                         = 'Colocaci�n de moneda';
$lang['settings_sales_currency_placement_before']                  = 'Antes de la cantidad';
$lang['settings_sales_currency_placement_after']                   = 'Despu�s de la cantidad';
$lang['settings_sales_require_client_logged_in_to_view_invoice']   = 'Requiere que el cliente est� conectado para ver la factura';
$lang['settings_sales_next_invoice_number']                        = 'N�mero de factura siguiente';
$lang['settings_sales_next_invoice_number_tooltip']                = 'Establezca este campo en 1 si desea comenzar desde el principio';
$lang['settings_sales_decrement_invoice_number_on_delete']         = 'Disminuir el n�mero de factura en la eliminaci�n';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = '�Desea disminuir el n�mero de factura cuando se borra la �ltima factura? eq. Si se establece esta opci�n en S� y antes de eliminar la factura, el n�mero de la pr�xima factura es 15, el n�mero de la siguiente factura disminuir� a 14. Si se establece en NO, el n�mero permanecer� en 15. Si ha configurado la eliminaci�n solo en la �ltima factura para NO Deber�a establecer esta opci�n en NO tambi�n para mantener el siguiente n�mero de factura sin disminuir.';
$lang['settings_sales_invoice_number_format']                      = 'Formato de n�mero de factura';
$lang['settings_sales_invoice_number_format_year_based']           = 'Basado en el a�o';
$lang['settings_sales_invoice_number_format_number_based']         = 'Basado en numero (000001)';
$lang['settings_sales_company_info_note']                          = 'Esta informaci�n se mostrar� en las facturas / presupuestos / pagos y otros documentos PDF donde se requiera la informaci�n de la compa��a.';
$lang['settings_sales_company_name']                               = 'Nombre de empresa';
$lang['settings_sales_address']                                    = 'Direcci�n';
$lang['settings_sales_city']                                       = 'Ciudad';
$lang['settings_sales_country_code']                               = 'C�digo de pa�s';
$lang['settings_sales_postal_code']                                = 'C�digo postal';
$lang['settings_sales_phonenumber']                                = 'Tel�fono';

# Leads
$lang['new_lead']                          = 'Nuevo cliente potencial';
$lang['leads']                             = 'Oportunidades';
$lang['lead']                              = 'Oportunidad';
$lang['lead_lowercase']                    = 'oportunidad';
$lang['leads_all']                         = 'Todos';
$lang['leads_canban_notes']                = 'Notas: %s';
$lang['leads_canban_source']               = 'Fuente: %s';
$lang['lead_new_source']                   = 'Nueva fuente';
$lang['lead_sources']                      = 'Fuentes de oportunidad';
$lang['lead_source']                       = 'Fuente de oportunidad';
$lang['lead_source_lowercase']             = 'fuente de oportunidad';
$lang['leads_sources_not_found']           = 'No se han encontrado fuentes de oportunidad.';
$lang['leads_sources_table_name']          = 'Nombre de la fuente';
$lang['leads_source_add_edit_name']        = 'Nombre de la fuente';
$lang['lead_new_status']                   = 'Nuevo estado de oportunidad';
$lang['lead_status']                       = 'Estado de oportunidad';
$lang['lead_status_lowercase']             = 'estado de oportunidad';
$lang['leads_status_table_name']           = 'Nombre de estado';
$lang['leads_status_add_edit_name']        = 'Nombre de estado';
$lang['leads_status_add_edit_order']       = 'Orden';
$lang['lead_statuses_not_found']           = 'No se han encontrado estados de oportunidades';
$lang['leads_search']                      = 'Buscar clientes potenciales';
$lang['leads_table_total']                 = 'Total clientes potenciales: %s';
$lang['leads_dt_name']                     = 'Nombre';
$lang['leads_dt_email']                    = 'Email';
$lang['leads_dt_phonenumber']              = 'Tel�fono';
$lang['leads_dt_assigned']                 = 'Asignado';
$lang['leads_dt_status']                   = 'Provincia';
$lang['leads_dt_last_contact']             = 'Ultimo contacto';
$lang['lead_add_edit_name']                = 'Nombre';
$lang['lead_add_edit_email']               = 'Direcci�n de correo electr�nico';
$lang['lead_add_edit_phonenumber']         = 'Tel�fono';
$lang['lead_add_edit_source']              = 'Fuente';
$lang['lead_add_edit_status']              = 'Provincia';
$lang['lead_add_edit_assigned']            = 'Asignado';
$lang['lead_add_edit_datecontacted']       = 'Fecha contactada';
$lang['lead_add_edit_contacted_today']     = 'Contactado hoy';
$lang['lead_add_edit_activity']            = 'Registro de actividades';
$lang['lead_add_edit_notes']               = 'Notas';
$lang['lead_add_edit_add_note']            = 'Agregar nota';
$lang['lead_not_contacted']                = 'No he contactado con este cliente';
$lang['lead_add_edit_contacted_this_lead'] = 'Me puse en contacto con este cliente';

# Misc
$lang['access_denied'] = 'Acceso denegado';
$lang['prev']          = 'Ant';
$lang['next']          = 'Sig';

# Datatables
$lang['dt_paginate_first']    = 'Primera';
$lang['dt_paginate_last']     = '�ltima';
$lang['dt_paginate_next']     = 'Siguiente';
$lang['dt_paginate_previous'] = 'Anterior';
$lang['dt_search']            = 'Buscar...';
$lang['dt_zero_records']      = 'No se encontraron registros coincidentes';
$lang['dt_loading_records']   = 'Cargando...';
$lang['dt_length_menu']       = 'Mostrar _MENU_ entradas';
$lang['dt_info_filtered']     = '(filtered from _MAX_ total {0})';
$lang['dt_info_empty']        = 'Demostraci�n 0 a 0 de 0 {0}';
$lang['dt_info']              = 'Demostraci�n _START_ a _END_ de _TOTAL_ {0}';
$lang['dt_empty_table']       = 'No hay {0}';
$lang['dt_sort_ascending']    = ' activar para ordenar la columna ascendente';
$lang['dt_sort_descending']   = ' activar para ordenar la columna descendente';

# Invoice Activity Log
$lang['user_sent_overdue_reminder'] = '%s sent invoice overdue reminder';

# Weekdays
$lang['wd_monday']    = 'Lunes';
$lang['wd_tuesday']   = 'Martes';
$lang['wd_wednesday'] = 'Mi�rcoles';
$lang['wd_thursday']  = 'Jueves';
$lang['wd_friday']    = 'Viernes';
$lang['wd_saturday']  = 'S�bado';
$lang['wd_sunday']    = 'Domingo';

# Admin Left Sidebar
$lang['als_dashboard']             = 'Inicio';
$lang['als_clients']               = 'Clientes';
$lang['als_leads']                 = 'Oportunidades';
$lang['als_contracts']             = 'Contratos';
$lang['als_sales']                 = 'Ventas';
$lang['als_staff']                 = 'Personal';
$lang['als_tasks']                 = 'Ordenes de trabajo';
$lang['als_kb']                    = 'Manuales';
$lang['als_surveys']               = 'Encuestas';
$lang['als_media']                 = 'Media';
$lang['als_reports']               = 'Reportes';
$lang['als_reports_sales_submenu'] = 'Ventas';
$lang['als_reports_leads_submenu'] = 'Oportunidades';
$lang['als_kb_articles_submenu']   = 'Manuales';
$lang['als_utilities']             = 'Utilidades';
$lang['als_announcements_submenu'] = 'Anuncios';
$lang['als_calendar_submenu']      = 'Calendario';
$lang['als_activity_log_submenu']  = 'Registro de actividades';

# Admin Customizer Sidebar
$lang['acs_ticket_priority_submenu']           = 'Prioridad de solicitud';
$lang['acs_ticket_statuses_submenu']           = 'Estados de la solicitud';
$lang['acs_ticket_predefined_replies_submenu'] = 'Respuestas predefinidas';
$lang['acs_ticket_services_submenu']           = 'Servicios';
$lang['acs_departments']                       = 'Sectores';
$lang['acs_leads']                             = 'Oportunidades';
$lang['acs_leads_sources_submenu']             = 'Fuentes';
$lang['acs_leads_statuses_submenu']            = 'Estados';
$lang['acs_sales_taxes_submenu']               = 'Las tasas de impuestos';
$lang['acs_sales_currencies_submenu']          = 'Monedas';
$lang['acs_sales_payment_modes_submenu']       = 'Modos de pago';
$lang['acs_email_templates']                   = 'Plantillas de correo electr�nico';
$lang['acs_roles']                             = 'Roles';
$lang['acs_settings']                          = 'Opciones <br><br><br><br><br>';

# Tickets
$lang['new_ticket']                                          = 'Abrir nueva solicitud';
$lang['tickets']                                             = 'Solicitudes';
$lang['ticket']                                              = 'Solicitud';
$lang['ticket_lowercase']                                    = 'solicitud';
$lang['support_tickets']                                     = 'Entrada de solicitudes';
$lang['support_ticket']                                      = 'Entrada de solicitud';
$lang['ticket_settings_to']                                  = 'Nombre';
$lang['ticket_settings_email']                               = 'Email';
$lang['ticket_settings_departments']                         = 'Sector';
$lang['ticket_settings_service']                             = 'Servicio';
$lang['ticket_settings_priority']                            = 'Prioridad';
$lang['ticket_settings_subject']                             = 'Tema';
$lang['ticket_settings_assign_to']                           = 'Asignar solicitud (por defecto es el usuario actual)';
$lang['ticket_add_body']                                     = 'Cuerpo de la solicitud';
$lang['ticket_add_attachments']                              = 'Archivos adjuntos';
$lang['ticket_no_reply_yet']                                 = 'A�n no hay respuesta';
$lang['new_ticket_added_successfully']                       = 'Solicitud #%s agregado exitosamente';
$lang['replied_to_ticket_successfully']                      = 'Respondi� a la Solicitud #%s exitosamente';
$lang['ticket_settings_updated_successfully']                = 'Configuraciones de solicitudes actualizadas exitosamente';
$lang['ticket_settings_updated_successfully_and_reassigned'] = 'Configuraciones de solicitudes actualizadas exitosamente - reasignadas a sector %s';
$lang['ticket_dt_subject']                                   = 'Tema';
$lang['ticket_dt_department']                                = 'Sector';
$lang['ticket_dt_service']                                   = 'Servicio';
$lang['ticket_dt_submitter']                                 = 'Contacto';
$lang['ticket_dt_status']                                    = 'Estado';
$lang['ticket_dt_priority']                                  = 'Prioridad';
$lang['ticket_dt_last_reply']                                = '�ltima respuesta';
$lang['ticket_single_add_reply']                             = 'Agregar respuesta';
$lang['ticket_single_add_note']                              = 'Agregar nota';
$lang['ticket_single_other_user_tickets']                    = 'Otras solicitudes';
$lang['ticket_single_settings']                              = 'Opciones';
$lang['ticket_single_priority']                              = 'Prioridad: %s';
$lang['ticket_single_last_reply']                            = '�ltima respuesta: %s';
$lang['ticket_single_ticket_note_by']                        = 'Solicitudes escrita por %s';
$lang['ticket_single_note_added']                            = 'Nota a�adida: %s';
$lang['ticket_single_change_status']                         = 'Cambiar Estado';
$lang['ticket_single_assign_to_me_on_update']                = 'Asignarme esta solicitud autom�ticamente';
$lang['ticket_single_insert_predefined_reply']               = 'Insertar respuesta predefinida';
$lang['ticket_single_insert_knowledge_base_link']            = 'Insertar enlace de manuales';
$lang['ticket_single_attachments']                           = 'Archivos adjuntos';
$lang['ticket_single_add_response']                          = 'A�adir respuesta';
$lang['ticket_single_note_heading']                          = 'Nota';
$lang['ticket_single_add_note']                              = 'A�adir nota';
$lang['ticket_settings_none_assigned']                       = 'Ninguna';
$lang['ticket_status_changed_successfully']                  = 'Estado de la solicitud modificado';
$lang['ticket_status_changed_fail']                          = 'Problema al cambiar el estado de la solicitud';
$lang['ticket_staff_string']                                 = 'Personal';
$lang['ticket_client_string']                                = 'Cliente';
$lang['ticket_posted']                                       = 'Publicada: %s';
$lang['ticket_access_by_department_denied']                  = 'No tienes acceso a este solicitud. Pertenece a un sector al que no est� asignado.';

# Staff
$lang['new_staff']                                     = 'Nuevo miembro del personal';
$lang['staff_members']                                 = 'Miembros del personal';
$lang['staff_member']                                  = 'Miembro del personal';
$lang['staff_member_lowercase']                        = 'miembros del personal';
$lang['staff_profile_updated']                         = 'Tu perfil ha sido actualizado';
$lang['staff_old_password_incorrect']                  = 'Tu contrase�a anterior es incorrecta';
$lang['staff_password_changed']                        = 'Tu contrase�a ha sido cambiada';
$lang['staff_problem_changing_password']               = 'Problema al cambiar tu contrase�a';
$lang['staff_profile_string']                          = 'Perfil';
$lang['staff_cant_remove_main_admin']                  = 'No puede quitar al administrador principal';
$lang['staff_cant_remove_yourself_from_admin']         = 'No puedes quitarte el rol de administrador';
$lang['staff_dt_name']                                 = 'Nombre completo';
$lang['staff_dt_email']                                = 'Email';
$lang['staff_dt_last_Login']                           = '�ltimo acceso';
$lang['staff_dt_active']                               = 'Activo';
$lang['staff_add_edit_firstname']                      = 'Nombre';
$lang['staff_add_edit_lastname']                       = 'Apellido';
$lang['staff_add_edit_email']                          = 'Email';
$lang['staff_add_edit_phonenumber']                    = 'Celular';
$lang['staff_add_edit_facebook']                       = ' ';
$lang['staff_add_edit_linkedin']                       = ' ';
$lang['staff_add_edit_skype']                          = ' ';
$lang['staff_add_edit_departments']                    = 'Miembros del sector';
$lang['staff_add_edit_role']                           = 'Rol';
$lang['staff_add_edit_permissions']                    = 'Permisos';
$lang['staff_add_edit_administrator']                  = 'Administrador';
$lang['staff_add_edit_password']                       = 'Contrase�a';
$lang['staff_add_edit_password_note']                  = 'Nota: si llena este campo, la contrase�a se cambiar� en este miembro.';
$lang['staff_add_edit_password_last_changed']          = 'Contrase�a modificada por �ltima vez';
$lang['staff_add_edit_notes']                          = 'Notas';
$lang['staff_add_edit_note_description']               = 'Nota de descripci�n';
$lang['staff_notes_table_description_heading']         = 'Nota';
$lang['staff_notes_table_addedfrom_heading']           = 'Agregado de';
$lang['staff_notes_table_dateadded_heading']           = 'Fecha Agregada';
$lang['staff_admin_profile']                           = 'Este es el perfil de administrador';
$lang['staff_profile_notifications']                   = 'Notificaciones';
$lang['staff_profile_departments']                     = 'Sectores';
$lang['staff_edit_profile_image']                      = 'Imagen de perfil';
$lang['staff_edit_profile_your_departments']           = 'Sectores';
$lang['staff_edit_profile_change_your_password']       = 'Cambiar contrase�a';
$lang['staff_edit_profile_change_old_password']        = 'Contrase�a anterior';
$lang['staff_edit_profile_change_new_password']        = 'Nueva contrase�a';
$lang['staff_edit_profile_change_repeat_new_password'] = 'Repita la nueva contrase�a';

# Surveys
$lang['new_survey']                                = 'Nueva encuesta';
$lang['surveys']                                   = 'Encuestas';
$lang['survey']                                    = 'Encuesta';
$lang['survey_lowercase']                          = 'encuesta';
$lang['survey_no_mail_lists_selected']             = 'No hay listas de email seleccionadas';
$lang['survey_send_success_note']                  = 'Todos los email de encuestas (%s) se enviar�n a trav�s de sistemas';
$lang['survey_result']                             = 'Resultado de la encuesta: %s';
$lang['question_string']                           = 'Pregunta';
$lang['question_field_string']                     = 'Campo';
$lang['survey_list_view_tooltip']                  = 'Ver encuesta';
$lang['survey_list_view_results_tooltip']          = 'Ver resultados';
$lang['survey_add_edit_subject']                   = 'Tema de la encuesta';
$lang['survey_add_edit_email_description']         = 'Descripci�n de la encuesta (Descripci�n del email)';
$lang['survey_include_survey_link']                = 'Incluir enlace de encuesta en la descripci�n';
$lang['survey_available_mail_lists_custom_fields'] = 'Campos personalizados disponibles de las listas de email';
$lang['survey_mail_lists_custom_fields_tooltip']   = 'Los campos personalizados se pueden utilizar para el editor de email.';
$lang['survey_add_edit_short_description_view']    = 'Breve descripci�n de la encuesta (Ver descripci�n)';
$lang['survey_add_edit_from']                      = 'De (se muestra en el email)';
$lang['survey_add_edit_redirect_url']              = 'Encuesta redireccionar URL';
$lang['survey_add_edit_red_url_note']              = 'Cuando el usuario finalice la encuesta d�nde se redirige (deje en blanco para esta URL del sitio)';
$lang['survey_add_edit_disabled']                  = 'Desactivado';
$lang['survey_add_edit_only_for_logged_in']        = 'Solo para participantes registrados (personal, clientes)';
$lang['send_survey_string']                        = 'Enviar encuesta';
$lang['survey_send_mail_list_clients']             = 'Clientes';
$lang['survey_send_mail_list_staff']               = 'Personal';
$lang['survey_send_mail_lists_string']             = 'Listas de correo';
$lang['survey_send_mail_lists_note_logged_in']     = 'Nota: si est� enviando la encuesta a las listas de email, solo debe deseleccionar a los participantes registrados.';
$lang['survey_send_string']                        = 'Enviar';
$lang['survey_send_to_total']                      = 'Enviar al total de %s email';
$lang['survey_send_till_now']                      = 'Hasta ahora';
$lang['survey_send_finished']                      = 'Encuesta terminada: %s';
$lang['survey_added_to_queue']                     = 'Esta encuesta se agrega al sistema en %s';
$lang['survey_questions_string']                   = 'Preguntas';
$lang['survey_insert_field']                       = 'Insertar campo';
$lang['survey_field_checkbox']                     = 'Casilla de verificaci�n';
$lang['survey_field_radio']                        = 'Llegada';
$lang['survey_field_input']                        = 'Campo de entrada';
$lang['survey_field_textarea']                     = 'Area de texto';
$lang['survey_question_required']                  = 'Necesario';
$lang['survey_question_only_for_preview']          = 'Solo para previsualizar';
$lang['survey_create_first']                       = 'Primero debe crear la encuesta y luego podr� insertar las preguntas.';
$lang['survey_dt_name']                            = 'Nombre';
$lang['survey_dt_total_questions']                 = 'Total de preguntas';
$lang['survey_dt_total_participants']              = 'Participantes Totales';
$lang['survey_dt_date_created']                    = 'Fecha de creacion';
$lang['survey_dt_active']                          = 'Activa';
$lang['survey_text_questions_results']             = 'Resultado de preguntas';
$lang['survey_view_all_answers']                   = 'Ver todas las respuestas';

# Staff Tasks
$lang['new_task']                           = 'Nueva tarea';
$lang['tasks']                              = 'Tareas';
$lang['task']                               = 'Tarea';
$lang['task_lowercase']                     = 'tarea';
$lang['comment_string']                     = 'Comentario';
$lang['task_marked_as_complete']            = 'Tarea marcada como completa';
$lang['task_follower_removed']              = 'Seguidor de tareas eliminado con �xito';
$lang['task_assignee_removed']              = 'Tarea asignada eliminada con �xito';
$lang['task_no_assignees']                  = 'No hay asignados para esta tarea.';
$lang['task_no_followers']                  = 'No hay seguidores para esta tarea.';
$lang['task_list_all']                      = 'Todos';
$lang['task_list_not_assigned']             = 'No asignado';
$lang['task_list_duedate_passed']           = 'Fecha de vencimiento pasada';
$lang['tasks_dt_name']                      = 'Nombre';
$lang['task_single_priority']               = 'Prioridad';
$lang['task_single_start_date']             = 'Fecha de inicio';
$lang['task_single_due_date']               = 'Fecha de vencimiento';
$lang['task_single_finished']               = 'Terminado';
$lang['task_single_mark_as_complete']       = 'Marcar como terminado';
$lang['task_single_edit']                   = 'Editar';
$lang['task_single_delete']                 = 'Borrar';
$lang['task_single_assignees']              = 'Asignados';
$lang['task_single_assignees_select_title'] = 'Asignar tarea a';
$lang['task_single_followers']              = 'Seguidores';
$lang['task_single_followers_select_title'] = 'A�adir seguidores';
$lang['task_single_add_new_comment']        = 'Agregar comentario';
$lang['task_add_edit_subject']              = 'Tema';
$lang['task_add_edit_priority']             = 'Prioridad';
$lang['task_priority_low']                  = 'Baja';
$lang['task_priority_medium']               = 'Media';
$lang['task_priority_high']                 = 'Alta';
$lang['task_priority_urgent']               = 'Urgente';
$lang['task_add_edit_start_date']           = 'Fecha de inicio';
$lang['task_add_edit_due_date']             = 'Fecha de vencimiento';
$lang['task_add_edit_description']          = 'Descripci�n de la tarea';

# Taxes
$lang['new_tax']           = 'Nuevo impuesto';
$lang['taxes']             = 'Impuestos';
$lang['tax']               = 'Impuesto';
$lang['tax_lowercase']     = 'impuesto';
$lang['tax_dt_name']       = 'Nombre del impuesto';
$lang['tax_dt_rate']       = 'Tasa (porcentaje)';
$lang['tax_add_edit_name'] = 'Nombre del impuesto';
$lang['tax_add_edit_rate'] = 'Tasa de impuestos (porcentaje)';
$lang['tax_edit_title']    = 'Editar impuesto';
$lang['tax_add_title']     = 'A�adir nuevo impuesto';

# Ticket Statuses
$lang['new_ticket_status']            = 'Nuevo estado de la solicitud';
$lang['ticket_statuses']              = 'Estados de la solicitud';
$lang['ticket_status']                = 'Estado de la solicitud';
$lang['ticket_status_lowercase']      = 'Estado de la solicitud';
$lang['ticket_statuses_dt_name']      = 'Nombre del estado de la solicitud';
$lang['no_ticket_statuses_found']     = 'No se han encontrado estados de solicitud';
$lang['ticket_statuses_table_total']  = 'Total %s';
$lang['ticket_status_add_edit_name']  = 'Nombre del estado de la solicitud';
$lang['ticket_status_add_edit_color'] = 'Elegir color';
$lang['ticket_status_add_edit_order'] = 'Estado de la orden';

# Todos
$lang['new_todo']                  = 'Nuevo trabajo';
$lang['my_todos']                  = 'Mis trabajos para hacer';
$lang['todo']                      = 'Hacer un trabajo';
$lang['todo_lowercase']            = 'hacer';
$lang['todo_status_changed']       = 'el trabajo para hacer cambio de estado';
$lang['todo_add_title']            = 'Agregar nuevo trabajo para hacer';
$lang['add_new_todo_description']  = 'Descripci�n';
$lang['no_finished_todos_found']   = 'No hay trabajos terminados';
$lang['no_unfinished_todos_found'] = 'No se encontraron trabajos';
$lang['unfinished_todos_title']    = 'Trabajos sin terminar';
$lang['finished_todos_title']      = 'Ultimo trabajo hecho';

# Utilities
$lang['utility_activity_log']                        = 'Registro de actividades';
$lang['utility_activity_log_filter_by_date']         = 'Filtrar por fecha';
$lang['utility_activity_log_dt_description']         = 'Descripci�n';
$lang['utility_activity_log_dt_date']                = 'Fecha';
$lang['utility_activity_log_dt_staff']               = 'Personal';
$lang['utility_calendar_new_event_title']            = 'Agregar nuevo evento';
$lang['utility_calendar_new_event_start_date']       = 'Fecha de inicio';
$lang['utility_calendar_new_event_end_date']         = 'Fecha final';
$lang['utility_calendar_new_event_make_public']      = 'Evento p�blico';
$lang['utility_calendar_event_added_successfully']   = 'Nuevo evento agregado exitosamente';
$lang['utility_calendar_event_deleted_successfully'] = 'Evento eliminado';
$lang['utility_calendar_new_event_placeholder']      = 'T�tulo del evento';

# Navigation
$lang['nav_notifications']          = 'Notificaciones';
$lang['nav_my_profile']             = 'Mi perfil';
$lang['nav_edit_profile']           = 'Editar perfil';
$lang['nav_logout']                 = 'Cerrar sesi�n';
$lang['nav_no_notifications']       = 'No se encontraron notificaciones';
$lang['nav_view_all_notifications'] = 'Ver todas las notificaciones';
$lang['nav_notifications_tooltip']  = 'Ver notificaciones';

# Footer
$lang['clients_copyright'] = 'Derechos de autor %s';

# Contracts
$lang['clients_contracts']               = 'Contratos';
$lang['clients_contracts_dt_subject']    = 'Tema';
$lang['clients_contracts_dt_start_date'] = 'Fecha de inicio';
$lang['clients_contracts_dt_end_date']   = 'Fecha finalizaci�n';

# Home
$lang['clients_quick_invoice_info']           = 'Informaci�n de facturas';
$lang['clients_home_currency_select_tooltip'] = 'Necesita seleccionar moneda porque tiene facturas con moneda diferente';

# Invoices
$lang['clients_invoice_html_btn_download'] = 'Descargar';
$lang['clients_my_invoices']               = 'Facturas';
$lang['clients_invoice_dt_number']         = 'Factura #';
$lang['clients_invoice_dt_date']           = 'Fecha';
$lang['clients_invoice_dt_duedate']        = 'Fecha de vencimiento';
$lang['clients_invoice_dt_amount']         = 'Cantidad';
$lang['clients_invoice_dt_status']         = 'Estado';

# Profile
$lang['clients_profile_heading'] = 'Perfil';

# Used for edit profile and register START
$lang['clients_firstname'] = 'Nombre';
$lang['clients_lastname']  = 'Apellido';
$lang['clients_email']     = 'Email';
$lang['clients_company']   = 'Empresa';
$lang['clients_vat']       = 'CUIT/CUIL';
$lang['clients_phone']     = 'Tel�fono';
$lang['clients_country']   = 'Pa�s';
$lang['clients_city']      = 'Ciudad';
$lang['clients_address']   = 'Direcci�n';
$lang['clients_zip']       = 'C�digo postal';
$lang['clients_state']     = 'Provincia';
# Used for edit profile and register END

$lang['clients_register_password']                    = 'Contrase�a';
$lang['clients_register_password_repeat']             = 'Repita la contrase�a';
$lang['clients_edit_profile_update_btn']              = 'Actualizar';
$lang['clients_edit_profile_change_password_heading'] = 'Cambiar la contrase�a';
$lang['clients_edit_profile_old_password']            = 'Contrase�a anterior';
$lang['clients_edit_profile_new_password']            = 'Nueva contrase�a';
$lang['clients_edit_profile_new_password_repeat']     = 'Repita la contrase�a';
$lang['clients_edit_profile_change_password_btn']     = 'Cambia la contrase�a';
$lang['clients_profile_last_changed_password']        = 'Contrase�a modificada por �ltima vez %s';

# Knowledge base
$lang['clients_knowledge_base']                    = 'Manual';
$lang['clients_knowledge_base_articles_not_found'] = 'No se han encontrado manuales.';
$lang['clients_knowledge_base_find_useful']        = '�Te ha resultado �til este manual?';
$lang['clients_knowledge_base_find_useful_yes']    = 'S�';
$lang['clients_knowledge_base_find_useful_no']     = 'No';
$lang['clients_article_only_1_vote_today']         = 'Puedes votar una vez en 24 horas.';
$lang['clients_article_voted_thanks_for_feedback'] = 'Gracias por sus comentarios';

# Tickets
$lang['clients_ticket_open_subject']               = 'Solicitud abierta';
$lang['clients_ticket_open_departments']           = 'Sectores';
$lang['clients_tickets_heading']                   = 'Solicitud de soporte';
$lang['clients_ticket_open_service']               = 'Servicio';
$lang['clients_ticket_open_priority']              = 'Prioridad';
$lang['clients_ticket_open_body']                  = 'Cuerpo de la solicitud';
$lang['clients_ticket_attachments']                = 'Archivos adjuntos';
$lang['clients_single_ticket_string']              = 'Solicitud';
$lang['clients_single_ticket_replied']             = 'Respondido: %s';
$lang['clients_single_ticket_information_heading'] = 'informaci�n de la solicitud';
$lang['clients_tickets_dt_number']                 = 'Solicitud #';
$lang['clients_tickets_dt_subject']                = 'Tema';
$lang['clients_tickets_dt_department']             = 'Sector';
$lang['clients_tickets_dt_service']                = 'Servicio';
$lang['clients_tickets_dt_status']                 = 'Estado';
$lang['clients_tickets_dt_last_reply']             = '�ltima respuesta';
$lang['clients_ticket_single_department']          = 'Sector: %s';
$lang['clients_ticket_single_submitted']           = 'Encargado: %s';
$lang['clients_ticket_single_status']              = 'Estado:';
$lang['clients_ticket_single_priority']            = 'Prioridad: %s';
$lang['clients_ticket_single_add_reply_btn']       = 'A�adir respuesta';
$lang['clients_ticket_single_add_reply_heading']   = 'A�adir respuesta a esta solicitud';

# Login
$lang['clients_login_heading_no_register'] = 'Iniciar Sesi�n';
$lang['clients_login_heading_register']    = 'Por favor, inicie sesi�n o reg�strese';
$lang['clients_login_email']               = 'Email';
$lang['clients_login_password']            = 'Contrase�a';
$lang['clients_login_remember']            = 'Recordarme';
$lang['clients_login_login_string']        = 'Iniciar sesi�n';

# Register
$lang['clients_register_string']  = 'Registrarse';
$lang['clients_register_heading'] = 'Registrarse';

# Navigation
$lang['clients_nav_login']     = 'Iniciar sesi�n';
$lang['clients_nav_register']  = 'Registrarse';
$lang['clients_nav_invoices']  = 'Facturas';
$lang['clients_nav_contracts'] = 'Contratos';
$lang['clients_nav_kb']        = 'Manuales';
$lang['clients_nav_profile']   = 'Perfil';
$lang['clients_nav_logout']    = 'Cerrar sesi�n';

# Version 1.0.1
$lang['payment_receipt']                               = 'Recibo de pago';
$lang['payment_for_string']                            = 'Pagado por';
$lang['payment_date']                                  = 'Fecha de pago:';
$lang['payment_view_mode']                             = 'Metodo de pago:';
$lang['payment_total_amount']                          = 'Cantidad total';
$lang['payment_table_invoice_number']                  = 'N�mero de factura';
$lang['payment_table_invoice_date']                    = 'Fecha de la factura';
$lang['payment_table_invoice_amount_total']            = 'Importe de la factura';
$lang['payment_table_payment_amount_total']            = 'Monto del pago';
$lang['payments_table_transaction_id']                 = 'ID de transacci�n: %s';
$lang['payment_getaway_token_not_found']               = 'Token no encontrado';
$lang['online_payment_recorded_success']               = 'Pago registrado exitosamente';
$lang['online_payment_recorded_success_fail_database'] = 'El pago se realiz� correctamente pero no se pudo insertar el pago en la base de datos. P�ngase en contacto con el administrador.';

# Leads
$lang['lead_convert_to_client']                = 'Convertir al cliente';
$lang['lead_convert_to_email']                 = 'Email';
$lang['lead_convert_to_client_firstname']      = 'Nombre';
$lang['lead_convert_to_client_lastname']       = 'Apellido';
$lang['lead_email_already_exists']             = 'El email ya existe en los datos de los clientes.';
$lang['lead_to_client_base_converted_success'] = 'Lead convertido al cliente con �xito';
$lang['lead_have_client_profile']              = 'Este contacto tiene perfil de cliente.';
$lang['lead_converted_edit_client_profile']    = 'Editar perfil';

# Invoices
$lang['view_invoice_as_customer_tooltip']                                     = 'Ver factura como cliente';
$lang['invoice_add_edit_recurring']                                           = '�Factura recurrente?';
$lang['invoice_add_edit_recurring_no']                                        = 'No';
$lang['invoice_add_edit_recurring_month']                                     = 'Cada %s mes';
$lang['invoice_add_edit_recurring_months']                                    = 'Cada %s meses';
$lang['invoices_list_all']                                                    = 'Todos';
$lang['invoices_list_not_have_payment']                                       = 'Facturas sin registro de pagos.';
$lang['invoices_list_recurring']                                              = 'Facturas recurrentes';
$lang['invoices_list_made_payment_by']                                        = 'Hecho el pago por %s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = '�Crear una nueva factura a partir de una factura recurrente solo si la factura tiene el estado pagado?';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = 'Si este campo se establece en S� y las facturas recurrentes no tienen el estado PAGADO, la nueva factura NO se crear�.';
$lang['view_invoice_pdf_link_pay']                                            = 'Factura de pago';

# Payment modes
$lang['payment_mode_add_edit_description']         = 'Cuentas bancarias / Descripci�n';
$lang['payment_mode_add_edit_description_tooltip'] = 'Puede configurar aqu� la informaci�n de las cuentas bancarias. Se mostrar� en la factura HTML';
$lang['payment_modes_dt_description']              = 'Cuentas bancarias / Descripci�n';
$lang['payment_modes_add_edit_announcement']       = 'Nota: los modos de pago que se enumeran a continuaci�n son modos fuera de l�nea. Los modos de pago en l�nea se pueden configurar en Configuraci�n -> Configuraci�n -> Formas de pago';
$lang['payment_mode_add_edit_active']              = 'Activo';
$lang['payment_modes_dt_active']                   = 'Activo';

# Contracts
$lang['contract_not_found'] = 'Contrato no encontrado. Tal vez se borre, verifique el registro de actividad';

# Settings
$lang['setting_bar_heading']                               = 'Ajustes';
$lang['settings_group_online_payment_modes']               = 'Forma de pago';
$lang['settings_paymentmethod_mode_label']                 = 'Etiqueta';
$lang['settings_paymentmethod_active']                     = 'Activo';
$lang['settings_paymentmethod_currencies']                 = 'Monedas (coma para separar)';
$lang['settings_paymentmethod_testing_mode']               = 'Habilitar el modo de prueba';
$lang['settings_paymentmethod_paypal_username']            = 'Nombre de usuario API de PayPal';
$lang['settings_paymentmethod_paypal_password']            = 'Contrase�a API de PayPal';
$lang['settings_paymentmethod_paypal_signature']           = 'API Firma';
$lang['settings_paymentmethod_stripe_api_secret_key']      = 'API Key';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Key publica';
$lang['settings_limit_top_search_bar_results']             = 'Limitar los resultados de la barra de b�squeda superior a';

## Clients
$lang['client_phonenumber'] = 'Tel�fono';

# Main Clients
$lang['clients_register']                          = 'Registro';
$lang['clients_profile_updated']                   = 'Tu perfil ha sido actualizado';
$lang['clients_successfully_registered']           = 'Gracias por registrarte';
$lang['clients_account_created_but_not_logged_in'] = 'Su cuenta ha sido creada pero no ha iniciado sesi�n en nuestro sistema autom�ticamente. Por favor intenta iniciar sesi�n';

# Tickets
$lang['clients_tickets_heading'] = 'Solicitudes de soporte';

# Payments
$lang['payment_for_invoice'] = 'Pago por factura';
$lang['payment_total']       = 'Total: %s';

# Invoice
$lang['invoice_html_online_payment']             = 'Pago en l�nea';
$lang['invoice_html_online_payment_button_text'] = 'Pague ahora';
$lang['invoice_html_payment_modes_not_selected'] = 'Seleccione el modo de pago';
$lang['invoice_html_amount_blank']               = 'La cantidad total no puede estar en blanco o cero';
$lang['invoice_html_offline_payment']            = 'Pago offline';
$lang['invoice_html_amount']                     = 'Cantidad';
# Version 1.0.2
# DataTables
$lang['dt_button_column_visibility'] = 'Visibilidad';
$lang['dt_button_reload']            = 'Recargar';
$lang['dt_button_excel']             = 'Excel';
$lang['dt_button_csv']               = 'CSV';
$lang['dt_button_pdf']               = 'PDF';
$lang['dt_button_print']             = 'Imprimir';
$lang['is_not_active_export']        = 'No';
$lang['is_active_export']            = 'S�';

# Invoice
$lang['invoice_add_edit_advanced_options']                = 'Opciones avanzadas';
$lang['invoice_add_edit_allowed_payment_modes']           = 'Modos de pago permitidos para esta factura.';
$lang['invoice_add_edit_recurring_invoices_from_invoice'] = 'Facturas creadas a partir de esta factura recurrente.';
$lang['invoice_add_edit_no_payment_modes_found']          = 'No se encontraron modos de pago.';
$lang['invoice_html_total_pay']                           = 'Total: %s';

# Email templates
$lang['email_templates_table_heading_name'] = 'Nombre de la plantilla';

# General
$lang['discount_type']            = 'Tipo de descuento';
$lang['discount_type_after_tax']  = 'Despues del impuesto';
$lang['discount_type_before_tax'] = 'Antes de impuestos';
$lang['terms_and_conditions']     = 'T�rminos y condiciones';
$lang['reference_no']             = 'Referencia #';
$lang['no_discount']              = 'Sin descuento';
$lang['view_stats_tooltip']       = 'Ver estad�sticas r�pidas';

# Clients
$lang['zip_from_date']            = 'Desde de la fecha:';
$lang['zip_to_date']              = 'Hasta la fecha:';
$lang['client_zip_payments']      = 'Pagos';
$lang['client_zip_invoices']      = 'Facturas';
$lang['client_zip_estimates']     = 'Presupuestos';
$lang['client_zip_status']        = 'Estado';
$lang['client_zip_status_all']    = 'Todos';
$lang['client_zip_payment_modes'] = 'Pago realizado por';
$lang['client_zip_no_data_found'] = 'No %s encontrado';

# Payments
$lang['payment_mode']         = 'Modo de pago';
$lang['payment_view_heading'] = 'Pago';

# Settings
$lang['settings_allow_payment_amount_to_be_modified']               = 'Permitir al cliente modificar la cantidad a pagar (para pagos en l�nea)';
$lang['settings_survey_send_emails_per_cron_run']                   = '�Cu�ntos correos electr�nicos se env�an por hora?';
$lang['settings_survey_send_emails_per_cron_run_tooltip']           = 'Esta opci�n se utiliza al enviar encuestas. El sistema de la encuesta enviar� X correos electr�nicos por hora. Algunos proveedores de alojamiento tienen l�mite para enviar correos electr�nicos por hora.';
$lang['settings_delete_only_on_last_invoice']                       = 'Borrar factura permitida solo en la ultima factura';
$lang['settings_sales_estimate_prefix']                             = 'Prefijo de n�mero de presupuesto';
$lang['settings_sales_next_estimate_number']                        = 'Pr�ximo n�mero de presupuesto';
$lang['settings_sales_next_estimate_number_tooltip']                = 'Establezca este campo en 1 si desea comenzar desde el principio';
$lang['settings_sales_decrement_estimate_number_on_delete']         = 'N�mero de Presupuesto de decremento en eliminar';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = '�Desea disminuir el n�mero de presupuesto cuando se elimina el �ltimo presupuesto? Ej. Si se configura esta opci�n en S� y antes de eliminar el presupuesto, el pr�ximo n�mero de presupuesto es 15, el pr�ximo presupuesto se reducir� a 14.Si se establece en NO, el n�mero permanecer� en 15. Si ha configurado la eliminaci�n solo en el �ltimo presupuesto a NO, debe establecer esta opci�n en NO tambi�n para mantener el siguiente n�mero de presupuesto no disminuido.';
$lang['settings_sales_estimate_number_format']                      = 'Formato del n�mero de presupuesto';
$lang['settings_sales_estimate_number_format_year_based']           = 'Basado en el a�o';
$lang['settings_sales_estimate_number_format_number_based']         = 'Basado en n�mero (000001)';
$lang['settings_delete_only_on_last_estimate']                      = 'Eliminar presupuesto permitido solo en la �ltima factura';
$lang['settings_send_test_email_heading']                           = 'Enviar email de prueba';
$lang['settings_send_test_email_subheading']                        = 'Env�a un email de prueba para asegurarte de que la configuraci�n de SMTP est� configurada correctamente.';
$lang['settings_send_test_email_string']                            = 'Direcci�n de correo electr�nico';
$lang['settings_smtp_settings_heading']                             = 'SMTP Ajustes';
$lang['settings_smtp_settings_subheading']                          = 'Configurar email principal';
$lang['settings_sales_heading_general']                             = 'General';
$lang['settings_sales_heading_invoice']                             = 'Factura';
$lang['settings_sales_heading_estimates']                           = 'Presupuestos';
$lang['settings_sales_cron_invoice_heading']                        = 'Factura';

# Tasks
$lang['tasks_dt_datestart'] = 'Fecha de inicio';

# Invoice General
$lang['invoice_discount'] = 'Discount';

# Settings
$lang['settings_rtl_support_admin']                                   = '�rea de administraci�n de RTL (de derecha a izquierda)';
$lang['settings_rtl_support_client']                                  = '�rea de clientes RTL (derecha a izquierda)';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = 'Convertir autom�ticamente el presupuesto a factura despu�s de que el cliente acepte';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = 'Excluir presupuestos con estado de borrador del �rea de clientes';

# Months
$lang['January']   = 'Enero';
$lang['February']  = 'Febrero';
$lang['March']     = 'Marzo';
$lang['April']     = 'Abril';
$lang['May']       = 'Mayo';
$lang['June']      = 'Junio';
$lang['July']      = 'Julio';
$lang['August']    = 'Agosto';
$lang['September'] = 'Septiembre';
$lang['October']   = 'Octubre';
$lang['November']  = 'Noviembre';
$lang['December']  = 'Diciembre';

# Time ago function translate
$lang['time_ago_just_now']  = 'Justo ahora';
$lang['time_ago_minute']    = 'hace un minuto';
$lang['time_ago_minutes']   = 'hace %s minutos';
$lang['time_ago_hour']      = 'hace una hora';
$lang['time_ago_hours']     = 'hace %s horas';
$lang['time_ago_yesterday'] = 'ayer';
$lang['time_ago_days']      = 'hace %s d�as';
$lang['time_ago_week']      = 'Hace una semana';
$lang['time_ago_weeks']     = 'hace %s semanas';
$lang['time_ago_month']     = 'hace un mes';
$lang['time_ago_months']    = 'hace %s meses';
$lang['time_ago_year']      = 'hace un a�o';
$lang['time_ago_years']     = 'hace %s a�os';

# Estimates
$lang['estimates']                                = 'Presupuestos';
$lang['estimate']                                 = 'Presupuestar';
$lang['estimate_lowercase']                       = 'presupuestar';
$lang['create_new_estimate']                      = 'Crear nuevo presupuesto';
$lang['view_estimate']                            = 'Ver presupuesto';
$lang['estimate_sent_to_client_success']          = 'El presupuesto se env�a con �xito al cliente.';
$lang['estimate_sent_to_client_fail']             = 'Problema al enviar el presupuesto';
$lang['estimate_view']                            = 'Ver Presupuesto';
$lang['estimate_select_customer']                 = 'Cliente';
$lang['estimate_add_edit_number']                 = 'N�mero de presupuesto';
$lang['estimate_add_edit_date']                   = 'Fecha estimada';
$lang['estimate_add_edit_expirydate']             = 'Fecha de caducidad';
$lang['estimate_add_edit_currency']               = 'Moneda';
$lang['estimate_add_edit_client_note']            = 'Nota del cliente';
$lang['estimate_add_edit_admin_note']             = 'Nota de administrador';
$lang['estimates_toggle_table_tooltip']           = 'Tabla';
$lang['estimate_add_edit_advanced_options']       = 'Opciones avanzadas';
$lang['estimate_to']                              = 'A';
$lang['estimates_list_all']                       = 'Todos';
$lang['estimate_invoiced_date']                   = 'Presupuesto facturado en %s';
$lang['edit_estimate_tooltip']                    = 'Editar presupuesto';
$lang['delete_estimate_tooltip']                  = 'Eliminar presupuesto';
$lang['estimate_sent_to_email_tooltip']           = 'Enviar al correo electr�nico';
$lang['estimate_already_send_to_client_tooltip']  = 'Este presupuesto ya se ha enviado al cliente. %s';
$lang['estimate_view_activity_tooltip']           = 'Registro de actividades';
$lang['estimate_send_to_client_modal_heading']    = 'Enviar presupuesto al cliente';
$lang['estimate_send_to_client_attach_pdf']       = 'Adjuntar presupuesto PDF';
$lang['estimate_send_to_client_preview_template'] = 'Vista previa de la plantilla de correo electr�nico';
$lang['estimate_dt_table_heading_number']         = 'Presupuesto #';
$lang['estimate_dt_table_heading_date']           = 'Fecha';
$lang['estimate_dt_table_heading_client']         = 'Cliente';
$lang['estimate_dt_table_heading_expirydate']     = 'Fecha de caducidad';
$lang['estimate_dt_table_heading_amount']         = 'Cantidad';
$lang['estimate_dt_table_heading_status']         = 'Estado';
$lang['estimate_convert_to_invoice']              = 'Convertir a factura';

# Clients
$lang['client_payments_tab'] = 'Pagos';

# Estimate General
$lang['estimate_pdf_heading']            = 'ESTIMAR';
$lang['estimate_table_item_heading']     = 'Art�culo';
$lang['estimate_table_quantity_heading'] = 'Cantidad';
$lang['estimate_table_rate_heading']     = 'Tarifa';
$lang['estimate_table_tax_heading']      = 'Impuesto';
$lang['estimate_table_amount_heading']   = 'Cantidad';
$lang['estimate_subtotal']               = 'Sub Total';
$lang['estimate_adjustment']             = 'Ajuste';
$lang['estimate_discount']               = 'Descuento';
$lang['estimate_total']                  = 'Total';
$lang['estimate_to']                     = 'A';
$lang['estimate_data_date']              = 'Fecha estimada';
$lang['estimate_data_expiry_date']       = 'Fecha de caducidad';
$lang['estimate_note']                   = 'Nota:';
$lang['estimate_status_draft']           = 'Borrador';
$lang['estimate_status_sent']            = 'Enviado';
$lang['estimate_status_declined']        = 'Rechazado';
$lang['estimate_status_accepted']        = 'Aceptado';
$lang['estimate_status_expired']         = 'Expirado';
$lang['estimate_note']                   = 'Nota:';

## Clients
$lang['clients_estimate_dt_number']             = 'Presupuesto #';
$lang['clients_estimate_dt_date']               = 'Fecha';
$lang['clients_estimate_dt_duedate']            = 'Fecha de caducidad';
$lang['clients_estimate_dt_amount']             = 'Cantidad';
$lang['clients_estimate_dt_status']             = 'Estado';
$lang['clients_nav_estimates']                  = 'Presupuestos';
$lang['clients_decline_estimate']               = 'Rechazar';
$lang['clients_accept_estimate']                = 'Aceptar';
$lang['clients_my_estimates']                   = 'Presupuestos';
$lang['clients_estimate_invoiced_successfully'] = 'Gracias por aceptar el presupuesto. Por favor revise la factura creada para el presupuesto';
$lang['clients_estimate_accepted_not_invoiced'] = 'Gracias por aceptar este presupuesto';
$lang['clients_estimate_declined']              = 'Presupuesto rechazado. Puede aceptar el presupuesto en cualquier momento antes de la fecha de caducidad.';
$lang['clients_estimate_failed_action']         = 'No se pudo tomar acci�n en este presupuesto';
$lang['client_add_edit_profile']                = 'Perfil';

# Custom Fields
$lang['custom_field']                          = 'Campo personalizado';
$lang['custom_field_lowercase']                = 'campo personalizado';
$lang['custom_fields']                         = 'Campos Personalizados';
$lang['new_custom_field']                      = 'Nuevo campo personalizado';
$lang['custom_field_name']                     = 'Nombre del campo';
$lang['custom_field_add_edit_type']            = 'Tipo';
$lang['custom_field_add_edit_belongs_top']     = 'Campo pertenece a';
$lang['custom_field_add_edit_options']         = 'Opciones';
$lang['custom_field_add_edit_options_tooltip'] = 'S�lo se utiliza para seleccionar, tipos de casilla de verificaci�n. Rellene el campo separando las opciones por coma.';
$lang['custom_field_add_edit_order']           = 'Orden';
$lang['custom_field_dt_field_to']              = 'Pertenece a';
$lang['custom_field_dt_field_name']            = 'Nombre';
$lang['custom_field_dt_field_type']            = 'Tipo';
$lang['custom_field_add_edit_active']          = 'Activo';
$lang['custom_field_add_edit_disabled']        = 'Desactivado';

# Ticket replies
$lang['ticket_reply'] = 'Respuesta de Solicitud';

# Admin Customizer Sidebar
$lang['asc_custom_fields'] = 'Campos Personalizados';

# Contracts
$lang['contract_types']           = 'Tipos de contratos';
$lang['contract_type']            = 'Tipo de contrato';
$lang['new_contract_type']        = 'Nuevo tipo de contrato';
$lang['contract_type_lowercase']  = 'contrato';
$lang['contract_type_name']       = 'Nombre';
$lang['contract_types_list_name'] = 'Tipo de Contrato';

# Customizer Menu
$lang['acs_contracts']      = 'Contratos';
$lang['acs_contract_types'] = 'Tipos de contrato';

# Version 1.0.4
# Invoice Items
$lang['invoice_item_long_description'] = 'Descripci�n larga';

# Customers
$lang['clients_list_phone']                = 'Tel�fono';
$lang['client_expenses_tab']               = 'Gastos';
$lang['customers_summary']                 = 'Resumen de clientes';
$lang['customers_summary_active']          = 'Contactos activos';
$lang['customers_summary_inactive']        = 'Contactos inactivos';
$lang['customers_summary_logged_in_today'] = 'Registrados hoy';

# Authentication
$lang['admin_auth_forgot_password_email']     = 'Email';
$lang['admin_auth_forgot_password_heading']   = 'Se te olvid� tu contrase�a';
$lang['admin_auth_login_heading']             = 'Iniciar sesi�n';
$lang['admin_auth_login_email']               = 'Email';
$lang['admin_auth_login_password']            = 'Contrase�a';
$lang['admin_auth_login_remember_me']         = 'Recordarme';
$lang['admin_auth_login_button']              = 'Iniciar sesi�n';
$lang['admin_auth_login_fp']                  = '�Se te olvid� tu contrase�a?';
$lang['admin_auth_reset_password_heading']    = 'Restablecer la contrase�a';
$lang['admin_auth_reset_password']            = 'Contrase�a';
$lang['admin_auth_reset_password_repeat']     = 'Repite la contrase�a';
$lang['admin_auth_invalid_email_or_password'] = 'Correo electr�nico o contrase�a no v�lidos';
$lang['admin_auth_inactive_account']          = 'Cuenta inactiva';

# Calender
$lang['calendar_estimate']          = 'Presupuesto';
$lang['calendar_invoice']           = 'Factura';
$lang['calendar_contract']          = 'Contrato';
$lang['calendar_customer_reminder'] = 'Recordatorio del cliente';
$lang['calendar_event']             = 'Evento';
$lang['calendar_task']              = 'Tarea';

# Leads
$lang['lead_edit_delete_tooltip'] = 'Eliminar oportunidad';
$lang['lead_attachments']         = 'Archivos adjuntos';

# Admin Customizer Sidebar
$lang['acs_finance'] = 'Financiar';

# Settings
$lang['settings_show_sale_agent_on_invoices']       = 'Mostrar agente de ventas en factura';
$lang['settings_show_sale_agent_on_estimates']      = 'Mostrar agente de ventas en presupuesto';
$lang['settings_predefined_predefined_term']        = 'T�rminos y condiciones predefinidos';
$lang['settings_predefined_clientnote']             = 'Nota de cliente predefinida';
$lang['settings_custom_pdf_logo_image_url']         = 'URL del logo, para personalizar PDF';
$lang['settings_custom_pdf_logo_image_url_tooltip'] = 'Probablemente tendr� problemas con las im�genes PNG con transparencia que se manejan de manera diferente seg�n la versi�n de php-imagick o php-gd utilizada. Intente actualizar php-imagick y deshabilitar php-gd
. Si deja este campo en blanco, se utilizar� el logotipo cargado.';

# General
$lang['sale_agent_string']               = 'Agente de venta';
$lang['amount_display_in_base_currency'] = 'El monto se muestra en su moneda base: solo use este informe si est� usando 1 moneda para pagos y gastos.';
# Leads
$lang['leads_summary'] = 'Resumen de clientes potenciales';

# Contracts
$lang['contract_value']                       = 'Valor del contrato';
$lang['contract_trash']                       = 'Papelera';
$lang['contracts_view_trash']                 = 'Ver Papelera';
$lang['contracts_view_all']                   = 'Todos';
$lang['contracts_view_exclude_trashed']       = 'Excluir los contratos de la papelera';
$lang['contract_value_tooltip']               = 'Se utilizar� la moneda base.';
$lang['contract_trash_tooltip']               = 'Si agrega el contrato a la papelera, no se mostrar� en el lado del cliente, no se incluir� en el gr�fico y otras estad�sticas y, de forma predeterminada, no se mostrar� cuando se enumeren todos los contratos.';
$lang['contract_summary_active']              = 'Activo';
$lang['contract_renew_heading']               = 'Renovar contrato';
$lang['contract_summary_heading']             = 'Resumen del contrato';
$lang['contract_summary_expired']             = 'Expirado';
$lang['contract_summary_about_to_expire']     = 'A punto de expirar';
$lang['contract_summary_recently_added']      = 'Recientemente agregado';
$lang['contract_summary_trash']               = 'Papelera';
$lang['contract_summary_by_type']             = 'Contratos por tipo';
$lang['contract_summary_by_type_value']       = 'Contratos de valor por tipo';
$lang['contract_renewed_successfully']        = 'Contrato renovado con �xito';
$lang['contract_renewed_fail']                = 'Problema al renovar el contrato. Contactar administrador';
$lang['no_contract_renewals_found']           = 'No se encuentran renovaciones para este contrato.';
$lang['no_contract_renewals_history_heading'] = 'Historial de renovaci�n de contratos';
$lang['contract_renewed_by']                  = 'Renovaste este contrato %s ';
$lang['contract_renewal_deleted']             = 'Renovaci�n eliminada exitosamente';
$lang['contract_renewal_delete_fail']         = 'Error al eliminar la renovaci�n del contrato. Contactar administrador';
$lang['contract_renewal_new_value']           = 'Nuevo valor de contrato: %s';
$lang['contract_renewal_old_value']           = 'Valor del contrato anterior: %s';
$lang['contract_renewal_new_start_date']      = 'Nueva fecha de inicio: %s';
$lang['contract_renewal_old_start_date']      = 'La fecha de inicio del contrato anterior era: %s';
$lang['contract_renewal_new_end_date']        = 'Nueva fecha de finalizaci�n: %s';
$lang['contract_renewal_old_end_date']        = 'La fecha de finalizaci�n del contrato anterior era: %s';
$lang['contract_attachment']                  = 'Archivo adjunto';

# Admin Aside Menu
$lang['als_goals_tracking']     = 'Seguimiento de objetivos';
$lang['als_expenses']           = 'Gastos';
$lang['als_reports_expenses']   = 'Gastos';
$lang['als_expenses_vs_income'] = 'Gastos vs Ingresos';

# Invoices
$lang['invoice_attach_file']           = 'Adjuntar archivo';
$lang['invoice_mark_as_sent']          = 'Marcar como enviado';
$lang['invoice_marked_as_sent']        = 'Factura marcada como enviada correctamente';
$lang['invoice_marked_as_sent_failed'] = 'Error al marcar la factura como enviada';

# Goals Tracking
$lang['goals']                                                          = 'Objetivos';
$lang['goal']                                                           = 'Objetivo';
$lang['goals_tracking']                                                 = 'Seguimiento de objetivos';
$lang['new_goal']                                                       = 'Nuevo Objetivo';
$lang['goal_lowercase']                                                 = 'objetivo';
$lang['goal_start_date']                                                = 'Fecha de inicio';
$lang['goal_end_date']                                                  = 'Fecha de finalizaci�n';
$lang['goal_subject']                                                   = 'Tema';
$lang['goal_description']                                               = 'Descripci�n';
$lang['goal_type']                                                      = 'Tipo de objetivo';
$lang['goal_achievement']                                               = 'Logro';
$lang['goal_contract_type']                                             = 'Tipo de contrato';
$lang['goal_notify_when_fail']                                          = 'Notificar a los miembros del personal cuando el objetivo no se logr�';
$lang['goal_notify_when_achieve']                                       = 'Notificar a los miembros del personal cuando el objetivo se alcance';
$lang['goal_progress']                                                  = 'Progreso';
$lang['goal_total']                                                     = 'Total: %s';
$lang['goal_result_heading']                                            = 'Progreso del objetivo';
$lang['goal_income_shown_in_base_currency']                             = 'El ingreso total se muestra en su moneda base';
$lang['goal_notify_when_end_date_arrives']                              = 'Se notificar� a los miembros del personal cuando llegue la fecha de finalizaci�n (Requiere sistema).';
$lang['goal_staff_members_notified_about_achievement']                  = 'Los miembros del personal son notificados sobre el logro de este objetivo';
$lang['goal_staff_members_notified_about_failure']                      = 'Miembro del personal son notificados sobre el fallo.';
$lang['goal_notify_staff_manually']                                     = 'Notificar manualmente a los miembros del personal';
$lang['goal_notify_staff_notified_manually_success']                    = 'Los miembros del personal son notificados sobre este resultado del objetivo';
$lang['goal_notify_staff_notified_manually_fail']                       = 'Error al notificar a los miembros del personal sobre este resultado del objetivo';
$lang['goal_achieved']                                                  = 'Logrado';
$lang['goal_failed']                                                    = 'No se logro';
$lang['goal_close']                                                     = 'Muy cerca';
$lang['goal_type_total_income']                                         = 'Lograr el ingreso total';
$lang['goal_type_convert_leads']                                        = 'Convertir X Objetivos';
$lang['goal_type_increase_customers_without_leads_conversions']         = 'Aumentar el n�mero de cliente';
$lang['goal_type_increase_customers_without_leads_conversions_subtext'] = 'La conversi�n de potenciales clientes est� excluida';
$lang['goal_type_increase_customers_with_leads_conversions']            = 'Aumentar el n�mero de cliente';
$lang['goal_type_increase_customers_with_leads_conversions_subtext']    = 'Conversiones de potenciales clientes est� incluido';
$lang['goal_type_make_contracts_by_type_calc_database']                 = 'Hacer contratos por tipo';
$lang['goal_type_make_contracts_by_type_calc_database_subtext']         = 'Se calcula a partir de la fecha agregada a la base de datos.';
$lang['goal_type_make_contracts_by_type_calc_date']                     = 'Hacer contratos por tipo';
$lang['goal_type_make_contracts_by_type_calc_date_subtext']             = 'Se calcula a partir de la fecha de inicio del contrato.';
$lang['goal_type_total_estimates_converted']                            = 'Conversi�n X Presupuestos ';
$lang['goal_type_total_estimates_converted_subtext']                    = 'Se tomar�n solo los presupuestos que se convertir�n a facturas.';
$lang['goal_type_income_subtext']                                       = 'Los ingresos se calcular�n en su moneda base (no convertidos)';

# Payments
$lang['payment_transaction_id'] = 'Transaction ID';

# Expenses
$lang['acs_expense_categories']                       = 'Categor�as de gastos';
$lang['expense_category']                             = 'Categor�a de gastos';
$lang['expense_category_lowercase']                   = 'categor�a de gastos';
$lang['new_expense']                                  = 'Registro de gastos';
$lang['expense_add_edit_name']                        = 'Nombre de la categor�a';
$lang['expense_add_edit_description']                 = 'Descripci�n de categor�a';
$lang['expense_categories']                           = 'Categor�as de gastos';
$lang['new_expense_category']                         = 'Nueva categor�a';
$lang['dt_expense_description']                       = 'Descripci�n';
$lang['expense']                                      = 'Gasto';
$lang['expenses']                                     = 'Gastos';
$lang['expense_lowercase']                            = 'gasto';
$lang['expense_add_edit_customer']                    = 'Cliente';
$lang['expense_add_edit_note']                        = 'Nota';
$lang['expense_add_edit_date']                        = 'Fecha de gastos';
$lang['expense_add_edit_amount']                      = 'Cantidad';
$lang['expense_add_edit_billable']                    = 'Facturable';
$lang['expense_add_edit_attach_receipt']              = 'Adjuntar recibo';
$lang['expense_add_edit_reference_no']                = 'Referencia #';
$lang['expense_receipt']                              = 'Recibo de gastos';
$lang['expense_receipt_lowercase']                    = 'recibo de gastos';
$lang['expense_dt_table_heading_category']            = 'Categor�a';
$lang['expense_dt_table_heading_amount']              = 'Cantidad';
$lang['expense_dt_table_heading_date']                = 'Fecha';
$lang['expense_dt_table_heading_reference_no']        = 'Referencia #';
$lang['expense_dt_table_heading_customer']            = 'Cliente';
$lang['expense_dt_table_heading_payment_mode']        = 'Modo de pago';
$lang['expense_converted_to_invoice']                 = 'Gastos convertidos exitosamente a factura';
$lang['expense_converted_to_invoice_fail']            = 'Error al convertir este gasto en el registro de errores de verificaci�n de facturas.';
$lang['expense_copy_success']                         = 'El gasto se copia con �xito.';
$lang['expense_copy_fail']                            = 'Error al copiar el gasto. Por favor verifique los campos requeridos e intente nuevamente';
$lang['expenses_list_all']                            = 'Todos';
$lang['expenses_list_billable']                       = 'Facturable';
$lang['expenses_list_non_billable']                   = 'No facturable';
$lang['expenses_list_invoiced']                       = 'Facturado';
$lang['expenses_list_unbilled']                       = 'No facturado';
$lang['expenses_list_recurring']                      = 'Peri�dico';
$lang['expense_invoice_delete_not_allowed']           = 'No puedes borrar este gasto. El gasto ya est� facturado.';
$lang['expense_convert_to_invoice']                   = 'Convertir a factura';
$lang['expense_edit']                                 = 'Editar Gasto';
$lang['expense_delete']                               = 'Borrar';
$lang['expense_copy']                                 = 'Copiar';
$lang['expense_invoice_not_created']                  = 'Factura no creada';
$lang['expense_billed']                               = 'Facturado';
$lang['expense_not_billed']                           = 'Factura no pagada';
$lang['expense_customer']                             = 'Cliente';
$lang['expense_note']                                 = 'Nota:';
$lang['expense_date']                                 = 'Fecha:';
$lang['expense_ref_noe']                              = 'Ref #:';
$lang['expense_amount']                               = 'Cantidad:';
$lang['expense_recurring_indicator']                  = 'Recurrente';
$lang['expense_already_invoiced']                     = 'Este gasto ya est� facturado.';
$lang['expense_recurring_auto_create_invoice']        = 'Auto crear factura';
$lang['expense_recurring_send_custom_on_renew']       = 'Env�e la factura al correo electr�nico del cliente cuando se vuelva a crear el gasto.';
$lang['expense_recurring_autocreate_invoice_tooltip'] = 'Si se marca esta opci�n, la factura del cliente se crear� autom�ticamente cuando se renueve el gasto.';
$lang['expenses_yearly_by_categories']                = 'Gastos anuales por categor�as';
$lang['total_expenses_for']                           = 'Gastos totales para'; // year
$lang['expenses_report_for']                          = 'Gastos para'; // year

# Custom fields
$lang['custom_field_required']    = 'Necesario';
$lang['custom_field_show_on_pdf'] = 'Mostrar en PDF';
$lang['custom_field_leads']       = 'Potenciales clientes';
$lang['custom_field_customers']   = 'Clientes';
$lang['custom_field_staff']       = 'Personal';
$lang['custom_field_contracts']   = 'Contratos';
$lang['custom_field_tasks']       = 'Tareas';
$lang['custom_field_expenses']    = 'Gastos';
$lang['custom_field_invoice']     = 'Factura';
$lang['custom_field_estimate']    = 'Estimar';

# Tickets
$lang['ticket_single_private_staff_notes'] = 'Notas privadas del personal';

# Business News
$lang['business_news'] = 'Noticias de la empresa';

# Navigation
$lang['nav_todo_items'] = 'Hacer trabajos';

# Contracts
$lang['clients_contracts_type'] = 'Tipo de contrato';

# Version 1.0.5
# General
$lang['no_tax']                              = 'Sin impuestos';
$lang['numbers_not_formatted_while_editing'] = 'El n�mero en el campo de entrada no tiene formato mientras se edita / agrega un elemento y debe permanecer sin formato. No intente formatearlo manualmente aqu�.';
# Contracts
$lang['contracts_view_expired']         = 'Expirada';
$lang['contracts_view_without_dateend'] = 'Contratos sin fecha l�mite';

# Email Templates
$lang['email_template_contracts_fields_heading'] = 'Contratos';

# Invoices General
$lang['invoice_estimate_general_options'] = 'Opciones generales';
$lang['invoice_table_item_description']   = 'Descripci�n';
$lang['invoice_recurring_indicator']      = 'Recurrente';

# Estimates
$lang['estimate_convert_to_invoice_successfully'] = 'Presupuesto convertido a factura exitosamente';
$lang['estimate_table_item_description']          = 'Descripci�n';

# Version 1.0.6
# Invoices
# Currencies
$lang['cant_delete_base_currency'] = 'No puedes borrar la moneda base. Debe asignar una nueva moneda base y luego realizar la eliminaci�n.';
$lang['invoice_copy']              = 'Copiar factura';
$lang['invoice_copy_success']      = 'Factura copiada correctamente';
$lang['invoice_copy_fail']         = 'Error al copiar la factura';
$lang['invoice_due_after_help']    = 'Establecer cero para evitar el c�lculo';
$lang['show_shipping_on_invoice']  = 'Mostrar detalles de env�o en factura';

# Estimates
$lang['show_shipping_on_estimate']         = 'Mostrar detalles de env�o en presupuesto';
$lang['is_invoiced_estimate_delete_error'] = 'Este presupuesto es facturado. No puedes borrar el presupuesto';

# Customers & Invoices / Estimates
$lang['ship_to']                            = 'Envie a';
$lang['customer_profile_details']           = 'Detalles del cliente';
$lang['billing_shipping']                   = 'Facturaci�n y env�o';
$lang['billing_address']                    = 'Direcci�n de Envio';
$lang['shipping_address']                   = 'Direcci�n de Env�o';
$lang['billing_street']                     = 'Calle';
$lang['billing_city']                       = 'Ciudad';
$lang['billing_state']                      = 'Provincia';
$lang['billing_zip']                        = 'Codigo postal';
$lang['billing_country']                    = 'Pa�s';
$lang['shipping_street']                    = 'Calle';
$lang['shipping_city']                      = 'Ciudad';
$lang['shipping_state']                     = 'Provincia';
$lang['shipping_zip']                       = 'Codigo postal';
$lang['shipping_country']                   = 'Pa�s';
$lang['get_shipping_from_customer_profile'] = 'Obtener detalles de env�o del perfil del cliente';

# Customer
$lang['customer_default_currency']                             = 'Moneda predeterminada';
$lang['customer_update_address_info_on_invoices']              = 'Actualice la informaci�n de env�o / facturaci�n en todas las facturas / presupuestos anteriores';
$lang['customer_update_address_info_on_invoices_help']         = 'Si marca este campo, la informaci�n de env�o y facturaci�n se actualizar� a todas las facturas y Presupuestos. Nota: Las facturas con estado pagado no se ver�n afectadas.';
$lang['setup_google_api_key_customer_map']                     = 'Configurar la clave de Google Api para ver el mapa del cliente';
$lang['customer_attachments_file']                             = 'Archivo';
$lang['client_send_set_password_email']                        = 'Enviar email de contrase�a SET';
$lang['customer_billing_same_as_profile']                      = 'Igual que la informaci�n del cliente';
$lang['customer_billing_copy']                                 = 'Copiar direcci�n de facturaci�n';
$lang['customer_map']                                          = 'Mapa';
$lang['set_password_email_sent_to_client']                     = 'Correo electr�nico para establecer la contrase�a se env�a con �xito al contacto';
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'Perfil actualizado y correo electr�nico para establecer la contrase�a se env�a con �xito al contacto';
$lang['customer_attachments']                                  = 'Archivos';
$lang['customer_longitude']                                    = 'Longitud (Google Maps)';
$lang['customer_latitude']                                     = 'Latitud (Google Maps)';

# Authentication
$lang['admin_auth_set_password']         = 'Contrase�a';
$lang['admin_auth_set_password_repeat']  = 'Repite la contrase�a';
$lang['admin_auth_set_password_heading'] = 'Configurar la contrase�a';

# General
$lang['apply']                         = 'Aplicar';
$lang['department_calendar_id']        = 'ID de calendario de Google';
$lang['localization_default_language'] = 'Idioma predeterminado';
$lang['system_default_string']         = 'Sistema por defecto';
$lang['advanced_options']              = 'Opciones avanzadas';

# Expenses
$lang['expense_list_invoice']  = 'Factura';
$lang['expense_list_billed']   = 'Facturado';
$lang['expense_list_unbilled'] = 'No facturado';

# Leads
$lang['lead_merge_custom_field']          = 'Fusionar como campo personalizado';
$lang['lead_merge_custom_field_existing'] = 'Fusionar con el campo de la base de datos';
$lang['lead_dont_merge_custom_field']     = 'No fusionar';
$lang['lost_leads']                       = 'Clientes potenciales perdidos';
$lang['junk_leads']                       = 'Clientes potenciales borrados';
$lang['lead_mark_as_lost']                = 'Marcar como perdido';
$lang['lead_unmark_as_lost']              = 'Desmarcar como perdido';
$lang['lead_marked_as_lost']              = 'Cliente potencial fue marcado como perdido ';
$lang['lead_unmarked_as_lost']            = 'Cliente potencial sin marcar como perdido';
$lang['leads_status_color']               = 'Color';
$lang['lead_mark_as_junk']                = 'Marcar como borrado';
$lang['lead_unmark_as_junk']              = 'Desmarcar borrado';
$lang['lead_marked_as_junk']              = 'Marcado como borrado';
$lang['lead_unmarked_as_junk']            = 'Desmarcado como borrado';
$lang['lead_not_found']                   = 'Cliente potencial no encontrado';
$lang['lead_lost']                        = 'Perdido';
$lang['lead_junk']                        = 'Borrado';
$lang['leads_not_assigned']               = 'No asignado';

# Contacts
$lang['contract_not_visible_to_client'] = 'Ocultar del cliente';
$lang['contract_edit_overview']         = 'Resumen del contrato';
$lang['contract_attachments']           = 'Archivos adjuntos';

# Tasks
$lang['task_view_make_public']     = 'Hacer p�blico';
$lang['task_is_private']           = 'Tarea privada';
$lang['task_finished']             = 'Terminado';
$lang['task_single_related']       = 'Relacionado';
$lang['task_unmark_as_complete']   = 'Desmarcar como completo';
$lang['task_unmarked_as_complete'] = 'Tarea sin marcar como completada';
$lang['task_relation']             = 'Relacionado';
$lang['task_public']               = 'P�blico';
$lang['task_public_help']          = 'Si configura esta tarea como p�blica, estar� visible para todos los miembros del personal. De lo contrario, solo ser� visible para los miembros asignados, seguidores, creadores o administradores.';

# Settings
$lang['settings_general_favicon']                                            = 'Icono';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = 'Imprima documentos PDF del cliente desde el �rea de administraci�n en el idioma del cliente';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'Si esta opci�n est� configurada en SI y ej. el idioma predeterminado del sistema es el espa�ol y el cliente tiene el idioma de configuraci�n en Ingles; los documentos pdf se emitir�n en el idioma del cliente';
$lang['settings_cron_surveys']                                               = 'Encuestas';
$lang['settings_default_tax']                                                = 'Impuesto por Defecto';
$lang['setup_calendar_by_departments']                                       = 'Configurar calendario por sectores';
$lang['settings_calendar']                                                   = 'Calendario';
$lang['settings_sales_invoice_due_after']                                    = 'Factura con vencimiento despu�s de (d�as)';
$lang['settings_google_api']                                                 = 'Clave API de Google';
$lang['settings_gcal_main_calendar_id']                                      = 'ID de calendario de Google';
$lang['settings_gcal_main_calendar_id_help']                                 = 'Este es el calendario principal de la empresa. Se mostrar�n todos los eventos de este calendario. Si desea especificar un calendario seg�n los sectores, puede agregarlo en el ID de calendario de Google del departamento.';
$lang['show_on_calendar']                                                    = 'Mostrar en el calendario';
$lang['show_invoices_on_calendar']                                           = 'Facturas';
$lang['show_estimates_on_calendar']                                          = 'Presupuestos';
$lang['show_contracts_on_calendar']                                          = 'Contratos';
$lang['show_tasks_on_calendar']                                              = 'Tareas';
$lang['show_customer_reminders_on_calendar']                                 = 'Recordatorios del cliente';

# Leads
$lang['copy_custom_fields_convert_to_customer']                      = 'Copiar campos personalizados al perfil del cliente';
$lang['copy_custom_fields_convert_to_customer_help']                 = 'Si alguno de los siguientes campos personalizados no existe para el cliente, se crear� autom�ticamente con el mismo nombre, de lo contrario, solo se copiar� el valor del perfil principal.';
$lang['lead_profile']                                                = 'Perfil';
$lang['lead_is_client']                                              = 'Cliente';
$lang['leads_email_integration_folder_no_encryption']                = 'Sin cifrar';
$lang['leads_email_integration']                                     = 'Integraci�n de email';
$lang['leads_email_active']                                          = 'Activo';
$lang['leads_email_integration_imap']                                = 'IMAP Servidor';
$lang['leads_email_integration_email']                               = 'Email (Iniciar sesi�n)';
$lang['leads_email_integration_password']                            = 'Contrase�a';
$lang['leads_email_integration_default_source']                      = 'Fuente';
$lang['leads_email_integration_check_every']                         = 'Comprobar cada (minutos)';
$lang['leads_email_integration_default_assigned']                    = 'Responsable de la nueva ventaja.';
$lang['leads_email_encryption']                                      = 'Cifrado';
$lang['leads_email_integration_updated']                             = 'Integraci�n email actualizada';
$lang['leads_email_integration_default_status']                      = 'Estado predeterminado';
$lang['leads_email_integration_folder']                              = 'Carpeta';
$lang['leads_email_integration_notify_when_lead_imported']           = 'Notificar cuando el cliente sea importado';
$lang['leads_email_integration_only_check_unseen_emails']            = 'S�lo revisar email no abiertos';
$lang['leads_email_integration_only_check_unseen_emails_help']       = 'El script configurar� autom�ticamente el correo electr�nico para que se abra despu�s de la verificaci�n. Esto se utiliza para evitar la comprobaci�n de todos los correos electr�nicos una y otra vez. No se recomienda desmarcar esta opci�n si tiene muchos correos electr�nicos y ha configurado mucho el reenv�o al correo electr�nico que ha configurado para los clientes potenciales.';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Notificar si el cliente potencial env�a un correos varias veces';
$lang['leads_email_integration_test_connection']                     = 'Probar la conexi�n IMAP';
$lang['lead_email_connection_ok']                                    = 'La conexi�n IMAP es buena';
$lang['lead_email_connection_not_ok']                                = 'La conexi�n IMAP no est� bien';
$lang['lead_email_activity']                                         = 'Actividad de correo electr�nico';
$lang['leads_email_integration_notify_roles']                        = 'Funciones a notificar';
$lang['leads_email_integration_notify_staff']                        = 'Notificar amiembros del personal';
$lang['lead_public']                                                 = 'P�blico';

# Knowledge Base
$lang['kb_group_color'] = 'Color';
$lang['kb_group_order'] = 'Orden';

# Utilities - BULK PDF Exporter
$lang['bulk_pdf_exporter']             = 'Exportaci�n masiva de PDF';
$lang['bulk_export_pdf_payments']      = 'Pagos';
$lang['bulk_export_pdf_estimates']     = 'Presupuestos';
$lang['bulk_export_pdf_invoices']      = 'Facturas';
$lang['bulk_pdf_export_button']        = 'Exportar';
$lang['bulk_pdf_export_select_type']   = 'Seleccione tipo';
$lang['no_data_found_bulk_pdf_export'] = 'No se han encontrado datos para exportar';
$lang['bulk_export_status_all']        = 'Todos';
$lang['bulk_export_status']            = 'Estado';
$lang['bulk_export_zip_payment_modes'] = 'Pagos hechos por';
$lang['bulk_export_include_tag']       = 'Incluir etiqueta';
$lang['bulk_export_include_tag_help']  = 'Ej. Original o Copia. La etiqueta se imprimir� en el PDF. Recomendado para usar s�lo 1 etiqueta';

## Clients area
$lang['auto_backup_options_updated']     = 'Opciones de copia de seguridad autom�tica actualizadas';
$lang['auto_backup_every']               = 'Crea copias de seguridad cada X d�as';
$lang['auto_backup_enabled']             = 'Habilitado (requiere sistema)';
$lang['auto_backup']                     = 'Copia de seguridad autom�tica';
$lang['backup_delete']                   = 'Copia de seguridad eliminada';
$lang['backup_success']                  = 'Copia de seguridad se realiza con �xito';
$lang['utility_backup']                  = 'Copia de seguridad de la base de datos';
$lang['utility_create_new_backup_db']    = 'Crear una copia de seguridad de la base de datos';
$lang['utility_backup_table_backupname'] = 'Apoyo';
$lang['utility_backup_table_backupsize'] = 'Tama�o de copia de seguridad';
$lang['utility_backup_table_backupdate'] = 'Fecha';
$lang['utility_db_backup_note']          = 'Nota: Debido al tiempo limitado de ejecuci�n y la memoria disponible para PHP, puede que no sea posible realizar copias de seguridad de bases de datos muy grandes. Si su base de datos es muy grande, es posible que deba realizar una copia de seguridad directamente desde su servidor SQL a trav�s de la l�nea de comandos, o que su administrador del servidor lo haga por usted si no tiene privilegios de root.';

# Version 1.0.7
## Customers - portal
$lang['clients_nav_proposals'] = 'Propuestas';
$lang['clients_nav_support']   = 'Apoyo';

# General
$lang['more']            = 'M�s';
$lang['add_item']        = 'A�adir art�culo';
$lang['goto_admin_area'] = 'Ir al �rea de administraci�n';
$lang['delete']          = 'Borrar %s';
$lang['welcome_top']     = 'Bienvenido %s';

# Customers
$lang['customer_permissions']         = 'Permisos';
$lang['customer_permission_invoice']  = 'Facturas';
$lang['customer_permission_estimate'] = 'Presupuestos';
$lang['customer_permission_proposal'] = 'Propuestas';
$lang['customer_permission_contract'] = 'Contratos';
$lang['customer_permission_support']  = 'Solicitudes';

#Tasks
$lang['task_related_to'] = 'Relacionado con';

# Send file
$lang['custom_file_fail_send']    = 'Error al enviar el archivo';
$lang['custom_file_success_send'] = 'El archivo se env�o con �xito a %s';
$lang['send_file_subject']        = 'Asunto del email';
$lang['send_file_email']          = 'Email';
$lang['send_file_message']        = 'Mensaje';
$lang['send_file']                = 'Enviar archivo';
$lang['add_checklist_item']       = 'Elemento de la lista de verificaci�n';
$lang['task_checklist_items']     = 'Elementos de la lista de verificaci�n';

# Import
$lang['default_pass_clients_import'] = 'Contrase�a predeterminada para todos los contactos';
$lang['simulate_import']             = 'Simular importaci�n';
$lang['import_upload_failed']        = 'Error al subir';
$lang['import_total_imported']       = 'Total importado: %s';
$lang['import_leads']                = 'Importar clientes potenciales';
$lang['import_customers']            = 'Importar clientes';
$lang['choose_csv_file']             = 'Elegir archivo CSV';
$lang['import']                      = 'Importar';
$lang['lead_import_status']          = 'Estado';
$lang['lead_import_source']          = 'Fuente';

# Bulk PDF Export
$lang['bulk_export_pdf_proposals'] = 'Propuestas';

# Invoices
$lang['delete_invoice'] = 'Borrar';
$lang['items']          = 'Art�culos';
$lang['support']        = 'Solicitudes';
$lang['new_ticket']     = 'Nueva solicitud';

# Reminders
$lang['calendar_lead_reminder']  = 'Recordatorio de cliente potencial';
$lang['lead_set_reminder_title'] = 'A�adir recordatorio de cliente potencial';
$lang['set_reminder_tooltip']    = 'Esta opci�n le permite nunca olvidar nada de sus clientes.';
$lang['client_reminders_tab']    = 'Recordatorios';
$lang['leads_reminders_tab']     = 'Recordatorios';

# Tickets
$lang['delete_ticket_reply']  = 'Eliminar respuesta';
$lang['ticket_priority_edit'] = 'Editar prioridad';
$lang['ticket_priority_add']  = 'A�adir prioridad';
$lang['ticket_status_edit']   = 'Editar estado de la solicitud';
$lang['ticket_service_edit']  = 'Editar servicio de solicitudes';
$lang['edit_department']      = 'Departamento de edici�n';

# Expenses
$lang['edit_expense_category'] = 'Editar categor�a de gastos';

# Settings
$lang['customer_default_country']                                 = 'Pa�s predeterminado';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'Requiere que el cliente est� conectado para ver el presupuesto';
$lang['set_reminder']                                             = 'Establecer recordatorio';
$lang['set_reminder_date']                                        = 'Fecha para ser notificado';
$lang['reminder_description']                                     = 'Descripci�n del lugar';
$lang['reminder_notify_me_by_email']                              = 'Enviar tambi�n un correo electr�nico para este recordatorio';
$lang['reminder_added_successfully']                              = 'Recordatorio a�adido con �xito. Se le notificar� a tiempo.';
$lang['reminder_description']                                     = 'Descripci�n';
$lang['reminder_date']                                            = 'Fecha';
$lang['reminder_staff']                                           = 'Recordatorio';
$lang['reminder_is_notified']                                     = 'Quieres ser notificado?';
$lang['reminder_is_notified_boolean_no']                          = 'No';
$lang['reminder_is_notified_boolean_yes']                         = 'S�';
$lang['reminder_set_to']                                          = 'Establecer recordatorio para';
$lang['reminder_deleted']                                         = 'Recordatorio eliminado con �xito';
$lang['reminder_failed_to_delete']                                = 'Error al eliminar el recordatorio';
$lang['show_invoice_estimate_status_on_pdf']                      = 'Mostrar factura / estado de presupuesto en PDF';
$lang['email_piping_default_priority']                            = 'Prioridad predeterminada en la solicitud';
$lang['show_lead_reminders_on_calendar']                          = 'Recordatorios de clientes potenciales';
$lang['tickets_piping']                                           = 'Email';
$lang['email_piping_only_replies']                                = 'S�lo respuestas permitidas por correo electr�nico';
$lang['email_piping_only_registered']                             = 'Solo en usuarios registrados';

# Estimates
$lang['view_estimate_as_client']         = 'Ver presupuesto como cliente';
$lang['estimate_mark_as']                = 'Marcar como %s';
$lang['estimate_status_changed_success'] = 'Estado del presupuesto cambiado';
$lang['estimate_status_changed_fail']    = 'Error al cambiar el estado del presupuesto';

# Proposals
$lang['proposal_to']                            = 'Nombre de empresa';
$lang['proposal_date']                          = 'Fecha';
$lang['proposal_address']                       = 'Direcci�n';
$lang['proposal_phone']                         = 'Tel�fono';
$lang['proposal_email']                         = 'Email';
$lang['proposal_date_created']                  = 'Fecha de creacion';
$lang['proposal_open_till']                     = 'Abierto hasta';
$lang['proposal_status_open']                   = 'Abierto';
$lang['proposal_status_accepted']               = 'Aceptado';
$lang['proposal_status_declined']               = 'Rechazado';
$lang['proposal_status_sent']                   = 'Enviado';
$lang['proposal_expired']                       = 'Vencido';
$lang['proposal_subject']                       = 'Vencido';
$lang['proposal_total']                         = 'Total';
$lang['proposal_status']                        = 'Estado';
$lang['proposals_list_all']                     = 'Todos';
$lang['proposals_leads_related']                = 'Clientes potenciales relacionados';
$lang['proposals_customers_related']            = 'Clientes relacionados';
$lang['proposal_related']                       = 'Relacionado';
$lang['proposal_for_lead']                      = 'Cliente potencial';
$lang['proposal_for_customer']                  = 'Cliente';
$lang['proposal']                               = 'Propuesta';
$lang['proposal_lowercase']                     = 'propuesta';
$lang['proposals']                              = 'Propuestas';
$lang['proposals_lowercase']                    = 'propuestas';
$lang['new_proposal']                           = 'Nueva propuesta';
$lang['proposal_currency']                      = 'Moneda';
$lang['proposal_allow_comments']                = 'Permitir comentarios';
$lang['proposal_allow_comments_help']           = 'Si marca esta opci�n, se permitir�n comentarios cuando su cliente vea la propuesta.';
$lang['proposal_edit']                          = 'Editar';
$lang['proposal_pdf']                           = 'PDF';
$lang['proposal_send_to_email']                 = 'Enviar al email';
$lang['proposal_send_to_email_title']           = 'Enviar propuesta al correo electr�nico';
$lang['proposal_attach_pdf']                    = 'Adjuntar PDF';
$lang['proposal_preview_template']              = 'Vista previa';
$lang['proposal_view']                          = 'Ver Propuesta';
$lang['proposal_copy']                          = 'Copiar';
$lang['proposal_delete']                        = 'Borrar';
$lang['proposal_to']                            = 'A';
$lang['proposal_add_comment']                   = 'Agregar comentario';
$lang['proposal_sent_to_email_success']         = 'Propuesta enviada al email correctamente';
$lang['proposal_sent_to_email_fail']            = 'Error al enviar la propuesta al correo electr�nico.';
$lang['proposal_copy_fail']                     = 'No se pudo copiar la propuesta';
$lang['proposal_copy_success']                  = 'Propuesta copiada exitosamente';
$lang['proposal_status_changed_success']        = 'El estado de la propuesta cambi� con �xito';
$lang['proposal_status_changed_fail']           = 'Error al cambiar el estado de la propuesta';
$lang['proposal_assigned']                      = 'Asignado';
$lang['proposal_comments']                      = 'Comentarios';
$lang['proposal_convert']                       = 'Convertir';
$lang['proposal_convert_estimate']              = 'Presupuesto';
$lang['proposal_convert_invoice']               = 'Factura';
$lang['proposal_convert_to_estimate']           = 'Convertir a presupuesto';
$lang['proposal_convert_to_invoice']            = 'Convertir a factura';
$lang['proposal_convert_to_lead_disabled_help'] = 'Necesitas convertir el cliente potencial a cliente para poder crear %s';
$lang['proposal_convert_not_related_help']      = 'La propuesta debe estar relacionada con el cliente para poder convertir. %s';
$lang['proposal_converted_to_estimate_success'] = 'Propuesta convertida para estimar con �xito.';
$lang['proposal_converted_to_invoice_success']  = 'Propuesta convertida a factura exitosamente.';
$lang['proposal_converted_to_estimate_fail']    = 'Error al convertir la propuesta a estimar';
$lang['proposal_converted_to_invoice_fail']     = 'Error al convertir la propuesta a factura';

# Proposals - view proposal template
$lang['proposal_total_info']   = 'Total %s';
$lang['proposal_accept_info']  = 'Aceptar';
$lang['proposal_decline_info'] = 'Rechazar';
$lang['proposal_pdf_info']     = 'PDF';

# Customers Portal
$lang['customer_reset_action']            = 'Reiniciar';
$lang['customer_reset_password_heading']  = 'Restablecer su contrase�a';
$lang['customer_forgot_password_heading'] = 'Se te olvid� tu contrase�a';
$lang['customer_forgot_password']         = '�Se te olvid� tu contrase�a?';
$lang['customer_reset_password']          = 'Contrase�a';
$lang['customer_reset_password_repeat']   = 'Repite la contrase�a';
$lang['customer_forgot_password_email']   = 'Email';
$lang['customer_forgot_password_submit']  = 'Enviar';
$lang['customer_ticket_subject']          = 'Tema';

# Email templates
$lang['email_template_proposals_fields_heading'] = 'Propuestas';

# Tasks
$lang['add_task_attachments']  = 'Adjunto archivo';
$lang['task_view_attachments'] = 'Archivos adjuntos';
$lang['task_view_description'] = 'Descripci�n';

# Customer Groups
$lang['customer_group_add_heading']      = 'Agregar nuevo grupo de clientes';
$lang['customer_group_edit_heading']     = 'Editar grupo de clientes';
$lang['new_customer_group']              = 'Nuevo grupo de clientes';
$lang['customer_group_name']             = 'Nombre';
$lang['customer_groups']                 = 'Grupos';
$lang['customer_group']                  = 'Grupo de clientes';
$lang['customer_group_lowercase']        = 'grupo de clientes';
$lang['customer_have_invoices_by']       = 'Contiene facturas por estado. %s';
$lang['customer_have_estimates_by']      = 'Contiene presupuestos por estado %s';
$lang['customer_have_contracts_by_type'] = 'Tener contratos por tipo %s';

# Custom fields
$lang['custom_field_show_on_table']              = 'Ver en la tabla';
$lang['custom_field_show_on_client_portal']      = 'Mostrar en el portal del cliente';
$lang['custom_field_show_on_client_portal_help'] = 'Si este campo est� marcado tambi�n se mostrar� en tablas.';
$lang['custom_field_visibility']                 = 'Visibilidad';

# Utilities # Menu Builder
$lang['utilities_menu_translate_name_help'] = 'Usted puede agregar aqu� otros idiomas.';
$lang['utilities_menu_icon']                = 'Icono';
$lang['active_menu_items']                  = 'Elementos del men� activo';
$lang['inactive_menu_items']                = 'Elementos de men� inactivos';
$lang['utilities_menu_url']                 = 'URL';
$lang['utilities_menu_name']                = 'Nombre';
$lang['utilities_menu_save']                = 'Guardar men�';

# Knowledge Base
$lang['view_articles_list']     = 'View Articles';
$lang['view_articles_list_all'] = 'All Articles';
$lang['als_all_articles']       = 'Articles';
$lang['als_kb_groups']          = 'Groups';

# Customizer Menu
$lang['menu_builder']            = 'Configuraci�n del men�';
$lang['main_menu']               = 'Men� principal';
$lang['setup_menu']              = 'Configuraci�n del men�';
$lang['utilities_menu_url_help'] = '%s se adjunta autom�ticamente a la url';

# Spam Filter - Tickets
$lang['spam_filters']                 = 'Filtros de Spam';
$lang['spam_filter']                  = 'Filtro de spam';
$lang['new_spam_filter']              = 'Nuevo filtro de spam';
$lang['spam_filter_blocked_senders']  = 'Remitentes bloqueados';
$lang['spam_filter_blocked_subjects'] = 'Temas bloqueados';
$lang['spam_filter_blocked_phrases']  = 'Frases bloqueadas';
$lang['spam_filter_content']          = 'Contenido';
$lang['spamfilter_edit_heading']      = 'Editar filtro de spam';
$lang['spamfilter_add_heading']       = 'A�adir filtro de spam';
$lang['spamfilter_type']              = 'Tipo';
$lang['spamfilter_type_subject']      = 'Tema';
$lang['spamfilter_type_sender']       = 'Remitente';
$lang['spamfilter_type_phrase']       = 'Frase';

# Tickets
$lang['block_sender']                = 'Bloquear remitente';
$lang['sender_blocked']              = 'Remitente bloqueado';
$lang['sender_blocked_successfully'] = 'Remitente bloqueado exitosamente';
$lang['ticket_date_created']         = 'Creado';

#KB
$lang['edit_kb_group'] = 'Editar grupo';

# Leads
$lang['edit_source'] = 'Editar fuente';
$lang['edit_status'] = 'Editar estado';

# Contacts
$lang['contract_type_edit'] = 'Editar tipo de contrato';

# Reports
$lang['report_by_customer_groups'] = 'Valor total por grupos de clientes';

#Utilities
$lang['ticket_pipe_log']      = 'Registro de solicitudes';
$lang['ticket_pipe_name']     = 'De';
$lang['ticket_pipe_email_to'] = 'A';
$lang['ticket_pipe_email']    = 'Desde el e-mail';
$lang['ticket_pipe_subject']  = 'Tema';
$lang['ticket_pipe_message']  = 'Mensaje';
$lang['ticket_pipe_date']     = 'Fecha';
$lang['ticket_pipe_status']   = 'Estado';

# Home
$lang['home_latest_activity']   = '�ltima actividad';
$lang['home_my_tasks']          = 'Mis tareas';
$lang['home_latest_activity']   = '�ltima actividad';
$lang['home_my_todo_items']     = 'Lista de trabajos';
$lang['home_widget_view_all']   = 'Ver todo';
$lang['home_stats_full_report'] = 'Reporte completo';

# Validation
$lang['form_validation_required']    = 'Ingrese su {field}.';
$lang['form_validation_valid_email'] = 'Los {field} El campo debe contener una direcci�n de email v�lida.';
$lang['form_validation_matches']     = 'Los {field} no coincide con el {param} campo.';
$lang['form_validation_is_unique']   = 'Los {field} El campo debe contener un valor �nico.';

# Version 1.0.8
# Notifications & Leads/Estimates/Invoices Activity Log
$lang['not_event']                                    = 'Calendario de eventos de hoy - %s ...';
$lang['not_event_public']                             = 'Evento p�blico comienza hoy - %s ...';
$lang['not_contract_expiry_reminder']                 = 'Recordatorio de expiraci�n del contrato - %s ...';
$lang['not_recurring_expense_cron_activity_heading']  = 'Gastos recurrentes';
$lang['not_recurring_invoices_cron_activity_heading'] = 'Facturas recurrentes';
$lang['not_recurring_total_renewed']                  = 'Total Renovado: %s';
$lang['not_recurring_expenses_action_taken_from']     = 'Acci�n tomada de gastos recurrentes';
$lang['not_invoice_created']                          = 'Factura creada:';
$lang['not_invoice_renewed']                          = 'Factura renovada:';
$lang['not_expense_renewed']                          = 'Gastos renovados:';
$lang['not_invoice_sent_to_customer']                 = 'Factura enviada al cliente: %s';
$lang['not_invoice_sent_yes']                         = 'S�';
$lang['not_invoice_sent_not']                         = 'No';
$lang['not_action_taken_from_recurring_invoice']      = 'Acci�n tomada de factura recurrente:';
$lang['not_new_reminder_for']                         = 'Nuevo recordatorio para %s';
$lang['not_received_one_or_more_messages_lead']       = 'Recibi� un email de cliente potencial';
$lang['not_received_lead_imported_email_integration'] = 'Importado desde la integraci�n de email';
$lang['not_lead_imported_attachment']                 = 'Archivo adjunto importado de email';
$lang['not_estimate_status_change']                   = 'Archivo adjunto importado de email';
$lang['not_estimate_status_updated']                  = 'Estado de presupuesto actualizado: desde: %s a %s';
$lang['not_goal_message_success']                     = '�Felicidades! Logramos un nuevo objetivo.<br /> Tipo de objetivo: %s
<br />Logro de objetivos: %s
<br />Objetivos en  total: %s
<br />Fecha de inicio: %s
<br />Fecha final: %s';
$lang['not_assigned_lead_to_you']                                 = 'cliente potencial %s asignado para ti';
$lang['not_lead_activity_assigned_to']                            = '%s asignado a %s';
$lang['not_lead_activity_attachment_deleted']                     = 'Adjunto eliminado';
$lang['not_lead_activity_status_updated']                         = '%s estado actualizado de cliente potencial de %s a %s';
$lang['not_lead_activity_contacted']                              = '%s contactado esta ventaja en %s';
$lang['not_lead_activity_created']                                = '%s cliente potencial creado';
$lang['not_lead_activity_marked_lost']                            = 'Marcado como borrado';
$lang['not_lead_activity_unmarked_lost']                          = 'Sin marcar como borrado';
$lang['not_lead_activity_marked_junk']                            = 'Marcado como borrado';
$lang['not_lead_activity_unmarked_junk']                          = 'Sin marcar como borrado';
$lang['not_lead_activity_added_attachment']                       = 'Archivo adjunto';
$lang['not_lead_activity_converted_email']                        = 'El correo electr�nico principal ha cambiado. El primer correo electr�nico principal fue:% sy se agreg� como cliente con correo electr�nico %s';
$lang['not_lead_activity_converted']                              = '%s Convertido este potencial al cliente.';
$lang['not_liked_your_post']                                      = '%s le gust� tu publicaci�n %s ...';
$lang['not_commented_your_post']                                  = '%s coment� tu publicaci�n %s ...';
$lang['not_liked_your_comment']                                   = '%s le gust� tu comentario %s ...';
$lang['not_proposal_assigned_to_you']                             = 'Propuesta asignada a usted - %s ...';
$lang['not_proposal_comment_from_client']                         = 'Nuevo comentario del cliente sobre la propuesta. %s ...';
$lang['not_proposal_proposal_accepted']                           = 'Propuesta aceptada - %s';
$lang['not_proposal_proposal_declined']                           = 'Propuesta rechazada - %s';
$lang['not_task_added_you_as_follower']                           = 'te agreg� como seguidor en la tarea %s ...';
$lang['not_task_added_someone_as_follower']                       = 'Agregado %s como seguidor en la tarea %s ...';
$lang['not_task_added_himself_as_follower']                       = 'se agreg� como seguidor en la tarea %s ...';
$lang['not_task_assigned_to_you']                                 = 'te asign� una tarea %s ...';
$lang['not_task_assigned_someone']                                = 'asignado %s a la tarea %s ...';
$lang['not_task_will_do_user']                                    = 'har� tarea %s ...';
$lang['not_task_new_attachment']                                  = 'Nuevo archivo adjunto agregado';
$lang['not_task_marked_as_complete']                              = 'tarea marcada como completa %s';
$lang['not_task_unmarked_as_complete']                            = 'tarea sin marcar como completa %s';
$lang['not_ticket_assigned_to_you']                               = 'Solicitud asignada a ti - %s ...';
$lang['not_ticket_reassigned_to_you']                             = 'Solicitud reasignado a usted - %s ...';
$lang['not_estimate_customer_accepted']                           = '�Felicidades! Presupuesto aceptado por el cliente con n�mero %s';
$lang['not_estimate_customer_declined']                           = 'Cliente rechaz� el presupuesto con el n�mero %s';
$lang['estimate_activity_converted']                              = 'Convertido el presupuesto a la factura.<br /> %s';
$lang['estimate_activity_created']                                = 'Cre� el presupuesto';
$lang['invoice_estimate_activity_removed_item']                   = 'elemento eliminado <b>%s</b>';
$lang['estimate_activity_number_changed']                         = 'N�mero de presupuesto desde %s a %s';
$lang['invoice_activity_number_changed']                          = 'N�mero de factura cambiado de %s a %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = 'art�culo actualizado de la descripci�n corta %s a %s';
$lang['invoice_estimate_activity_updated_item_long_description']  = 'elemento actualizado descripci�n larga de <b>%s</b> a <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate']              = 'tasa de art�culo actualizada de %s a %s';
$lang['invoice_estimate_activity_updated_qty_item']               = 'cantidad actualizada en el art�culo <b>%s</b> desde %s a %s';
$lang['invoice_estimate_activity_added_item']                     = 'a�adido nuevo art�culo <b>%s</b>';
$lang['invoice_estimate_activity_sent_to_client']                 = 'Presupuesto enviado al cliente';
$lang['estimate_activity_client_accepted_and_converted']          = 'El cliente acept� este Presupuesto. El presupuesto se convierte a factura con n�mero. %s';
$lang['estimate_activity_client_accepted']                        = 'El cliente acept� este Presupuesto';
$lang['estimate_activity_client_declined']                        = 'El cliente rechaz� este Presupuesto';
$lang['estimate_activity_marked']                                 = 'Presupuesto marcado como %s';
$lang['invoice_activity_status_updated']                          = 'Estado de factura actualizada desde %s a %s';
$lang['invoice_activity_created']                                 = 'cre� la factura';
$lang['invoice_activity_from_expense']                            = 'convertido a factura de gastos';
$lang['invoice_activity_recurring_created']                       = '[Recurrente] Factura creada por sistema';
$lang['invoice_activity_recurring_from_expense_created']          = '[Factura de gastos] Factura creada por sistema';
$lang['invoice_activity_sent_to_client_cron']                     = 'Factura enviada al cliente por sistema';
$lang['invoice_activity_sent_to_client']                          = 'factura enviada al cliente';
$lang['invoice_activity_marked_as_sent']                          = 'factura marcada como enviada';
$lang['invoice_activity_payment_deleted']                         = 'Se elimin� el pago de la factura. Pago #%s, cantidad total %s';
$lang['invoice_activity_payment_made_by_client']                  = 'El cliente realiz� el pago de la factura del total. <b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff']                   = 'pago registrado del total <b>%s</b> - %s';
$lang['invoice_activity_added_attachment']                        = 'Agregado adjunto';

# Navigation
$lang['top_search_placeholder'] = 'Buscar...';

# Staff
$lang['staff_profile_inactive_account'] = 'La cuenta de este miembro del personal est� inactiva.';

# Estimates
$lang['copy_estimate']                = 'Copiar presupuesto';
$lang['estimate_copied_successfully'] = 'Presupuesto copiado exitosamente';
$lang['estimate_copied_fail']         = 'Error al copiar el presupuesto';

# Tasks
$lang['tasks_view_assigned_to_user'] = 'Tareas asignadas para mi';
$lang['tasks_view_follower_by_user'] = 'Tareas que estoy siguiendo';
$lang['no_tasks_found']              = 'No se encontraron tareas';

# Leads
$lang['leads_dt_datecreated']       = 'Creado';
$lang['leads_sort_by']              = 'Ordenar por';
$lang['leads_sort_by_datecreated']  = 'fecha de creacion';
$lang['leads_sort_by_kanban_order'] = 'Orden en l�nea de tiempo';

# Authentication
$lang['check_email_for_resetting_password'] = 'Revise su correo electr�nico para obtener m�s instrucciones para restablecer su contrase�a';
$lang['inactive_account']                   = 'Cuenta inactiva';
$lang['error_setting_new_password_key']     = 'Error al establecer nueva contrase�a';
$lang['password_reset_message']             = 'Tu contrase�a ha sido restablecida. Por favor inicie sesi�n ahora!';
$lang['password_reset_message_fail']        = 'Error al restablecer su contrase�a. Int�ntalo de nuevo.';
$lang['password_reset_key_expired']         = 'Clave de contrase�a caducada o usuario inv�lido';
$lang['auth_reset_pass_email_not_found']    = 'Email no encontrado';
$lang['auth_reset_password_submit']         = 'Restablecer la contrase�a';

# Settings
$lang['settings_amount_to_words']          = 'Cantidad de palabras';
$lang['settings_amount_to_words_desc']     = 'Salida total del importe a palabras en factura / presupuesto.';
$lang['settings_amount_to_words_enabled']  = 'Habilitar';
$lang['settings_total_to_words_lowercase'] = 'Cantidad de palabras en min�sculas';
$lang['settings_show_tax_per_item']        = 'Mostrar IMPUESTO por art�culo';

# Reports
$lang['report_sales_months_three_months'] = '�ltimos 3 meses';
$lang['report_invoice_number']            = 'Factura #';
$lang['report_invoice_customer']          = 'Cliente';
$lang['report_invoice_date']              = 'Fecha';
$lang['report_invoice_duedate']           = 'Fecha de vencimiento';
$lang['report_invoice_amount']            = 'Cantidad';
$lang['report_invoice_amount_with_tax']   = 'Cantidad con impuesto';
$lang['report_invoice_amount_open']       = 'Cantidad abierta';
$lang['report_invoice_status']            = 'Estado';

#Version 1.0.9

# Home stats
$lang['home_stats_by_project_status'] = 'Estad�sticas por estado del proyecto';
$lang['home_invoice_overview']        = 'Resumen de facturas';
$lang['home_estimate_overview']       = 'Resumen de presupuestos';
$lang['home_proposal_overview']       = 'Resumen de propuestas';
$lang['home_lead_overview']           = 'Descripci�n general de clientes potenciales';
$lang['home_my_projects']             = 'Mis proyectos';
$lang['home_announcements']           = 'Anuncios';

# Settings
$lang['settings_leads_kanban_limit']                                    = 'L�mite de l�nea de tiempo por estado';
$lang['settings_group_misc']                                            = 'Carpeta';
$lang['show_projects_on_calendar']                                      = 'Proyectos';
$lang['settings_media_max_file_size_upload']                            = 'Tama�o m�ximo de archivo cargado en Archivos (MB)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = 'Permitir que el cliente / personal agregue / edite comentarios de tareas solo en la primera hora (no se aplican los administradores)';

# Email templates
$lang['email_template_only_domain_email'] = 'Solo email de dominio';

# Announcements
$lang['dismiss_announcement']   = 'Quitar anuncio';
$lang['announcement_from']      = 'Desde:';
$lang['announcement_date']      = 'Fecha de publicaci�n: %s';
$lang['announcement_not_found'] = 'Anuncio no encontrado';
$lang['announcements_recent']   = 'Anuncios recientes';

# General
$lang['zip_invoices']         = 'Facturas';
$lang['zip_estimates']        = 'Presupuestos';
$lang['zip_payments']         = 'Pagos';
$lang['setup_help']           = ' ';
$lang['clients_list_company'] = 'Empresa';
$lang['dt_button_export']     = 'Exportar';
$lang['dt_entries']           = 'entradas';
$lang['invoice_total_paid']   = 'Total pagado';
$lang['invoice_amount_due']   = 'Cantidad debida';

# Calendar
$lang['calendar_project'] = 'Proyecto';

# Leads
$lang['leads_import_assignee']     = 'Responsable (Asignado)';
$lang['customer_from_lead']        = 'Cliente de %s';
$lang['lead_kan_ban_attachments']  = 'Archivos adjuntos: %s';
$lang['leads_sort_by_lastcontact'] = 'Ultimo contacto';

# Tasks
$lang['task_comment_added']     = 'Comentario agregado exitosamente';
$lang['task_duedate']           = 'Fecha de vencimiento';
$lang['task_view_comments']     = 'Comentarios';
$lang['task_comment_updated']   = 'Comentario actualizado';
$lang['task_visible_to_client'] = 'Visible al cliente';
$lang['task_hourly_rate']       = 'Tarifa por hora';
$lang['hours']                  = 'Houras';
$lang['seconds']                = 'Segundos';
$lang['minutes']                = 'Minutos';
$lang['task_start_timer']       = 'Temporizador de inicio';
$lang['task_stop_timer']        = 'Temporizador de parada';
$lang['task_billable']          = 'Facturable';
$lang['task_billable_yes']      = 'Facturable';
$lang['task_billable_no']       = 'No facturable';
$lang['task_billed']            = 'Facturado';
$lang['task_billed_yes']        = 'Facturado';
$lang['task_billed_no']         = 'No facturado';
$lang['task_user_logged_time']  = 'Su tiempo registrado:';
$lang['task_total_logged_time'] = 'Tiempo total registrado:';
$lang['task_is_billed']         = 'Esta tarea se factura en factura con n�mero. %s';
$lang['task_statistics']        = 'Estad�sticas';
$lang['task_milestone']         = 'Objetivo';

# Tickets
$lang['ticket_message_updated_successfully'] = 'Mensaje actualizado exitosamente';

# Invoices
$lang['invoice_task_item_project_tasks_not_included'] = 'Las tareas de proyectos no est�n incluidas en esta lista.';
$lang['show_quantity_as']                             = 'Mostrar cantidad como:';
$lang['quantity_as_qty']                              = 'Cantidad';
$lang['quantity_as_hours']                            = 'Horas';
$lang['invoice_table_hours_heading']                  = 'Horas';
$lang['bill_tasks']                                   = 'Contador de tareas';
$lang['invoice_estimate_sent_to_email']               = 'Email para';

# Estimates
$lang['estimate_table_hours_heading'] = 'Horas';

# General
$lang['is_customer_indicator']         = 'Cliente';
$lang['print']                         = 'Imprimir';
$lang['customer_permission_projects']  = 'Proyectos';
$lang['no_timers_found']               = 'No se encontraron temporizadores iniciados';
$lang['timers_started_confirm_logout'] = 'Se iniciaron cron�metros de tareas! <br /> �Est� seguro de que desea cerrar la sesi�n sin detener los temporizadores?';
$lang['confirm_logout']                = 'Cerrar sesi�n';
$lang['timer_top_started']             = 'Empez� a las %s';

# Projects
$lang['cant_change_billing_type_billed_tasks_found']         = 'No puede cambiar el tipo de facturaci�n. Tareas facturadas ya encontradas para este proyecto.';
$lang['project_customer_permission_warning']                 = 'El sistema indic� que el contacto principal no tiene permiso para proyectos. El contacto principal no podr� ver el proyecto. Considere agregar permiso en el perfil de contacto.';
$lang['project_invoice_timesheet_start_time']                = 'Hora de inicio: %s';
$lang['project_invoice_timesheet_end_time']                  = 'Hora de finalizaci�n: %s';
$lang['project_invoice_timesheet_total_logged_time']         = 'Tiempo registrado: %s';
$lang['project_view_as_client']                              = 'Ver proyecto como cliente';
$lang['project_mark_all_tasks_as_completed']                 = 'Marque todas las tareas como completadas y detenga todos los temporizadores (no se env�an notificaciones a los miembros del proyecto)';
$lang['project_not_started_status_tasks_timers_found']       = 'Temporizadores de tareas encontrados para este proyecto, pero el proyecto tiene el estado No iniciado. Recomendado para cambiar el estado del proyecto a En curso';
$lang['project_status']                                      = 'Estado';
$lang['project_status_1']                                    = 'No empezado';
$lang['project_status_2']                                    = 'En progreso';
$lang['project_status_3']                                    = 'En espera';
$lang['project_status_4']                                    = 'Terminado';
$lang['project_file_dateadded']                              = 'Fecha de subida';
$lang['project_file_filename']                               = 'Nombre del archivo';
$lang['project_file__filetype']                              = 'Tipo de archivo';
$lang['project_file_visible_to_customer']                    = 'Visible para el cliente';
$lang['project_file_uploaded_by']                            = 'subido por';
$lang['edit_project']                                        = 'Editar proyecto';
$lang['copy_project']                                        = 'Copiar Proyecto';
$lang['delete_project']                                      = 'Eliminar proyecto';
$lang['project_task_assigned_to_user']                       = 'Tarea asignada a usted';
$lang['seconds']                                             = 'Segundos';
$lang['hours']                                               = 'Horas';
$lang['minutes']                                             = 'Minutos';
$lang['project']                                             = 'Proyecto';
$lang['project_lowercase']                                   = 'proyecto';
$lang['projects']                                            = 'Proyectos';
$lang['projects_lowercase']                                  = 'proyectos';
$lang['project_settings']                                    = 'Ajustes del proyecto';
$lang['project_invoiced_successfully']                       = 'Proyecto facturado con �xito';
$lang['new_project']                                         = 'Nuevo proyecto';
$lang['project_files']                                       = 'Archivos';
$lang['project_activity']                                    = 'Actividad';
$lang['project_name']                                        = 'Nombre del proyecto';
$lang['project_description']                                 = 'Descripci�n';
$lang['project_customer']                                    = 'Cliente';
$lang['project_start_date']                                  = 'Fecha de inicio';
$lang['project_datecreated']                                 = 'Fecha de creacion';
$lang['project_deadline']                                    = 'Fecha tope';
$lang['project_billing_type']                                = 'Tipo de facturaci�n';
$lang['project_billing_type_fixed_cost']                     = 'Tipo de inter�s fijo';
$lang['project_billing_type_project_hours']                  = 'Horas del proyecto';
$lang['project_billing_type_project_task_hours']             = 'Horas de tarea';
$lang['project_billing_type_project_task_hours_hourly_rate'] = 'Basado en la tarifa por hora de la tarea';
$lang['project_rate_per_hour']                               = 'Costo por hora';
$lang['project_total_cost']                                  = 'Costo total';
$lang['project_members']                                     = 'Miembros';
$lang['project_member_removed']                              = 'Miembro del proyecto eliminado exitosamente';
$lang['project_overview']                                    = 'Descripci�n del proyecto';
$lang['project_gant']                                        = 'Vista de Gantt';
$lang['project_milestones']                                  = 'Objetivos';
$lang['project_milestone_order']                             = 'Orden';
$lang['project_milestone_duedate_passed']                    = 'Fecha de vencimiento pasada';
$lang['record_timesheet']                                    = 'Hoja de horas';
$lang['new_milestone']                                       = 'Nuevo objetivo';
$lang['edit_milestone']                                      = 'Editar Objetivo';
$lang['milestone_name']                                      = 'Nombre';
$lang['milestone_due_date']                                  = 'Fecha de vencimiento';
$lang['project_milestone']                                   = 'Objetivo';
$lang['project_notes']                                       = 'Notas';
$lang['project_timesheets']                                  = 'Hojas de horas';
$lang['project_timesheet']                                   = 'Hoja de horas';
$lang['milestone_total_logged_time']                         = 'Tiempo registrado';
$lang['project_overview_total_logged_hours']                 = 'Total de horas registradas';
$lang['milestones_uncategorized']                            = 'Sin categorizar';
$lang['milestone_no_tasks_found']                            = 'No se encontraron tareas';
$lang['project_copied_successfully']                         = 'Datos del proyecto copiados exitosamente';
$lang['failed_to_copy_project']                              = 'Error al copiar el proyecto';
$lang['copy_project_task_include_check_list_items']          = 'Copiar los elementos de la lista de verificaci�n';
$lang['copy_project_task_include_assignees']                 = 'Copia los mismos asignados.';
$lang['copy_project_task_include_followers']                 = 'Copia los mismos seguidores';
$lang['project_days_left']                                   = 'D�as restantes';
$lang['project_open_tasks']                                  = 'Tareas abiertas';
$lang['timesheet_stop_timer']                                = 'Temporizador de parada';
$lang['failed_to_add_project_timesheet_end_time_smaller']    = 'Error al agregar la hoja de tiempo. La hora de finalizaci�n es m�s peque�a que la de inicio.';
$lang['project_timesheet_user']                              = 'Miembro';
$lang['project_timesheet_start_time']                        = 'Hora de inicio';
$lang['project_timesheet_end_time']                          = 'Hora de finalizaci�n';
$lang['project_timesheet_time_spend']                        = 'Tiempo usado';
$lang['project_timesheet_task']                              = 'Tarea';
$lang['project_invoices']                                    = 'Facturas';
$lang['total_logged_hours_by_staff']                         = 'Tiempo total registrado';
$lang['invoice_project']                                     = 'Proyecto de factura';
$lang['invoice_project_info']                                = 'Informaci�n de la factura del proyecto';
$lang['invoice_project_data_single_line']                    = 'Linea sola';
$lang['invoice_project_data_task_per_item']                  = 'Tarea por art�culo';
$lang['invoice_project_data_timesheets_individually']        = 'Todas las hojas de tiempo individualmente';
$lang['invoice_project_item_name_data']                      = 'Nombre del �rticulo';
$lang['invoice_project_description_data']                    = 'Descripci�n';
$lang['invoice_project_projectname_taskname']                = 'Nombre del proyecto + Nombre de la tarea';
$lang['invoice_project_all_tasks_total_logged_time']         = 'Todas las tareas + tiempo total registrado por tarea';
$lang['invoice_project_project_name_data']                   = 'Nombre del proyecto';
$lang['invoice_project_timesheet_individually_data']         = 'Hora de inicio de la hoja de tiempo + hora de finalizaci�n + tiempo total registrado';
$lang['invoice_project_total_logged_time_data']              = 'Tiempo total registrado';
$lang['project_allow_client_to']                             = 'Permitir al cliente %s';
$lang['project_setting_view_task_attachments']               = 'ver adjuntos de tareas';
$lang['project_setting_view_task_checklist_items']           = 'ver los elementos de la lista de verificaci�n de tareas';
$lang['project_setting_upload_files']                        = 'subir archivos';
$lang['project_setting_view_task_comments']                  = 'ver comentarios de tareas';
$lang['project_setting_upload_on_tasks']                     = 'subir archivos adjuntos en tareas';
$lang['project_setting_view_task_total_logged_time']         = 'ver el tiempo total registrado de la tarea';
$lang['project_setting_open_discussions']                    = 'discusiones abiertas';
$lang['project_setting_comment_on_tasks']                    = 'comentar sobre las tareas del proyecto';
$lang['project_setting_view_tasks']                          = 'ver tareas';
$lang['project_setting_view_milestones']                     = 'ver objetivos';
$lang['project_setting_view_gantt']                          = 'ver Gantt';
$lang['project_setting_view_timesheets']                     = 'ver hojas de tiempo';
$lang['project_setting_view_activity_log']                   = 'ver registro de actividad';
$lang['project_setting_view_team_members']                   = 'ver los miembros del equipo';
$lang['project_discussion_visible_to_customer_yes']          = 'Visible';
$lang['project_discussion_visible_to_customer_no']           = 'No visible';
$lang['project_discussion_posted_on']                        = 'Publicado en %s';
$lang['project_discussion_posted_by']                        = 'Publicado por %s';
$lang['project_discussion_failed_to_delete']                 = 'Error al eliminar la discusi�n';
$lang['project_discussion_deleted']                          = 'Discusi�n eliminada exitosamente';
$lang['project_discussion_no_activity']                      = 'Ninguna actividad';
$lang['project_discussion']                                  = 'Debate';
$lang['project_discussions']                                 = 'Debates';
$lang['edit_discussion']                                     = 'Editar Debate';
$lang['new_project_discussion']                              = 'Crear Debate';
$lang['project_discussion_subject']                          = 'Tema';
$lang['project_discussion_description']                      = 'Descripci�n';
$lang['project_discussion_show_to_customer']                 = 'Visible para el cliente';
$lang['project_discussion_total_comments']                   = 'Total de comentarios';
$lang['project_discussion_last_activity']                    = '�ltima actividad';
$lang['discussion_add_comment']                              = 'Agregar comentario';
$lang['discussion_newest']                                   = 'El m�s nuevo';
$lang['discussion_oldest']                                   = 'El m�s antiguo';
$lang['discussion_attachments']                              = 'Archivos adjuntos';
$lang['discussion_send']                                     = 'Enviar';
$lang['discussion_reply']                                    = 'Responder';
$lang['discussion_edit']                                     = 'Editar';
$lang['discussion_edited']                                   = 'Modificar';
$lang['discussion_you']                                      = 'T�';
$lang['discussion_save']                                     = 'Guardar';
$lang['discussion_delete']                                   = 'Borrar';
$lang['discussion_view_all_replies']                         = 'Mostrar todas las respuestas';
$lang['discussion_hide_replies']                             = 'Ocultar respuestas';
$lang['discussion_no_comments']                              = 'Sin comentarios';
$lang['discussion_no_attachments']                           = 'Sin adjuntos';
$lang['discussion_attachments_drop']                         = 'Arrastra y suelta para subir el archivo';
$lang['project_note']                                        = 'Nota';
$lang['project_note_private']                                = 'Notas privadas';
$lang['project_save_note']                                   = 'Guardar nota';

# Project Activity
$lang['project_activity_created']                      = 'Cre� el proyecto';
$lang['project_activity_updated']                      = 'Proyecto actualizado';
$lang['project_activity_removed_team_member']          = 'Miembro del equipo eliminado';
$lang['project_activity_added_team_member']            = 'Nuevo miembro del equipo agregado';
$lang['project_activity_marked_all_tasks_as_complete'] = 'Marc� todas las tareas como completas';
$lang['project_activity_recorded_timesheet']           = 'Hoja de tiempo grabada';
$lang['project_activity_task_name']                    = 'Tarea:';
$lang['project_activity_deleted_discussion']           = 'Discusi�n eliminada';
$lang['project_activity_created_discussion']           = 'Discusi�n creada';
$lang['project_activity_updated_discussion']           = 'Discusi�n actualizada';
$lang['project_activity_commented_on_discussion']      = 'Coment� en la discusi�n';
$lang['project_activity_deleted_discussion_comment']   = 'Comentario de discusi�n eliminado';
$lang['project_activity_deleted_milestone']            = 'Objetivo eliminado';
$lang['project_activity_updated_milestone']            = 'Objetivo actualizado';
$lang['project_activity_created_milestone']            = 'Creado nuevo objetivo';
$lang['project_activity_invoiced_project']             = 'Proyecto facturado';
$lang['project_activity_task_marked_complete']         = 'Tarea marcada como completa';
$lang['project_activity_task_unmarked_complete']       = 'Tarea sin marcar como completada';
$lang['project_activity_task_deleted']                 = 'Tarea eliminada';
$lang['project_activity_new_task_comment']             = 'Comentado en la tarea';
$lang['project_activity_new_task_attachment']          = 'Adjunto cargado en la tarea';
$lang['project_activity_new_task_assignee']            = 'Agregado nuevo asignatado de tareas';
$lang['project_activity_task_assignee_removed']        = 'Tarea asignada eliminada';
$lang['project_activity_task_timesheet_deleted']       = 'Hoja de tiempo eliminada';
$lang['project_activity_uploaded_file']                = 'Archivo de proyecto subido';
$lang['project_activity_status_updated']               = 'Estado actualizado del proyecto';
$lang['project_activity_visible_to_customer']          = 'Visible al cliente';
$lang['project_activity_project_file_removed']         = 'Archivo de proyecto eliminado';

# Customers area
$lang['clients_my_estimates']                                  = 'Presupuestos';
$lang['client_no_reply']                                       = 'Sin respuesta';
$lang['clients_nav_projects']                                  = 'Proyectos';
$lang['clients_my_projects']                                   = 'Proyectos';
$lang['client_profile_image']                                  = 'Imagen de perfil';
$lang['sales_report_cancelled_invoices_not_included']          = 'Las facturas canceladas quedan excluidas del informe.';
$lang['invoices_merge_cancel_merged_invoices']                 = 'Marcar facturas fusionadas como canceladas en lugar de eliminarlas';
$lang['invoice_marked_as_cancelled_successfully']              = 'Factura marcada como cancelada con �xito';
$lang['invoice_unmarked_as_cancelled']                         = 'Factura no marcada como cancelada con �xito';
$lang['tasks_reminder_notification_before']                    = 'Recordatorio de la fecha l�mite de la tarea antes (d�as)';
$lang['not_task_deadline_reminder']                            = 'Recordatorio de la fecha l�mite de la tarea';
$lang['dt_length_menu_all']                                    = 'Todos';
$lang['task_not_finished']                                     = 'Sin completar';
$lang['task_billed_cant_start_timer']                          = 'Tarea facturada. Temporizador no se puede iniciar';
$lang['invoice_task_billable_timers_found']                    = 'Se iniciaron los temporizadores';
$lang['project_timesheet_not_updated']                         = 'Hoja de tiempo no afectada';
$lang['project_invoice_task_no_timers_found']                  = 'No se encontraron temporizadores para esta tarea';
$lang['invoice_project_tasks_not_started']                     = 'A�n no ha comenzado | Fecha de inicio: %s';
$lang['invoice_project_see_billed_tasks']                      = 'Ver las tareas que se facturar�n.';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = 'Todas las tareas facturadas se marcar�n como finalizadas.';
$lang['invoice_project_nothing_to_bill']                       = 'No hay tareas para facturar. Puede agregar lo que quiera en la factura.';
$lang['invoice_project_start_date_tasks_not_passed']           = 'Las tareas con fecha de inicio futura no se pueden facturar';
$lang['invoice_project_stop_all_timers']                       = 'Detener todos los temporizadores';
$lang['invoice_project_stop_billable_timers_only']             = 'Detener solo temporizadores facturables';
$lang['project_tasks_total_timers_stopped']                    = 'Total detenido %s temporizadores';
$lang['project_invoice_timers_started']                        = 'Los temporizadores de tareas que se encuentran ejecut�ndose en tareas facturables, no se pueden crear facturas. Detenga los temporizadores de tareas para crear la factura.';
$lang['task_start_timer_only_assignee']                        = '�Debes ser asignado en esta tarea para iniciar el temporizador!';
$lang['task_comments']                                         = 'Comentarios';
$lang['invoice_total_tax']                                     = 'Total impuestos';
$lang['estimates_total_tax']                                   = 'Total impuestos';
$lang['report_invoice_total_tax']                              = 'Total impuestos';
$lang['home_tickets']                                          = 'Solicitudes';
$lang['home_project_activity']                                 = 'Actividad m�s reciente del proyecto';
$lang['view_tracking']                                         = 'Seguimiento de vistas';
$lang['view_date']                                             = 'Fecha';
$lang['view_ip']                                               = 'Direcci�n IP';
$lang['article_total_views']                                   = 'Vistas totales';
$lang['leads_source']                                          = 'Fuente';
$lang['invoices_available_for_merging']                        = 'Facturas disponibles para fusionar';
$lang['invoices_merge_discount']                               = 'Usted tendr� que aplicar el descuento del total %s manualmente a esta factura';
$lang['invoice_merge_number_warning']                          = 'La fusi�n de facturas crear� vac�os en los n�meros de factura. No fusione las facturas si no desea que haya vac�os en su historial de facturas. Tambi�n tiene la opci�n de ajustar manualmente los n�meros de factura si desea llenar los vac�os.';
$lang['invoice_mark_as']                                       = 'Marcar como %s';
$lang['invoice_unmark_as']                                     = 'Desmarcar como %s';
$lang['invoice_status_cancelled']                              = 'Cancelado';
$lang['tasks_reminder_notification_before_help']               = 'Notificar a las personas asignadas sobre el plazo antes de X d�as. La notificaci�n / correo electr�nico se env�a s�lo a los asignados. Si la diferencia entre la fecha de inicio de la tarea y la fecha de vencimiento de la tarea es menor, el d�a de recordatorios no se enviar� ninguna notificaci�n.';

# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = 'Seleccionar todas las tareas';
$lang['lead_company']                     = 'Empresa';

# Version 1.1.1
$lang['admin_auth_forgot_password_button']       = 'Confirmar';
$lang['task_assigned']                           = 'Asignado a';
$lang['switch_to_pipeline']                      = 'Cambiar';
$lang['switch_to_list_view']                     = 'Cambiar a la lista';
$lang['estimates_pipeline']                      = 'Presupuestos';
$lang['estimates_pipeline_sort']                 = 'Ordenar por';
$lang['estimates_sort_expiry_date']              = 'Fecha de caducidad';
$lang['estimates_sort_pipeline']                 = 'Ordenes';
$lang['estimates_sort_datecreated']              = 'Fecha de creacion';
$lang['estimates_sort_estimate_date']            = 'Fecha estimada';
$lang['estimate_set_reminder_title']             = 'Establecer recordatorio de presupuesto';
$lang['invoice_set_reminder_title']              = 'Establecer recordatorio de factura';
$lang['estimate_reminders']                      = 'Recordatorios';
$lang['invoice_reminders']                       = 'Recordatorios';
$lang['estimate_notes']                          = 'Notas';
$lang['estimate_add_note']                       = 'Agregar nota';
$lang['dropdown_non_selected_tex']               = 'Nada seleccionado';
$lang['auto_close_ticket_after']                 = 'Auto cierre de solicitud despu�s (Horas)';
$lang['event_description']                       = 'Descripci�n';
$lang['delete_event']                            = 'Borrar';
$lang['not_new_ticket_created']                  = 'Nueva solicitud abierta en tu sector. - %s';
$lang['receive_notification_on_new_ticket']      = 'Recibir notificaci�n sobre nueva solicitud abierta.';
$lang['receive_notification_on_new_ticket_help'] = 'Todos los miembros del personal que pertenezcan al sector de las solicitudes recibir�n una notificaci�n de que la nueva solicitud est� abierto.';
$lang['event_updated']                           = 'Evento actualizado exitosamente';
$lang['customer_contacts']                       = 'Contactos';
$lang['new_contact']                             = 'Nuevo contacto';
$lang['contact']                                 = 'Contacto';
$lang['contact_lowercase']                       = 'contacto';
$lang['contact_primary']                         = 'Contacto primario';
$lang['contact_position']                        = 'Posici�n';
$lang['contact_active']                          = 'Activo';
$lang['client_company_info']                     = 'Detalles de la compa��a';
$lang['proposal_save']                           = 'Guardar propuesta';
$lang['calendar']                                = 'Calendario';
$lang['settings_pdf']                            = 'PDF';
$lang['settings_pdf_font']                       = 'PDF Fuente';
$lang['settings_pdf_table_heading_color']        = 'Color de encabezado de tabla de art�culos';
$lang['settings_pdf_table_heading_text_color']   = 'Color del texto del encabezado de la tabla de elementos';
$lang['settings_pdf_font_size']                  = 'Tama�o de fuente predeterminado';
$lang['proposal_status_draft']                   = 'Borrador';
$lang['custom_field_contacts']                   = 'Contactos';
$lang['company_primary_email']                   = 'Correo electr�nico principal';
$lang['client_register_contact_info']            = 'Informaci�n de contacto principal';
$lang['client_register_company_info']            = 'Informaci�n de la empresa';
$lang['contact_permissions_info']                = 'Aseg�rese de establecer los permisos apropiados para este contacto';
$lang['default_leads_kanban_sort']               = 'Predeterminado l�nea de tiempo';
$lang['default_leads_kanban_sort_type']          = 'Ordenar';
$lang['order_ascending']                         = 'Ascendente';
$lang['order_descending']                        = 'Descendiente';
$lang['calendar_expand']                         = 'expandir';
$lang['proposal_reminders']                      = 'Recordatorios';
$lang['proposal_set_reminder_title']             = 'Establecer recordatorio de propuesta';
$lang['settings_allowed_upload_file_types']      = 'Tipos de archivo permitidos';
$lang['no_primary_contact']                      = 'Este cliente tiene contacto primario. Debe configurar el inicio de sesi�n de contacto primario como cliente. Se recomienda a todos los clientes tener contactos primarios.';
$lang['leads_merge_customer']                    = 'Fusi�n de campos de clientes';
$lang['leads_merge_contact']                     = 'Campos de contacto que se fusionan';
$lang['leads_merge_as_contact_field']            = 'Fusionar como campo de contacto';
$lang['lead_convert_to_client_phone']            = 'Tel�fono';
$lang['invoice_status_report_all']               = 'Todos';
$lang['import_contact_field']                    = 'Campo de contacto';
$lang['file_uploaded_success']                   = 'No hay error, el archivo subido con �xito.';
$lang['file_exceeds_max_filesize']               = 'El archivo cargado excede la directiva upload_max_filesize en php.ini';
$lang['file_exceeds_maxfile_size_in_form']       = 'El archivo cargado excede la directiva MAX_FILE_SIZE que se especific� en el formulario HTML';
$lang['file_uploaded_partially']                 = 'El archivo cargado solo fue subido parcialmente';
$lang['file_not_uploaded']                       = 'ningun archivo fue subido';
$lang['file_missing_temporary_folder']           = 'Falta una carpeta temporal';
$lang['file_failed_to_write_to_disk']            = 'Error al escribir el archivo en el disco.';
$lang['file_php_extension_blocked']              = 'Una extensi�n de PHP detuvo la carga del archivo.';
$lang['calendar_expand']                         = 'expandir';
$lang['view_pdf']                                = 'Ver PDF';
$lang['expense_repeat_every']                    = 'Repite cada';

# Version 1.1.2
$lang['leads_switch_to_kanban']                   = 'Cambiar a l�nea de tiempo';
$lang['survey_no_questions']                      = 'Esta encuesta a�n no tiene preguntas a�adidas.';
$lang['survey_submit']                            = 'Enviar';
$lang['contract_content']                         = 'Contrato';
$lang['contract_save']                            = 'Guardar contrato';
$lang['contract_send_to_email']                   = 'Enviar al correo electr�nico';
$lang['contract_send_to_client_modal_heading']    = 'Enviar contrato al correo electr�nico';
$lang['contract_send_to']                         = 'Enviar a';
$lang['contract_send_to_client_attach_pdf']       = 'Adjuntar PDF';
$lang['contract_send_to_client_preview_template'] = 'Vista previa de la plantilla de correo electr�nico';
$lang['include_attachments_to_email']             = 'Incluir archivos adjuntos al correo electr�nico';
$lang['contract_sent_to_client_success']          = 'El contrato se env�a con �xito al cliente.';
$lang['contract_sent_to_client_fail']             = 'No se pudo enviar el contrato';

# Version 1.1.3
$lang['client_invalid_username_or_password'] = 'usuario o contrase�a invalido';
$lang['client_old_password_incorrect']       = 'Tu contrase�a anterior es incorrecta';
$lang['client_password_changed']             = 'Tu contrase�a ha sido cambiada';

# Version 1.1.4
$lang['total_leads_deleted']                              = 'Total de clientes potenciales eliminados: %s';
$lang['total_clients_deleted']                            = 'Total de clientes eliminados: %s';
$lang['confirm_action_prompt']                            = '�Est�s seguro de que quieres realizar esta acci�n?';
$lang['mass_delete']                                      = 'Eliminar en masa';
$lang['email_protocol']                                   = 'Protocolo de correo electr�nico';
$lang['add_edit_members']                                 = 'A�adir / Editar Miembros';
$lang['project_overview_logged_hours']                    = 'Horas registradas:';
$lang['project_overview_billable_hours']                  = 'Horas facturables:';
$lang['project_overview_billed_hours']                    = 'Horas facturadas:';
$lang['project_overview_unbilled_hours']                  = 'Horas sin facturar:';
$lang['calendar_first_day']                               = 'Primer d�a';
$lang['permission_view']                                  = 'Ver';
$lang['permission_edit']                                  = 'Editar';
$lang['permission_create']                                = 'Crear';
$lang['permission_delete']                                = 'Borrar';
$lang['permission']                                       = 'Permiso';
$lang['permissions']                                      = 'Permisos';
$lang['proposals_pipeline']                               = 'Propuestas';
$lang['proposals_pipeline_sort']                          = 'Ordenar por';
$lang['proposals_sort_open_till']                         = 'Abierto hasta';
$lang['proposals_sort_pipeline']                          = 'Ordenes';
$lang['proposals_sort_datecreated']                       = 'Fecha de creacion';
$lang['proposals_sort_proposal_date']                     = 'Fecha de propuesta';
$lang['is_not_staff_member']                              = 'No hay miembro del personal';
$lang['lead_created']                                     = 'Creado';
$lang['access_tickets_to_none_staff_members']             = 'Permitir el acceso a las solicitudes para los no miembros del personal';
$lang['project_expenses']                                 = 'Gastos';
$lang['expense_currency']                                 = 'Moneda';
$lang['currency_valid_code_help']                         = 'Aseg�rese de ingresar el c�digo ISO de la moneda v�lida.';
$lang['week']                                             = 'Semana';
$lang['weeks']                                            = 'Semanas';
$lang['month']                                            = 'Mes';
$lang['months']                                           = 'Meses';
$lang['year']                                             = 'A�o';
$lang['years']                                            = 'A�os';
$lang['expense_report_category']                          = 'Categor�a';
$lang['expense_paid_via']                                 = 'Pagado a trav�s de %s';
$lang['item_as_expense']                                  = '[Gastos]';
$lang['show_help_on_setup_menu']                          = 'Mostrar el elemento del men� de ayuda en el men� de configuraci�n';
$lang['customers_summary_total']                          = 'Clientes totales';
$lang['filter_by']                                        = 'Filtrar por';
$lang['re_captcha']                                       = 'reCAPTCHA';
$lang['recaptcha_site_key']                               = 'Clave del sitio';
$lang['recaptcha_secret_key']                             = 'Clave secreta';
$lang['recaptcha_error']                                  = 'El campo reCAPTCHA indica que no eres un robot.';
$lang['smtp_username']                                    = 'Nombre de usuario SMTP';
$lang['smtp_username_help']                               = 'Rellene solo si su cliente de correo electr�nico utiliza el nombre de usuario para el inicio de sesi�n SMTP.';
$lang['pinned_project']                                   = 'Proyecto anclado';
$lang['pin_project']                                      = 'Proyecto bloqueado';
$lang['unpin_project']                                    = 'Proyecto desbloqueado';
$lang['smtp_encryption']                                  = 'Cifrado de correo electr�nico';
$lang['smtp_encryption_none']                             = 'Ninguna';
$lang['show_proposals_on_calendar']                       = 'Propuestas';
$lang['invoice_project_see_billed_expenses']              = 'Ver gastos que se facturar�n.';
$lang['project_overview_expenses']                        = 'Gastos totales';
$lang['project_overview_expenses_billable']               = 'Gastos facturables';
$lang['project_overview_expenses_billed']                 = 'Gastos facturados';
$lang['project_overview_expenses_unbilled']               = 'Gastos no facturados';
$lang['announcement_date_list']                           = 'Fecha';
$lang['project_setting_view_finance_overview']            = 'ver resumen de finanzas';
$lang['show_all_tasks_for_project_member']                = 'Permitir que todo el personal vea todas las tareas relacionadas con los proyectos (incluidos los no empleados)';
$lang['not_staff_added_as_project_member']                = 'Te agrego como miembro del proyecto';
$lang['report_expenses_base_currency_select_explanation'] = 'Debe seleccionar la moneda porque el sistema encontr� diferentes monedas utilizadas para los gastos.';

# Version 1.1.6
$lang['project_activity_recorded_expense']   = 'Gastos registrados';
$lang['save_customer_and_add_contact']       = 'Guardar y crear contacto';
$lang['tickets_chart_weekly_opening_stats']  = 'Estad�sticas semanales';
$lang['related_knowledgebase_articles']      = 'Art�culos relacionados';
$lang['detailed_overview']                   = 'Resumen de tareas';
$lang['tasks_total_checklists_finished']     = 'Total de elementos de la lista de verificaci�n marcados como finalizados';
$lang['tasks_total_added_attachments']       = 'Total de adjuntos agregados';
$lang['tasks_total_comments']                = 'Total de comentarios';
$lang['task_finished_on_time']               = 'Terminado a tiempo?';
$lang['task_finished_on_time_indicator']     = 'S�';
$lang['task_not_finished_on_time_indicator'] = 'No';
$lang['filter']                              = 'Filtrar';
$lang['task_filter_detailed_all_months']     = 'Todos los meses';
$lang['kb_article_slug']                     = 'Manual';

# Version 1.1.7
$lang['email_template_ticket_warning']          = 'Si la solicitud se importa con canalizaci�n de correo electr�nico y el contacto no existe en el CRM, los campos no ser�n reemplazados.';
$lang['auto_stop_tasks_timers_on_new_timer']    = 'Detenga todos los otros temporizadores iniciados al iniciar un nuevo temporizador';
$lang['notification_when_customer_pay_invoice'] = 'Recibir notificaci�n cuando el cliente pague la factura (incorporada)';
$lang['not_invoice_payment_recorded']           = 'Nuevo pago factura - %s';
$lang['email_template_contact_warning']         = 'Si el contacto no se registra mientras se realiza la acci�n, los campos de combinaci�n de contactos no se reemplazar�n.';
$lang['theme_style']                            = 'Estilo del tema';
$lang['change_role_permission_warning']         = 'El cambio de los permisos de los roles no afect� los permisos de los miembros actuales del personal que utilizan este rol.';
$lang['task_copied_successfully']               = 'Tarea copiada exitosamente';
$lang['failed_to_copy_task']                    = 'Error al copiar la tarea';
$lang['not_project_file_uploaded']              = 'Nuevo archivo de proyecto agregado';
$lang['settings_calendar_color']                = '%s Color';
$lang['settings_calendar_colors_heading']       = 'Estilo';
$lang['reminder']                               = 'Recordatorio';
$lang['back_to_tasks_list']                     = 'Volver a la lista de tareas';
$lang['copy_task_confirm']                      = 'Confirmar';
$lang['changing_items_affect_warning']          = 'Cambiar la informaci�n del art�culo no afectar� las facturas / presupuestos / propuestas creadas.';
$lang['tax_is_used_in_expenses_warning']        = 'No puede actualizar este impuesto porque el impuesto es utilizado por las transacciones de gastos.';
$lang['note']                                   = 'Nota';
$lang['leads_staff_report_converted']           = 'Total de clientes potenciales convertidos';
$lang['leads_staff_report_created']             = 'Total de clientes potenciales creados';
$lang['leads_staff_report_lost']                = 'Total de clientes perdidos';
$lang['client_go_to_dashboard']                 = 'Volver al portal';
$lang['show_estimate_reminders_on_calendar']    = 'Estimar recordatorios';
$lang['show_invoice_reminders_on_calendar']     = 'Recordatorios de factura';
$lang['show_proposal_reminders_on_calendar']    = 'Recordatorios de la propuesta';
$lang['calendar_estimate_reminder']             = 'Recordatorio de presupuesto';
$lang['calendar_invoice_reminder']              = 'Recordatorio de factura';
$lang['calendar_proposal_reminder']             = 'Recordatorio de propuesta';
$lang['proposal_due_after']                     = 'Propuesta Vencida Despu�s (d�as)';
$lang['project_progress']                       = 'Progreso';
$lang['calculate_progress_through_tasks']       = 'Calcular el progreso a trav�s de las tareas.';
$lang['allow_customer_to_change_ticket_status'] = 'Permitir que el cliente cambie el estado de la solicitud desde el �rea de clientes';
$lang['switch_to_general_report']               = 'Cambiar al informe del personal';
$lang['switch_to_staff_report']                 = 'Cambiar a informe general';
$lang['generate']                               = 'Generar';
$lang['from_date']                              = 'Desde la fecha';
$lang['to_date']                                = 'Hasta la fecha';
$lang['not_results_found']                      = 'No se han encontrado resultados';
$lang['lead_lock_after_convert_to_customer']    = 'No permitir que se editen los prospectos despu�s de que se conviertan a clientes (no se aplican los administradores)';
$lang['default_pipeline_sort']                  = 'Orden de canalizaci�n por defecto';
$lang['not_goal_message_failed']                = '�No logramos el objetivo!<br /> Tipo de objetivo: %s
<br />Logro de objetivos: %s
<br />Objetivos en  total: %s
<br />Fecha de inicio: %s
<br />Fecha final: %s';
$lang['toggle_full_view']             = 'Alternar vista completa';
$lang['not_estimate_invoice_deleted'] = 'La factura creada fue eliminada';
$lang['not_task_new_comment']         = 'coment� la tarea %s';

# Version 1.1.8
$lang['invoice_number_exists']                  = 'Este n�mero de factura existe para el a�o en curso.';
$lang['estimate_number_exists']                 = 'Este n�mero de presupuesto existe para el a�o en curso.';
$lang['email_exists']                           = 'el Email ya existe';
$lang['not_uploaded_project_file']              = 'Nuevo archivo subido';
$lang['not_created_new_project_discussion']     = 'Se crea nuevo debate de proyecto.';
$lang['not_commented_on_project_discussion']    = 'Nuevo comentario sobre la discusi�n del proyecto.';
$lang['all_staff_members']                      = 'Todos los miembros del personal';
$lang['help_project_permissions']               = 'VIEW le permite al miembro del personal ver TODOS los proyectos. Si solo desea que vean los proyectos que tienen asignados (agregados como miembros), no le d� permisos de VER.';
$lang['help_tasks_permissions']                 = 'VER permite al miembro del personal ver TODAS las tareas. Si solo desea que vean las tareas a las que est�n asignadas o que siguen, no le d� permisos de VER.';
$lang['expense_recurring_days']                 = 'D�a(s)';
$lang['expense_recurring_weeks']                = 'Semana(s)';
$lang['expense_recurring_months']               = 'Mes(s)';
$lang['expense_recurring_years']                = 'A�os(s)';
$lang['reset_to_default_color']                 = 'Restablecer el color predeterminado';
$lang['pdf_logo_width']                         = 'Ancho del logotipo (PX)';
$lang['drop_files_here_to_upload']              = 'Arrastra los archivos aqu� para subirlos';
$lang['browser_not_support_drag_and_drop']      = 'Su navegador no admite arrastrar y soltar archivos subidos';
$lang['remove_file']                            = 'Remover archivo';
$lang['you_can_not_upload_any_more_files']      = 'No puedes subir m�s archivos.';
$lang['custom_field_only_admin']                = 'Restrinja la visibilidad solo para administradores';
$lang['leads_default_source']                   = 'Fuente predeterminada';
$lang['clear_activity_log']                     = 'Borrar registro';
$lang['default_contact_permissions']            = 'Permisos de contacto predeterminados';
$lang['invoice_activity_marked_as_cancelled']   = 'Factura marcada como cancelada';
$lang['invoice_activity_unmarked_as_cancelled'] = 'Factura sin marcar como cancelada';
$lang['wait_text']                              = 'Por favor espera...';
$lang['projects_summary']                       = 'Resumen de proyectos';
$lang['dept_imap_host']                         = 'IMAP Host';
$lang['dept_encryption']                        = 'Cifrado';
$lang['dept_email_password']                    = 'Contrase�a';
$lang['dept_email_no_encryption']               = 'Sin cifrar';
$lang['failed_to_decrypt_password']             = 'Error al descifrar la contrase�a';
$lang['delete_mail_after_import']               = '�Borrar correo despu�s de importar?';
$lang['expiry_reminder_enabled']                = 'Enviar recordatorio de caducidad';
$lang['send_expiry_reminder_before']            = 'Enviar recordatorio de vencimiento antes (D�AS)';
$lang['not_expiry_reminder_sent']               = 'Recordatorio de expiraci�n enviado.';
$lang['send_expiry_reminder']                   = 'Enviar recordatorio de caducidad';
$lang['sent_expiry_reminder_success']           = 'Recordatorio de caducidad enviado con �xito.';
$lang['sent_expiry_reminder_fail']              = 'Error al enviar recordatorio de caducidad';
$lang['leads_default_status']                   = 'Estado por defecto';
$lang['item_description_placeholder']           = 'Descripci�n';
$lang['item_long_description_placeholder']      = 'Descripci�n larga';
$lang['item_quantity_placeholder']              = 'Cantidad';
$lang['item_rate_placeholder']                  = 'Tarifa';
$lang['tickets_summary']                        = 'Resumen de entradas';
$lang['tasks_list_priority']                    = 'Prioridad';
$lang['ticket_status_db_2']                     = 'En progreso';
$lang['ticket_status_db_1']                     = 'Abierto';
$lang['ticket_status_db_3']                     = 'Contestado';
$lang['ticket_status_db_4']                     = 'En espera';
$lang['ticket_status_db_5']                     = 'Cerrado';
$lang['ticket_priority_db_1']                   = 'Bajo';
$lang['ticket_priority_db_2']                   = 'Medio';
$lang['ticket_priority_db_3']                   = 'Alto';
$lang['customer_have_projects_by']              = 'Contiene proyectos por estado. %s';
$lang['customer_have_proposals_by']             = 'Contiene propuestas por estado. %s';
$lang['do_not_redirect_payment']                = 'No me redireccione al procesador de pagos.';
$lang['project_tickets']                        = 'Solicitudes';
$lang['invoice_report']                         = 'Informe de facturas';
$lang['payment_modes_report']                   = 'Modos de Pago (Transacciones)';
$lang['customer_admins']                        = 'Administradores de clientes';
$lang['assign_admin']                           = 'Asignar administrador';
$lang['customer_admin_date_assigned']           = 'Fecha asignada';
$lang['customer_admin_login_as_client_message'] = 'Hola %s. Est�s agregado como administrador a este cliente.';
$lang['ticket_form_validation_file_size']       = 'El tama�o del archivo debe ser menor que %s';
$lang['has_transactions_currency_base_change']  = 'Cambiar la moneda base solo es posible si no hay transacciones registradas en esa moneda. Eliminar las transacciones para cambiar la moneda base.';
$lang['customers_sort_all']                     = 'Todos';

# Version 1.1.9
$lang['use_recaptcha_customers_area']    = 'Habilitar reCAPTCHA en el �rea de clientes (Iniciar sesi�n / Registrarse)';
$lang['project_marked_as_finished']      = 'Proyecto completado';
$lang['project_status_updated']          = 'Estado del proyecto actualizado';
$lang['remove_decimals_on_zero']         = 'Eliminar decimales en n�meros / dinero con cero decimales (2.00 se convertir�n en 2, 2.25 permanecer�n 2.25)';
$lang['remove_tax_name_from_item_table'] = 'Eliminar el nombre de impuesto de la fila de la tabla de elementos';

# Version 1.2.0
$lang['not_billable_expenses_by_categories']      = 'Gastos no facturables por categor�as.';
$lang['billable_expenses_by_categories']          = 'Gastos facturables por categor�as';
$lang['format_letter_size']                       = 'Hoja A4';
$lang['pdf_formats']                              = 'Formatos de documentos';
$lang['swap_pdf_info']                            = 'Intercambiar detalles de la compa��a / cliente (detalles de la compa��a al lado derecho, detalles del cliente al lado izquierdo)';
$lang['expenses_filter_by_categories']            = 'Por categorias';
$lang['task_copy']                                = 'Copia';
$lang['estimate_status']                          = 'Estado';
$lang['expenses_report_exclude_billable']         = 'Excluir gastos facturables';
$lang['expenses_total']                           = 'Total';
$lang['estimate_activity_added_attachment']       = 'Agregado adjunto';
$lang['show_to_customer']                         = 'Mostrar al cliente';
$lang['hide_from_customer']                       = 'Ocultar del cliente';
$lang['expenses_report_total']                    = 'Total';
$lang['expenses_report']                          = 'Reporte de gastos';
$lang['expenses_report_total_tax']                = 'Total impuestos';
$lang['expenses_detailed_report']                 = 'Reporte detallado';
$lang['expense_not_billable']                     = 'No facturable';
$lang['notification_settings']                    = 'Configuraci�n de las notificaciones';
$lang['staff_with_roles']                         = 'Miembros del personal con roles';
$lang['specific_staff_members']                   = 'Miembros espec�ficos del personal';
$lang['proposal_mark_as']                         = 'Marcar como %s';
$lang['kb_report_total_answers']                  = 'Total';
$lang['ticket_message_edit']                      = 'Editar';
$lang['invoice_files']                            = 'Archivos de factura';
$lang['estimate_files']                           = 'Archivos de presupuesto';
$lang['proposal_files']                           = 'Archivos de propuestas';
$lang['invoices_awaiting_payment']                = 'Facturas en espera';
$lang['tasks_not_finished']                       = 'Ordenes sin terminar';
$lang['outstanding_invoices']                     = 'Facturas pendientes';
$lang['past_due_invoices']                        = 'Facturas vencidas';
$lang['paid_invoices']                            = 'Facturas pagadas';
$lang['invoice_estimate_year']                    = 'A�o';
$lang['task_stats_logged_hours']                  = 'Horas registradas';
$lang['leads_converted_to_client']                = 'Clientes potenciales';
$lang['task_assigned_from']                       = 'Esta tarea te fue asignada por %s';
$lang['new_note']                                 = 'Nueva nota';
$lang['my_tickets_assigned']                      = 'Solicitudes asignadas a mi';
$lang['filter_by_assigned']                       = 'Por miembro asignado';
$lang['staff_stats_total_logged_time']            = 'Tiempo total registrado';
$lang['staff_stats_last_month_total_logged_time'] = '�ltimo mes registrado tiempo';
$lang['staff_stats_this_month_total_logged_time'] = 'Tiempo registrado de este mes';
$lang['staff_stats_last_week_total_logged_time']  = 'Tiempo registrado de la semana pasada';
$lang['staff_stats_this_week_total_logged_time']  = 'Tiempo registrado de esta semana';
// Dont change this because are translated before for the projects timesheets and now are only used for readability.
$lang['timesheet_user']       = $lang['project_timesheet_user'];
$lang['timesheet_start_time'] = $lang['project_timesheet_start_time'];
$lang['timesheet_end_time']   = $lang['project_timesheet_end_time'];
$lang['timesheet_time_spend'] = $lang['project_timesheet_time_spend'];
$lang['task_timesheets']      = $lang['project_timesheets'];
$lang['task_log_time_start']  = $lang['project_timesheet_start_time'];
$lang['task_log_time_end']    = $lang['project_timesheet_end_time'];
$lang['task_single_log_user'] = $lang['project_timesheet_user'];

# Version 1.2.2
$lang['milestone_description']                      = 'Descripci�n';
$lang['description_visible_to_customer']            = 'Mostrar descripci�n al cliente';
$lang['upcoming_tasks']                             = 'Pr�ximas tareas';
$lang['paymentmethod_two_checkout_account_number']  = 'N�mero de cuenta (ID de vendedor)';
$lang['paymentmethod_two_checkout_private_key']     = 'Llave privada';
$lang['paymentmethod_two_checkout_publishable_key'] = 'Clave Publica';
$lang['payment_credit_card_number']                 = 'N�mero de tarjeta';
$lang['payment_credit_card_expiration_date']        = 'Fecha de caducidad';
$lang['payment_billing_email']                      = 'Email';
$lang['submit_payment']                             = 'Enviar pago';
$lang['2checkout_notice_payment']                   = 'Los detalles de la tarjeta de cr�dito se procesan mediante un token seguro proporcionado por 2Checkout';
$lang['2checkout_usage_notice']                     = 'Se requiere SSL si est� utilizando la API de pago 2Checkout. Se requiere llamar de forma segura a la tokenizaci�n y autorizaciones. El sistema funcionar� sin SSL, sin embargo, esto lo dejar� fuera de cumplimiento, lo que conlleva el riesgo de desactivaci�n de sus permisos de API.';
$lang['custom_field_disallow_customer_to_edit']     = 'No permitir al cliente editar este campo';
$lang['project_due_notice']                         = 'Este proyecto est� vencido por %s dias';
$lang['not_lead_added_attachment']                  = 'agregado nuevo adjunto al cliente %s';
$lang['lead_note_date_added']                       = 'Nota agregada: %s';
$lang['recurring_custom']                           = 'Personalizado';
// don't translate these, only added for better readability already translated for the expenses custom recurring feature.
$lang['invoice_recurring_months'] = $lang['expense_recurring_months'];
$lang['invoice_recurring_years']  = $lang['expense_recurring_years'];
$lang['invoice_recurring_days']   = $lang['expense_recurring_days'];
$lang['invoice_recurring_weeks']  = $lang['expense_recurring_weeks'];

# Version 1.2.4
$lang['document_direction']                                 = 'Direcci�n';
$lang['notify_project_members_status_change']               = 'Notificar a los miembros del proyecto que el estado ha cambiado';
$lang['not_project_status_updated']                         = 'Estado del proyecto actualizado desde %s a %s';
$lang['ticket_not_found']                                   = 'Solicitud no encontrado';
$lang['project_not_found']                                  = 'Proyecto no encontrado';
$lang['export_project_data']                                = 'Exportar datos del proyecto';
$lang['total_project_members']                              = 'Miembros Totales del Proyecto';
$lang['total_project_files']                                = 'Archivos adjuntos';
$lang['total_project_discussions_created']                  = 'Discusiones creadas';
$lang['project_member']                                     = 'Miembro';
$lang['total_project_discussions_comments']                 = 'Total comentarios del debate';
$lang['staff_total_task_assigned']                          = 'Total de tareas asignadas';
$lang['staff_total_comments_on_tasks']                      = 'Comentarios sobre tareas';
$lang['project_members_overview']                           = 'Resumen de los miembros del proyecto';
$lang['project_milestones_overview']                        = 'Resumen de objetivos';
$lang['total_tasks_in_milestones']                          = 'Total de tareas asignadas';
$lang['total_task_members_assigned']                        = 'Total de miembros asignados';
$lang['total_task_members_followers']                       = 'Total de seguidores';
$lang['total_milestones']                                   = 'Total de objetivos';
$lang['total_project_worked_days']                          = 'Total de d�as trabajados';
$lang['finance_overview']                                   = 'Resumen de Finanzas';
$lang['project_custom_fields']                              = 'Campos Personalizados';
$lang['total_tickets_related_to_project']                   = 'Entradas totales vinculadas al proyecto';
$lang['projects_total_invoices_created']                    = 'Total de facturas creadas';
$lang['do_not_send_invoice_payment_email_template_contact'] = 'No enviar facturas por correo electr�nico registrado a los contactos del cliente.';
$lang['no_preview_available_for_file']                      = 'No hay vista previa disponible para este archivo.';
$lang['project_activity_deleted_file_discussion_comment']   = 'Comentario de debate de archivo eliminado';
$lang['email_template_discussion_info']                     = 'Esta plantilla se utiliza para los correos de comentarios de debates de proyectos. (archivos de debates y debates regulares)';
$lang['format_a4_portrait_size']                            = 'Retrato';
$lang['only_show_contact_tickets']                          = 'En el �rea de clientes solo se muestran las entradas relacionadas con el contacto registrado (contacto principal no aplicado)';
$lang['cancel_overdue_reminders_invoice']                   = 'Evitar el env�o de recordatorios de vencimiento para esta factura';
$lang['customer_shipping_address_notice']                   = 'No complete la informaci�n de la direcci�n de env�o si no usar� la direcci�n de env�o en las facturas de los clientes';
$lang['timesheets_overview']                                = 'Resumen de hojas de tiempo';
$lang['invoice_status_draft']                               = 'Borrador';
$lang['save_as_draft']                                      = 'Guardar como borrador';
$lang['convert_and_save_as_draft']                          = 'Convertir y guardar como borrador';
$lang['convert']                                            = 'Convertir';
$lang['exclude_invoices_draft_from_client_area']            = 'Excluir facturas con estado de borrador del �rea de clientes';
$lang['invoice_draft_status_info']                          = 'Esta factura es con estado Borrador, el estado se cambiar� autom�ticamente cuando env�e la factura al cliente o marque como se envi�.';
$lang['task_info']                                          = 'Informaci�n de la tarea';
$lang['recurring_tasks']                                    = 'Recurrente';
// don't translate these, already translated
$lang['task_repeat_every']                         = $lang['expense_repeat_every'];
$lang['task_recurring_months']                     = $lang['expense_recurring_months'];
$lang['task_recurring_years']                      = $lang['expense_recurring_years'];
$lang['task_recurring_days']                       = $lang['expense_recurring_days'];
$lang['task_recurring_weeks']                      = $lang['expense_recurring_weeks'];
$lang['todays_tasks']                              = 'Tareas de hoy';
$lang['payment_mode_invoices_only']                = 'Solo facturas';
$lang['payment_mode_expenses_only']                = 'S�lo gastos';
$lang['task_no_checklist_items_found']             = 'Elementos de la lista de verificaci�n no encontrados para esta tarea';
$lang['task_no_description']                       = 'No hay descripci�n para esta tarea.';
$lang['expenses_reminders']                        = 'Recordatorios';
$lang['expense_set_reminder_title']                = 'Establecer recordatorio de gastos';
$lang['calendar_expense_reminder']                 = 'Recordatorios de gastos';
$lang['recurring_task']                            = 'Tarea recurrente';
$lang['disable_email_from_being_sent']             = 'Deshabilitar este correo de ser enviado';
$lang['not_sent_indicator']                        = 'No enviado';
$lang['proposal_status_revised']                   = 'Revisado';
$lang['customer_currency_change_notice']           = 'Si el cliente utiliza otra moneda, entonces la moneda base debe asegurarse de seleccionar la moneda adecuada para este cliente. No es posible cambiar la moneda despu�s de registrar las transacciones.';
$lang['click_to_add_content']                      = 'Haga clic aqu� para agregar contenido';
$lang['related_to_project']                        = 'Este %s est� relacionado con %s: %s';
$lang['back_to_lead']                              = 'Volver a cliente';
$lang['add_task_timer_started_warning']            = 'Detenga el temporizador de inicio actual para que esta tarea pueda agregar el nuevo temporizador manualmente.';
$lang['sending_email_contact_permissions_warning'] = 'Error al seleccionar autom�ticamente los contactos del cliente. Por favor, aseg�rese de que el cliente tenga contactos asociados con permiso %s';

# Version 1.2.6
$lang['currently_supported_currencies']                       = 'Monedas actualmente permitidas';
$lang['authorize_notice']                                     = 'Se requiere SSL si est� utilizando la API de pago AIM de Authorize.Net. Authorize.net solo soporta 1 moneda por cuenta. Aseg�rese de agregar solo 1 moneda asociada con su cuenta de Autorizaci�n en el campo de monedas.';
$lang['settings_paymentmethod_developer_mode']                = 'Modo desarrollador';
$lang['payment_cardholder_name']                              = 'Nombre de la tarjeta';
$lang['settings_paymentmethod_authorize_api_login_id']        = 'API Ingresar identificaci�n';
$lang['settings_paymentmethod_mollie_api_key']                = 'API Key';
$lang['settings_paymentmethod_authorize_api_transaction_key'] = 'API ID de transacci�n';
$lang['settings_paymentmethod_authorize_secret_key']          = 'Secret Key';
$lang['leads_report_converted_notice']                        = 'Solo los clientes potenciales que pertenezcan al estado predeterminado del Cliente se tomar�n como clientes potenciales convertidos, si los clientes potenciales pertenecen al estado predeterminado del cliente y no se convierten al cliente todav�a se contar�n como clientes potenciales convertidos';
$lang['payment_method']                                       = 'M�todo de pago';
$lang['payment_method_info']                                  = 'Algunos links de pago admiten m�todos de pago diferentes / m�ltiples como tarjeta de cr�dito, PayPal, banco.';

# Version 1.2.7
$lang['dropbox_app_key']                                    = 'Dropbox APP Key';
$lang['project_invoice_select_all_expenses']                = 'Selecciona todos los gastos';
$lang['role_update_staff_permissions']                      = 'Actualizar todos los permisos de los miembros del personal que est�n usando este rol';
$lang['customer_active']                                    = 'Activo';
$lang['note_updated_successfully']                          = 'Nota actualizada con �xito';
$lang['update_note']                                        = 'Actualizar nota';
$lang['update_comment']                                     = 'Actualizar comentario';
$lang['comment_updated_successfully']                       = 'Comentario actualizado exitosamente';
$lang['staff_send_welcome_email']                           = 'Enviar correo de bienvenida';
$lang['proposal_warning_email_change']                      = 'Correo electr�nico cambiado para %s. Esta %s esta vinculado a propuesta/s. �Quieres actualizar todos los correos electr�nicos de propuestas vinculados a %s?';
$lang['update_proposal_email_yes']                          = 'S� actualizar todos los correos electr�nicos vinculados.';
$lang['update_proposal_email_no']                           = 'No, voy a actualizar manualmente.';
$lang['proposals_emails_updated']                           = 'Todos los correos electr�nicos de propuestas vinculados a este %s actualizados a %s';
$lang['custom_field_company']                               = 'Empresa';
$lang['actions']                                            = 'Comportamiento';
$lang['project_mark_as']                                    = 'Marcar como %s';
$lang['todo_edit_title']                                    = 'Editar';
$lang['additional_action_required']                         = 'Acci�n adicional requerida!';
$lang['project_mark_tasks_finished_confirm']                = 'Confirmar';
$lang['project_marked_as_success']                          = 'Proyecto marcado como %s';
$lang['project_marked_as_failed']                           = 'Error al marcar el proyecto como %s';
$lang['auto_assign_customer_admin_after_lead_convert']      = 'Asignaci�n autom�tica como administrador al cliente despu�s de convertir';
$lang['auto_assign_customer_admin_after_lead_convert_help'] = 'Si esta opci�n se establece en S�, el miembro del personal que convirti� el cliente potencial en cliente se asignar� autom�ticamente como administrador del cliente. NOTA: Esta opci�n se aplicar� solo a los miembros del personal que no tienen permiso para los clientes VER';
$lang['auto_close_tickets_disable']                         = 'Establecer 0 para deshabilitar';
$lang['task_checklist_item_completed_by']                   = 'Completado por %s';
$lang['staff_email_signature_help']                         = 'Si se utilizar� la firma de correo electr�nico predeterminada vac�a de la configuraci�n';
$lang['default_task_priority']                              = 'Prioridad predeterminada';
$lang['project_send_created_email']                         = 'Enviar proyecto creado por email';
$lang['survey_send_to_lists']                               = 'Encuesta enviar listas';
$lang['survey_send_notice']                                 = 'Los correos electr�nicos ser�n enviados v�a sistema por hora.';

# Version 1.2.8
$lang['show_transactions_on_invoice_pdf']            = 'Mostrar facturas pagos (transacciones) en PDF';
$lang['bulk_actions']                                = 'Acciones masivas';
$lang['additional_filters']                          = 'Filtros adicionales';
$lang['expenses_available_to_bill']                  = 'Gastos disponibles para facturar.';
$lang['bulk_action_customers_groups_warning']        = 'Si no selecciona ning�n grupo, se eliminar�n todos los grupos asignados a los clientes seleccionados.';
$lang['customer_attachments_show_in_customers_area'] = 'Mostrar al �rea de clientes.';
$lang['customer_attachments_show_notice']            = 'Solo los archivos cargados desde el perfil del cliente tienen la capacidad de mostrar / ocultar en el �rea de clientes.';
$lang['customer_profile_files']                      = 'Archivos';
$lang['no_files_found']                              = 'No se encontraron archivos';
$lang['survey_customers_all']                        = 'Todos los clientes';
$lang['custom_field_column']                         = 'Cuadr�cula (Bootstrap Column eq. 12) - Max es 12';
$lang['task_status']                                 = 'Estado';
$lang['task_status_1']                               = 'No empezado';
$lang['task_status_2']                               = 'En espera';
$lang['task_status_3']                               = 'Pruebas';
$lang['task_status_4']                               = 'En progreso';
$lang['task_status_5']                               = 'Completada';
$lang['task_mark_as']                                = 'Marcar como %s';
$lang['task_marked_as_success']                      = 'Tarea marcada como %s';
$lang['search_tasks']                                = 'Buscar tarea';
$lang['tasks_kanban_limit']                          = 'Limitar tareas por estado';
$lang['show_on_invoice_on_pdf']                      = 'Mostrar %s en factura PDF';
$lang['show_pay_link_to_invoice_pdf']                = 'Mostrar enlace a PDF de factura de pago (no se aplica si el estado de la factura est� cancelado)';
$lang['no_leads_found']                              = 'No se encontraron clientes';
$lang['created_today']                               = 'Creado hoy';
$lang['total_tasks_deleted']                         = 'Total de tareas eliminadas: %s';
$lang['total_tickets_delete']                        = 'Total de solicitudes eliminadas: %s';
$lang['total_tickets_delete']                        = 'Total de solicitudes eliminadas: %s';
$lang['format_letter_portrait']                      = 'Letra de carta';
$lang['format_letter_landscape']                     = 'Letra de Paisaje';
$lang['period_datepicker']                           = 'Per�odo';
$lang['total_by_hourly_rate']                        = 'Total por tarifa por hora';
$lang['staff_hourly_rate']                           = $lang['task_hourly_rate'];
// &#37; is for % so the system can confuse for the original fields like %s
$lang['remove_tax_name_from_item_table_help'] = 'Ej. Art�culo IMPUESTO 15 & # 37; se mostrar� como 15 & # 37; sin el nombre del impuesto (No se aplica si se encontraron varios impuestos con el mismo nombre y porcentaje de impuesto para el art�culo)';
$lang['back_to_project']                      = 'Volver al proyecto';
$lang['view_kanban']                          = 'Ver l�nea de tiempo';
$lang['invoice_is_overdue']                   = 'Esta factura est� vencida por%s d�as';

# Version 1.2.9
$lang['time_decimal']                            = 'Tiempo (decimal)';
$lang['time_h']                                  = 'Tiempo (horas)';
$lang['proposal_number_prefix']                  = 'N�mero de propuesta Prefijo';
$lang['settings_number_padding_prefix']          = 'N�mero de relleno cero para los formatos de prefijo <br /> <small>Ej. Si este valor es 3, el n�mero ser� formateado: 005 o 025</small>';
$lang['this_week_payments']                      = 'Pagos de esta semana';
$lang['last_week_payments']                      = 'Pagos de la semana pasada';
$lang['not_published_new_post']                  = 'Hacer una publicaci�n';
$lang['expense_name']                            = 'Nombre';
$lang['expense_name_help']                       = 'Para uso personal';
$lang['adjustments']                             = 'Ajustes';
$lang['payments_received']                       = 'Pagos recibidos';
$lang['not_lead_activity_created_proposal']      = 'Nueva propuesta creada - %s';
$lang['lead_title']                              = 'Posici�n';
$lang['lead_address']                            = 'Direcci�n';
$lang['lead_city']                               = 'Ciudad';
$lang['lead_state']                              = 'Provincia';
$lang['lead_country']                            = 'Pa�s';
$lang['lead_zip']                                = 'Codigo postal';
$lang['lead_is_public_yes']                      = 'Si';
$lang['lead_is_public_no']                       = 'No';
$lang['lead_info']                               = 'Informaci�n de cliente';
$lang['lead_general_info']                       = 'Informaci�n general';
$lang['lead_latest_activity']                    = '�ltima actividad';
$lang['item_description_new_lines_notice']       = 'No se admiten nuevas l�neas para la descripci�n del art�culo. Utilice la descripci�n larga del art�culo en su lugar.';
$lang['estimates_report']                        = 'Informe de presupuestos';
$lang['confirm']                                 = 'Confirmar';
$lang['delete_staff']                            = 'Eliminar miembro del personal';
$lang['delete_staff_info']                       = 'Algunos datos de este miembro del personal deben transferirse a otro usuario. Seleccione el usuario al que desea transferir los datos.';
$lang['estimate_items']                          = 'Art�culos presupuestados';
$lang['no_proposals_found']                      = 'No se encontraron propuestas';
$lang['no_estimates_found']                      = 'No se encontraron presupuestos';
$lang['pipeline_limit_status']                   = 'L�mite por estado';
$lang['settings_update']                         = 'Actualizacion del sistema';
$lang['purchase_key']                            = 'Clave de compra';
$lang['update_now']                              = 'Actualizar ahora';
$lang['update_available']                        = 'Hay disponible una actualizaci�n';
$lang['latest_version']                          = 'Ultima versi�n';
$lang['your_version']                            = 'Tu versi�n';
$lang['using_latest_version']                    = 'Est�s utilizando la �ltima versi�n';
$lang['mark_as_active']                          = 'Marcar como activo';
$lang['customer_inactive_message']               = 'Este es el perfil de cliente inactivo y algunas caracter�sticas pueden estar deshabilitadas';
$lang['active_customers']                        = 'Clientes Activos';
$lang['inactive_active_customers']               = 'Clientes inactivos';
$lang['include_proposal_items_merge_field_help'] = 'Incluya elementos de propuesta con el campo de combinaci�n en cualquier parte del contenido de la propuesta como %s';
$lang['all_data_synced_successfully']            = 'Todos los datos sincronizados con �xito';
$lang['sync_now']                                = 'Sincronizar ahora';
$lang['sync_data']                               = 'Sincronizar datos';
$lang['sync_proposals_up_to_date']               = 'Todas las propuestas est�n actualizadas, nada para sincronizar.';
$lang['proposal_sync_1_info']                    = 'Todos los datos de la propuesta se almacenan por separado para cada propuesta despu�s de la creaci�n. Actualizar la informaci�n de %s no afectar� las propuestas creadas anteriormente para esto %s.';
$lang['proposal_sync_2_info']                    = 'Si ha actualizado recientemente la informaci�n de %s, puede sincronizar todos los datos nuevos con las propuestas asociadas. Aqu� hay una lista de campos que puedes sincronizar.';

# Version 1.3.0
$lang['expense_include_additional_data_on_convert'] = 'Incluya detalles adicionales a la descripci�n larga del art�culo tomada de este gasto.';

# Version 1.4.0
$lang['calendar_events_limit']                              = 'Calendario de eventos l�mite (mes y semana)';
$lang['show_page_number_on_pdf']                            = 'Mostrar n�mero de p�gina en PDF';
$lang['customer_active_inactive_help']                      = 'No se mostrar� en los men�s desplegables al crear nuevos registros';
$lang['item_groups']                                        = 'Grupos';
$lang['item_group']                                         = 'Grupo de art�culos';
$lang['item_group_name']                                    = 'Nombre del grupo';
$lang['new_item_group']                                     = 'Nuevo grupo';
$lang['show_setup_menu_item_only_on_hover']                 = 'Mostrar el elemento del men� de configuraci�n solo cuando se desplaza con el mouse en el �rea de barra lateral';
$lang['internal_article']                                   = 'Art�culo interno';
$lang['expenses_created_from_this_recurring_expense']       = 'Gastos creados a partir de este gasto recurrente.';
$lang['convert_to_task']                                    = 'Convertir a tarea';
$lang['next_invoice_date']                                  = 'Fecha de la pr�xima factura: %s';
$lang['next_expense_date']                                  = 'Siguiente Fecha de Gastos: %s';
$lang['invoice_recurring_from']                             = 'Esta factura se crea a partir de una factura recurrente con n�mero: %s';
$lang['expense_recurring_from']                             = 'Este gasto se crea a partir del siguiente gasto recurrente: %s';
$lang['child_invoices']                                     = 'Facturas';
$lang['child_expenses']                                     = 'Gastos';
$lang['no_announcements']                                   = 'No hay anuncios';
$lang['unit']                                               = 'Unidad';
$lang['permission_view_own']                                = 'Ver (Propio)';
$lang['permission_global']                                  = 'Global';
$lang['permission_customers_based_on_admins']               = 'Basado en el cliente admin';
$lang['permission_payments_based_on_invoices']              = 'Basado en facturas permiso VER (Propio)';
$lang['permission_projects_based_on_assignee']              = 'Si el miembro del personal no tiene permiso, VER (Global) se mostrar� solo en los proyectos donde el miembro del personal se agregue como miembro del proyecto.';
$lang['permission_tasks_based_on_assignee']                 = 'Si el miembro del personal no tiene permiso, VER (Global) mostrar� solo las tareas donde el miembro del personal es seguidor, asignado, la tarea es p�blica o en Configuraci�n-> Configuraci�n-> Tareas-> Permitir que todo el personal vea todas las tareas relacionadas con los proyectos. a S� cuando la tarea est� vinculada al proyecto.';
$lang['settings_paymentmethod_default_selected_on_invoice'] = 'Seleccionado por defecto en la factura';
$lang['paymentmethod_braintree_merchant_id']                = 'Comerciante ID';
$lang['paymentmethod_braintree_private_key']                = 'Llave privada';
$lang['paymentmethod_braintree_public_key']                 = 'Llave p�blica';
$lang['company_requires_vat_number_field']                  = 'La empresa requiere el uso del campo N�mero de IVA';
$lang['no_company_view_profile']                            = 'Persona - Ver perfil';
$lang['company_is_required']                                = '�Campo de la empresa es obligatorio?';
$lang['estimate_invoiced']                                  = 'Facturado';
$lang['file_date_uploaded']                                 = 'Fecha de subida';
$lang['allow_contact_to_delete_files']                      = 'Permitir que los contactos eliminen los propios archivos cargados desde el �rea de clientes';
$lang['file']                                               = 'Archivo';
$lang['customer_contact_person_only_one_allowed']           = 'Solo se permite 1 contacto cuando el campo de la compa��a no se llena. El sistema emitir� este cliente como persona.';
$lang['web_to_lead']                                        = 'Web para cliente';
$lang['web_to_lead_form']                                   = 'Formulario web para cliente';
$lang['new_form']                                           = 'Nuevo formulario';
$lang['form_name']                                          = 'Nombre del formulario';
$lang['cf_option_in_use']                                   = 'Una opci�n que ha eliminado est� en uso y no se puede eliminar. La opci�n se adjunta autom�ticamente a las opciones existentes.';
$lang['form_builder']                                       = 'Formulario -';
$lang['form_information']                                   = 'Informaci�n y configuraci�n del formulario';
$lang['form_builder_create_form_first']                     = 'Cree el formulario primero para poder utilizar el generador de formularios.';
$lang['notify_assigned_user']                               = 'Persona responsable';
$lang['form_recaptcha']                                     = 'Usar Google Recaptcha';
$lang['form_lang_validation']                               = 'Idioma';
$lang['form_lang_validation_help']                          = 'Para mensajes de validaci�n.';
$lang['form_btn_submit_text']                               = '(Enviar) texto del bot�n';
$lang['form_success_submit_msg']                            = 'Mensaje para mostrar despu�s de que el formulario se haya enviado correctamente';
$lang['total_submissions']                                  = 'Sumisiones totales';
$lang['form_integration_code']                              = 'Codigo de integracion';
$lang['not_lead_imported_from_form']                        = 'Nuevo cliente importado de la web al formulario de clientes - %s';
$lang['not_lead_activity_log_attachment']                   = 'Archivo adjunto importado de forma- %s';
$lang['form_integration_code_help']                         = 'Copie y pegue el c�digo en cualquier lugar de su sitio para mostrar el formulario, adem�s, puede ajustar el ancho y el alto de px para que se ajusten a su sitio web.';
$lang['invoice_not_found']                                  = 'Factura no encontrada';
$lang['estimate_not_found']                                 = 'Presupuesto no encontrado';
$lang['expense_not_found']                                  = 'Gastos no encontrados';
$lang['proposal_not_found']                                 = 'Propuesta no encontrada';
$lang['new_task_assigned_non_user']                         = 'Se te asigna una nueva tarea. - %s';
$lang['no_child_found']                                     = 'No %s encontrado';
$lang['company_vat_number']                                 = 'N�mero de valor agregado';
$lang['not_lead_assigned_from_form']                        = 'Se te asigna una nuevo cliente.';
$lang['not_lead_activity_assigned_from_form']               = 'Cliente asignado a %s';
$lang['form_allow_duplicate']                               = '�Permitir que se inserte %s duplicado en la base de datos?';
$lang['track_duplicate_by_field']                           = 'Prevenir duplicar en el campo';
$lang['and_track_duplicate_by_field']                       = '+ campo (deje en blanco para rastrear duplicados solo por 1 campo)';
$lang['create_the_duplicate_form_data_as_task']             = 'Cree datos %s duplicados como tarea y asigne a un miembro del personal responsable';
$lang['create_the_duplicate_form_data_as_task_help']        = 'Se utiliza para una revisi�n adicional de la presentaci�n y para tomar las medidas necesarias.';
$lang['currently_selected']                                 = 'Actualmente seleccionado';
$lang['search_ajax_empty']                                  = 'Seleccione y comience a escribir';
$lang['search_ajax_placeholder']                            = 'Escribe para buscar...';
$lang['search_ajax_searching']                              = 'Buscando...';
$lang['search_ajax_initialized']                            = 'Empieza a escribir para buscar';
$lang['lead_description']                                   = 'Descripci�n';
$lang['lead_website']                                       = 'Sitio web';
$lang['invoice_activity_auto_converted_from_estimate']      = 'Factura auto creada a partir de presupuesto con n�mero. %s';
$lang['hour_of_day_perform_auto_operations']                = 'Hora del d�a para realizar operaciones autom�ticas.';
$lang['hour_of_day_perform_auto_operations_format']         = 'Formato 24 horas Ej. 9 para las 9am o 15 para las 3pm.';
$lang['inv_hour_of_day_perform_auto_operations_help']       = 'Se utiliza para facturas recurrentes, avisos de vencimiento, etc.';
$lang['use_minified_files']                                 = 'Use la versi�n de archivos minificados para css y js (solo archivos de sistema)';

# Version 1.5.0
$lang['logo_favicon_changed_notice']       = 'Logo o cambio de Favicon detectado.';
$lang['kb_search_articles']                = 'Buscar manuales';
$lang['kb_search']                         = 'Buscar';
$lang['have_a_question']                   = '�Alguna pregunta?';
$lang['card_expiration_year']              = 'A�o de expiraci�n';
$lang['card_expiration_month']             = 'Mes de expiraci�n';
$lang['client_website']                    = 'Sitio web';
$lang['search_project_members']            = 'Buscar miembros del proyecto ...';
$lang['cf_translate_input_link_title']     = 'T�tulo';
$lang['cf_translate_input_link_url']       = 'URL';
$lang['cf_translate_input_link_tip']       = 'Haga clic aqu� para agregar un enlace';
$lang['task_edit_delete_timesheet_notice'] = 'La tarea de la hoja de tiempo es %s, no puede %s la hoja de tiempo.';
$lang['department_username']               = 'IMAP Nombre de usuario';
$lang['department_username_help']          = 'Solo llene este campo si su IMAP El servidor usa el nombre de usuario para iniciar sesi�n en lugar de la direcci�n de correo electr�nico. Tenga en cuenta que todav�a necesitar� agregar una direcci�n de correo electr�nico.';
$lang['total_tickets_deleted']             = 'Total de solicitudes eliminadas: %s';

# Version 1.5.1
$lang['ticket_linked_to_project']                                = 'Esta solicitud est� vinculado al proyecto: %s';
$lang['only_own_files_contacts']                                 = 'Los contactos solo ven los archivos propios cargados en el �rea del cliente (archivos cargados en el perfil del cliente)';
$lang['only_own_files_contacts_help']                            = 'Si comparte el archivo manualmente desde el perfil del cliente a otros contactos, podr�n ver el archivo.';
$lang['share_file_with']                                         = 'Compartir archivo con';
$lang['file_share_visibility_notice']                            = 'Este archivo no se comparte con los contactos, alterne la visibilidad nuevamente para recargar';
$lang['share_file_with_show']                                    = 'Este archivo se comparte con: %s';
$lang['allow_primary_contact_to_view_edit_billing_and_shipping'] = 'Permitir que el contacto principal vea / edite los detalles de facturaci�n y env�o';
$lang['estimate_due_after']                                      = 'Presupuesto Vencido Despu�s (d�as)';

# Version 1.6.0
$lang['my_timesheets']                                   = 'Mis hojas de horas';
$lang['today']                                           = 'Hoy';
$lang['open_in_dropbox']                                 = 'Abrir en Dropbox';
$lang['show_primary_contact']                            = 'Mostrar el nombre completo del contacto principal en %s';
$lang['view_members_timesheets']                         = 'Ver todas las hojas de horas';
$lang['priority']                                        = 'Prioridad';
$lang['fetch_from_google']                               = 'Obtener de google';
$lang['customer_fetch_lat_lng_usage']                    = 'Llene la direcci�n, ciudad y pa�s antes de buscarlos para obtener el mejor resultado.';
$lang['g_search_address_not_found']                      = 'No se pudo encontrar la direcci�n, por favor intente nuevamente';
$lang['proposals_report']                                = 'Informe de propuestas';
$lang['staff_members_open_tickets_to_all_contacts_help'] = 'Si el miembro del personal no tiene permiso para los clientes, VER solo podr� crear nuevos tickets desde el �rea de administraci�n a los contactos de los clientes que se asignen como administrador del cliente.';
$lang['staff_members_open_tickets_to_all_contacts']      = '�Permitir a los miembros del personal abrir solicitudes para todos los contactos?';
$lang['charts_based_report']                             = 'Informe basado en gr�ficos';
$lang['delete_backups_older_then']                       = 'Eliminar autom�ticamente las copias de seguridad m�s antiguas que X d�as (configure 0 para deshabilitar)';
$lang['responsible_admin']                               = 'Administrador responsable';
$lang['tags']                                            = 'Etiquetas';
$lang['tag']                                             = 'Etiqueta';
$lang['customer_map_notice']                             = 'Agregue longitud y latitud en el perfil del cliente para mostrar el mapa aqu�';
$lang['default_view']                                    = 'Vista predeterminada';
$lang['day']                                             = 'D�a';
$lang['agenda']                                          = 'Agenda';
$lang['timesheet_tags']                                  = 'Etiquetas de parte de horas';
$lang['show_more']                                       = 'Mostrar m�s';
$lang['show_less']                                       = 'Mostrar menos';
$lang['project_completed_date']                          = 'Fecha completada';
$lang['language']                                        = 'Idioma';
$lang['this_week']                                       = 'Esta semana';
$lang['last_week']                                       = 'La semana pasada';
$lang['this_month']                                      = 'Este mes';
$lang['last_month']                                      = 'El mes pasado';
$lang['no_description_project']                          = 'No hay descripci�n para este proyecto.';
$lang['sales_string']                                    = 'Ventas';
$lang['no_project_members']                              = 'No hay miembros para este proyecto';
$lang['search_by_tags']                                  = 'Use # + tagname para buscar por etiquetas';
$lang['project_status_5']                                = 'Cancelado';

# Version 1.7.0
$lang['not_activity_new_reminder_created']        = 'establecer un nuevo recordatorio para %s con fecha %s';
$lang['not_activity_new_task_created']            = 'Nueva tarea creada - %s';
$lang['recurring_invoice_draft_notice']           = 'Esta factura es con borrador de estado, debe marcar esta factura como enviada. Las facturas recurrentes con borrador de estado no ser�n recreadas por el trabajo sistema.';
$lang['recurring_recreate_hour_notice']           = '%s se recrear� en una hora espec�fica del d�a seg�n la configuraci�n ubicada en Configuraci�n-> Configuraci�n-Tarea sistemas';
$lang['invoice_project_include_timesheets_notes'] = 'Incluir cada nota de la hoja de tiempo en la descripci�n del art�culo';
$lang['events']                                   = 'Eventos';
$lang['clear']                                    = 'Limpiar';
$lang['auto_mark_as_public']                      = 'Marcado autom�tico como p�blico';
$lang['time_format']                              = 'Formato de tiempo';
$lang['time_format_24']                           = '24 horas';
$lang['time_format_12']                           = '12 horas';
$lang['delete_activity_log_older_then']           = 'Eliminar el registro de actividad del sistema anterior a X meses';
$lang['mark_as_read']                             = 'Marcar como le�do';
$lang['mark_all_as_read']                         = 'Marcar todo como leido';
$lang['tax_1']                                    = 'Impuesto 1';
$lang['tax_2']                                    = 'Impuesto 2';
$lang['total_with_tax']                           = 'Total con impuestos';
$lang['new_task_auto_assign_current_member']      = 'Asignar autom�ticamente creador de tareas cuando se crea una nueva tarea';
$lang['new_task_auto_assign_current_member_help'] = 'No se aplica si la tarea est� vinculada al proyecto y el creador no es miembro del proyecto';
$lang['copy_project_tasks_status']                = 'Estado de las tareas';
$lang['tasks_summary']                            = 'Resumen de tareas';
$lang['vault']                                    = 'B�veda';
$lang['new_vault_entry']                          = 'Entrada nueva b�veda';
$lang['server_address']                           = 'Direcci�n del servidor';
$lang['port']                                     = 'Puerto';
$lang['vault_username']                           = 'Nombre de usuario';
$lang['vault_password']                           = 'Contrase�a';
$lang['vault_description']                        = 'Breve descripci�n';
$lang['vault_entry']                              = 'Entrada de b�veda';
$lang['no_port_provided']                         = 'No provisto';
$lang['view_password']                            = 'Ver contrase�a';
$lang['security_reasons_re_enter_password']       = 'Por razones de seguridad ingrese su contrase�a a continuaci�n';
$lang['password_change_fill_notice']              = 'Solo rellene el campo de contrase�a si desea cambiar la contrase�a';
$lang['vault_password_user_not_correct']          = 'Su contrase�a no es correcta, por favor intente de nuevo';
$lang['no_vault_entries']                         = 'Entradas de b�veda no encontradas para este cliente.';
$lang['vault_entry_created_from']                 = 'Esta entrada de b�veda es creada por %s';
$lang['vault_entry_last_update']                  = '�ltima actualizaci�n por %s';
$lang['vault_entry_visible_to_all']               = 'Visible para todos los miembros del personal que tienen acceso a este cliente';
$lang['vault_entry_visible_creator']              = 'Visible solo para mi (administrador no excluido)';
$lang['vault_entry_visible_administrators']       = 'Visible solo para administradores';
$lang['my_reminders']                             = 'Mis recordatorios';
$lang['reminder_related']                         = 'Relacionado con';
$lang['event_notification']                       = 'Notificaci�n';
$lang['days']                                     = 'D�as';
$lang['reminder_notification_placeholder']        = 'Ej. 30 minutos antes';
$lang['event_color']                              = 'Color de evento';
$lang['group_by_task']                            = 'Agrupar por tarea';
$lang['save']                                     = 'Guardar';
$lang['disable_languages']                        = 'Deshabilitar idiomas';

# Version 1.8.0
$lang['not_customer_viewed_invoice']                         = 'Una factura con numero %s ha sido visto';
$lang['not_customer_viewed_estimate']                        = 'Un Presupuesto con numero %s ha sido visto';
$lang['not_customer_viewed_proposal']                        = 'Una propuesta con n�mero %s ha sido visto';
$lang['display_inline']                                      = 'Mostrar en l�nea';
$lang['email_header']                                        = 'Encabezado predefinido';
$lang['email_footer']                                        = 'Pie de p�gina predefinido';
$lang['exclude_proposal_from_client_area_with_draft_status'] = 'Excluir propuestas con estado de borrador del �rea de clientes.';
$lang['pusher_app_key']                                      = 'APP Key';
$lang['pusher_app_secret']                                   = 'APP Secreto';
$lang['pusher_app_id']                                       = 'APP ID';
$lang['pusher_cluster_notice']                               = 'Deje en blanco para usar el grupo de pulsadores predeterminado.';
$lang['pusher_enable_realtime_notifications']                = 'Habilitar notificaciones en tiempo real';
$lang['task_is_overdue']                                     = 'Esta tarea est� atrasada';
$lang['this_year']                                           = 'Este a�o';
$lang['last_year']                                           = 'El a�o pasado';
$lang['customer_statement']                                  = 'Declaraci�n';
$lang['customer_statement_for']                              = 'Declaraci�n de cliente para %s';
$lang['account_summary']                                     = 'Resumen de la cuenta';
$lang['statement_beginning_balance']                         = 'Saldo inicial';
$lang['invoiced_amount']                                     = 'Cantidad facturada';
$lang['amount_paid']                                         = 'Cantidad pagada';
$lang['statement_from_to']                                   = '%s A %s';
$lang['customer_statement_info']                             = 'Mostrando todas las facturas y pagos entre %s y %s';
$lang['balance_due']                                         = 'Saldo adeudado';
$lang['statement_heading_date']                              = 'Fecha';
$lang['statement_heading_details']                           = 'Detalles';
$lang['statement_heading_amount']                            = 'Cantidad';
$lang['statement_heading_payments']                          = 'Pagos';
$lang['statement_heading_balance']                           = 'Equilibrar';
$lang['statement_invoice_details']                           = 'Factura %s - debido a %s';
$lang['statement_payment_details']                           = 'Pago (%s) de la factura %s';
$lang['statement_bill_to']                                   = 'A';
$lang['send_to_email']                                       = 'Enviar al correo electr�nico';
$lang['statement_sent_to_client_success']                    = 'La declaraci�n fue enviada al cliente.';
$lang['statement_sent_to_client_fail']                       = 'Problema al enviar la declaraci�n';
$lang['view_account_statement']                              = 'Ver el estado de cuenta';
$lang['text_not_recommended_for_servers_limited_resources']  = 'No se recomienda si el servidor tiene recursos limitados. Ej. alojamiento compartido';
$lang['tasks_bull_actions_assign_notice']                    = 'Si la tarea est� vinculada al proyecto y el miembro del personal al que est� asignando la tarea no es miembro del proyecto, este personal se agregar� autom�ticamente como miembro.';
$lang['company_information']                                 = 'Informaci�n de la empresa';
$lang['ticket_form']                                         = 'Formulario de solicitud';
$lang['ticket_form_subject']                                 = 'Tema';
$lang['ticket_form_name']                                    = 'Tu nombre';
$lang['ticket_form_email']                                   = 'Direcci�n de correo electr�nico';
$lang['ticket_form_department']                              = 'Sector';
$lang['ticket_form_message']                                 = 'Mensaje';
$lang['ticket_form_priority']                                = 'Prioridad';
$lang['ticket_form_service']                                 = 'Servicio';
$lang['ticket_form_submit']                                  = 'Enviar';
$lang['ticket_form_attachments']                             = 'Archivos adjuntos';
$lang['success_submit_msg']                                  = 'Gracias por contactarnos. Nos pondremos en contacto con usted en breve.';
$lang['vault_entry_share_on_projects']                       = 'Comparte esta entrada de b�veda en proyectos con miembros del proyecto.';
$lang['project_shared_vault_entry_login_details']            = 'Ver los detalles de acceso del sitio del cliente';
$lang['iso_code']                                            = 'ISO C�digo';
$lang['estimates_not_invoiced']                              = 'No facturado';
$lang['show_on_ticket_form']                                 = 'Mostrar en forma de solicitud';
$lang['cancel_upload']                                       = 'Cancelar subida';
$lang['show_table_export_button']                            = 'Mostrar el bot�n exportar tabla';
$lang['show_table_export_all']                               = 'A todos los miembros del personal.';
$lang['show_table_export_admins']                            = 'Solo a administradores';
$lang['show_table_export_hide']                              = 'Ocultar el bot�n de exportaci�n para todos los miembros del personal';
$lang['task_created_by']                                     = 'Creado por %s';
$lang['validation_extension_not_allowed']                    = 'Extensi�n de archivo no permitida';
$lang['allow_staff_view_proposals_assigned']                 = 'Permitir que los miembros del personal vean las propuestas donde est�n asignados';
$lang['task_users_working_on_tasks_multiple']                = 'Actualmente %s est�n trabajando en esta tarea';
$lang['task_users_working_on_tasks_single']                  = 'Actualmentey %s esta trabajando en esta tarea';

# Version 1.9.0
$lang['estimated_hours']                               = 'Horas estimadas';
$lang['two_factor_auth_failed_to_send_code']           = 'Error al enviar el c�digo de autenticaci�n de dos pasos al correo electr�nico, es posible que la configuraci�n SMTP no est� configurada correctamente';
$lang['two_factor_auth_code_sent_successfully']        = 'Se ha enviado un correo electr�nico a %s con el c�digo de verificaci�n para verificar su inicio de sesi�n';
$lang['enable_two_factor_authentication']              = 'Habilitar la autenticaci�n de dos factores';
$lang['two_factor_authentication_info']                = 'La autenticaci�n de dos factores se proporciona por correo electr�nico. Antes de habilitar la autenticaci�n de dos factores, aseg�rese de que la configuraci�n de SMTP est� correctamente configurada y que el sistema pueda enviar un correo electr�nico. La clave de autenticaci�n �nica se enviar� al correo electr�nico al iniciar sesi�n.';
$lang['timesheets_overview_all_members_notice_admins'] = 'El resumen de las hojas de tiempo para todos los miembros del personal solo est� disponible para los administradores.';
$lang['two_factor_authentication']                     = 'Autenticaci�n de dos factores';
$lang['two_factor_authentication_code']                = 'C�digo';
$lang['admin_two_factor_auth_heading']                 = 'C�digo de autenticaci�n';
$lang['two_factor_code_not_valid']                     = 'C�digo de autenticaci�n no v�lido';
$lang['back_to_login']                                 = 'Volver al inicio de sesi�n';
$lang['enter_activity']                                = 'Entrar en actividad';
$lang['attach_files']                                  = 'Adjuntar archivos';
$lang['no_tags_used']                                  = 'No hay etiquetas utilizadas por el sistema.';
$lang['exclude_completed_tasks']                       = 'Excluir tareas completadas';
$lang['modal_width_class']                             = 'Clase';
$lang['contract_copy']                                 = 'Copiar';
$lang['contract_copied_successfully']                  = 'Contrato copiado exitosamente';
$lang['contract_copied_fail']                          = 'No se pudo copiar el contrato';
$lang['project_marked_as_finished_to_contacts']        = 'Enviar <b>Proyecto marcado como terminado</b> correo electr�nico a los contactos de los clientes';
$lang['only_admins']                                   = 'Solo administradores';
$lang['new_notification']                              = 'Nueva notificaci�n!';
$lang['enable_desktop_notifications']                  = 'Habilitar notificaciones de escritorio';
$lang['save_and_send']                                 = 'Guardar y Enviar';
$lang['private']                                       = 'Privado';
$lang['task_created_at']                               = 'Creado en %s';
$lang['hide_notified_reminders_from_calendar']         = 'Ocultar avisos notificados del calendario';
$lang['last_active']                                   = '�ltimo Activo';
$lang['open_ticket']                                   = 'Solicitud abierta';
$lang['task_add_description']                          = 'Agregar descripci�n';
$lang['project_setting_create_tasks']                  = 'crear tareas';
$lang['project_setting_edit_tasks']                    = 'editar tareas (solo tareas creadas desde contacto)';

# Version 1.9.2
$lang['items_report']                            = 'Informe de art�culos';
$lang['reports_item']                            = 'Art�culos';
$lang['quantity_sold']                           = 'Cantidad vendida';
$lang['total_amount']                            = 'Cantidad total';
$lang['avg_price']                               = 'Precio promedio';
$lang['item_report_paid_invoices_notice']        = 'El informe de art�culos se genera solo a partir de facturas pagadas antes de descuentos e impuestos.';
$lang['overview']                                = 'Visi�n general';
$lang['timer_started_change_status_in_progress'] = 'Cambie el estado de la tarea a En progreso al iniciarse el temporizador (v�lido solo si el estado de la tarea no est� iniciado)';
$lang['company_info_format']                     = 'Formato de informaci�n de la empresa (PDF y HTML)';
$lang['customer_info_format']                    = 'Formato de informaci�n del cliente (PDF y HTML)';
$lang['custom_field_info_format_embed_info']     = 'Los campos personalizados para %s se pueden incrustar f�cilmente en documentos PDF y HTML agregando los campos de combinaci�n en el formato de p�gina en la siguiente p�gina: %s';
$lang['transfer_lead_notes_to_customer']         = 'Transfiera las notas de clientes potenciales al perfil del cliente';
$lang['authorized_signature_text']               = 'Firma autorizada';
$lang['show_pdf_signature_invoice']              = 'Mostrar firma PDF en factura';
$lang['show_pdf_signature_estimate']             = 'Mostrar firma PDF en el presupuesto';
$lang['signature']                               = 'Firma';
$lang['signature_image']                         = 'Imagen de firma';
$lang['insert_checklist_templates']              = 'Insertar plantillas de lista de verificaci�n';
$lang['save_as_template']                        = 'Guardar como plantilla';
$lang['scroll_responsive_tables_help']           = 'Las tablas con una gran cantidad de datos tendr�n filas de desplazamiento horizontal envueltas en el icono +.';
$lang['scroll_responsive_tables']                = 'Activar Tablas responsivas de desplazamiento';
$lang['invoice_item_add_edit_rate_currency']     = 'Tarifa - %s';
$lang['total_files_deleted']                     = 'Total de archivos borrados: %s';
$lang['invalid_transaction']                     = 'Transacci�n inv�lida. Int�ntalo de nuevo.';
$lang['payment_gateway_payu_money_key']          = 'PayU Llave del dinero';
$lang['payment_gateway_payu_money_salt']         = 'PayU Dinero';
$lang['settings_paymentmethod_description']      = 'Descripci�n del pago';

# Version 1.9.3
$lang['default_ticket_reply_status']          = 'Estado predeterminado seleccionado al responder solicitud';
$lang['ticket_add_response_and_back_to_list'] = 'Volver a la lista de solicitudes despu�s de enviar la respuesta';

# Version 1.9.4
$lang['default_task_status']                               = 'Estado predeterminado cuando se crea una nueva tarea';
$lang['custom_field_pdf_html_help']                        = 'Aseg�rate de revisar' . $lang['custom_field_show_on_client_portal'] . ' campo si desea que los campos personalizados sean visibles para el �rea de clientes y cuando el cliente descarga PDF o recibe PDF por correo electr�nico.';
$lang['auto']                                              = 'Auto';
$lang['email_queue']                                       = 'Cola de correo electr�nico';
$lang['email_queue_enabled']                               = 'Habilitar la cola de correo electr�nico';
$lang['email_queue_skip_attachments']                      = '�No agrega correos electr�nicos con archivos adjuntos en la cola?';
$lang['disable']                                           = 'Inhabilitar';
$lang['enable']                                            = 'Habilitar';
$lang['auto_dismiss_desktop_notifications_after']          = 'Notificaciones de despido autom�tico despu�s de X segundos (0 para deshabilitar)';
$lang['proposal_info_format']                              = 'Formato de informaci�n de la propuesta (PDF y HTML)';
$lang['hide_tasks_on_main_tasks_table']                    = 'Ocultar tareas de proyecto en la tabla de tareas principales (�rea de administraci�n)';
$lang['ticket_replies_order']                              = 'Orden de las respuestas de la solicitud';
$lang['ticket_replies_order_notice']                       = 'El mensaje inicial de la solicitud siempre se mostrar� como primero.';
$lang['invoice_cancelled_email_disabled']                  = 'Se cancela la factura. Desmarcar como cancelado para habilitar el correo electr�nico al cliente';
$lang['email_notifications']                               = 'Notificaci�nes de Correo Electr�nico';
$lang['invoice_activity_record_payment_email_to_customer'] = 'Pago registrado, correo electr�nico enviado a: %s';
$lang['exclude_inactive']                                  = 'Excluir inactivos -';
$lang['disable_all']                                       = 'Desactivar todo';
$lang['enable_all']                                        = 'Activar todo';
$lang['reccuring_invoice_option_gen_and_send']             = 'Generar y auto-enviar la factura renovada al cliente.';
$lang['reccuring_invoice_option_gen_unpaid']               = 'Generar una factura sin pagar';
$lang['reccuring_invoice_option_gen_draft']                = 'Generar un proyecto de factura';
$lang['event_created_by']                                  = 'Este evento es creado por %s';

# Version 1.9.5
$lang['customers_assigned_to_me']              = 'Clientes asignados a mi';
$lang['bcc_all_emails']                        = 'BCC Todos los correos electr�nicos a';
$lang['confirmation_of_identity']              = 'Confirmaci�n de identidad';
$lang['accept_identity_confirmation']          = 'Requerir confirmaci�n de identidad en aceptar';
$lang['accepted_identity_info']                = 'Este %s es aceptado por %s en %s desde la direcci�n IP %s';
$lang['clear_this_information']                = 'Borrar esta informaci�n';
$lang['new_task_auto_follower_current_member'] = 'Agregar autom�ticamente creador de tareas como seguidor de tareas cuando se crea una nueva tarea';
$lang['expenses_report_net']                   = 'Importe neto (subtotal)';
$lang['expense_field_billable_help']           = 'Si es facturable, %s se puede agregar a la descripci�n larga de la factura.';
$lang['task_biillable_checked_on_creation']    = '�Se verifica la opci�n facturable por defecto cuando se crea una nueva tarea?';
$lang['pause_overdue_reminders']               = 'Pausar recordatorios vencidos';
$lang['resume_overdue_reminders']              = 'Reanudar recordatorios de vencimiento';
# Credit Notes
$lang['credit_notes']                                            = 'Notas de credito';
$lang['credit_note']                                             = 'Nota de cr�dito';
$lang['credit_note_lowercase']                                   = 'nota de cr�dito';
$lang['credit_note_not_found']                                   = 'Nota de cr�dito no encontrada';
$lang['credit_note_date']                                        = 'Fecha de la nota de cr�dito';
$lang['credit_date']                                             = 'Fecha';
$lang['settings_sales_next_credit_note_number']                  = 'Pr�ximo n�mero de nota de cr�dito';
$lang['credit_note_number_prefix']                               = 'Prefijo del n�mero de la nota de cr�dito';
$lang['credit_note_number']                                      = 'Nota de cr�dito #';
$lang['credit_note_number_exists']                               = 'El n�mero de la nota de cr�dito ya existe';
$lang['show_shipping_on_credit_note']                            = 'Mostrar detalles de env�o en nota de cr�dito';
$lang['credit_note_number_decrement_on_delete']                  = 'Disminuir el n�mero de nota de cr�dito en eliminar.';
$lang['credit_note_number_decrement_on_delete_help']             = 'El n�mero se reducir� solo si se crea la �ltima nota de cr�dito.';
$lang['credit_note_status']                                      = 'Estado';
$lang['credit_note_status_open']                                 = 'Abierto';
$lang['credit_note_status_closed']                               = 'Cerrado';
$lang['credit_note_status_void']                                 = 'Vac�o';
$lang['credit_note_mark_as_open']                                = 'Marcar como abierto';
$lang['new_credit_note']                                         = 'Nueva nota de cr�dito';
$lang['credit_note_amount']                                      = 'Cantidad';
$lang['credit_note_remaining_credits']                           = 'Cantidad restante';
$lang['credit_note_client_note']                                 = 'Nota';
$lang['invoices_credited']                                       = 'Facturas Acreditadas';
$lang['apply_credits']                                           = 'Aplicar creditos';
$lang['x_credits_available']                                     = '%s disponibles.';
$lang['credit_amount']                                           = 'Monto de cr�dito';
$lang['credits_available']                                       = 'Creditos disponibles';
$lang['amount_to_credit']                                        = 'Monto de cr�dito';
$lang['invoice_credits_applied']                                 = 'Cr�ditos aplicados a la factura.';
$lang['applied_credits']                                         = 'Cr�ditos Aplicados';
$lang['credit_amount_bigger_then_invoice_balance']               = 'El monto total de los cr�ditos es mayor que el saldo de la factura pendiente.';
$lang['credit_amount_bigger_then_credit_note_remaining_credits'] = 'La cantidad total de cr�ditos es mayor que los cr�ditos restantes';
$lang['credited_invoices_not_found']                             = 'Facturas acreditadas no encontradas';
$lang['credit_invoice_number']                                   = 'N�mero de factura';
$lang['credits_used']                                            = 'Creditos utilizados';
$lang['credits_remaining']                                       = 'Cr�ditos restantes';
$lang['amount_credited']                                         = 'Cantidad acreditada';
$lang['credits_applied_cant_delete_status_closed']               = 'Esta nota de cr�dito tiene el estado Cerrado; primero debe eliminar los cr�ditos para eliminar la nota de cr�dito.';
$lang['credits_applied_cant_delete_credit_note']                 = 'Esta nota de cr�dito tiene cr�ditos aplicados, primero debe eliminar los cr�ditos para eliminar la nota de cr�dito.';
$lang['credit_note_pdf_heading']                                 = 'NOTA DE CR�DITO';
$lang['show_status_on_pdf']                                      = 'Mostrar el estado de %s en documentos PDF';
$lang['show_pdf_signature_credit_note']                          = 'Mostrar firma PDF en nota de cr�dito';
$lang['calendar_credit_note_reminder']                           = 'Recordatorio de la nota de cr�dito';
$lang['show_credit_note_reminders_on_calendar']                  = 'Recordatorios de nota de cr�dito';
$lang['reminders']                                               = 'Recordatorios';
$lang['invoice_activity_applied_credits']                        = 'Cr�ditos aplicados de %s desde %s';
$lang['create_credit_note']                                      = 'Crear nota de cr�dito';
$lang['confirm_invoice_credits_from_credit_note']                = 'Al crear una nota de cr�dito a partir de una factura no pagada, el importe de la nota de cr�dito se aplicar� a esta factura. �Est� seguro de que desea crear la nota de cr�dito?';
$lang['credit_invoice_date']                                     = 'Fecha de la factura';
$lang['apply_to_invoice']                                        = 'Aplicar a factura';
$lang['apply_credits_from']                                      = 'Aplicar cr�ditos de %s';
$lang['credits_successfully_applied_to_invoices']                = 'Facturas cr�ditos aplicados.';
$lang['credit_note_send_to_client_modal_heading']                = 'Enviar nota de cr�dito al cliente';
$lang['credit_note_sent_to_client_success']                      = 'La nota de cr�dito se envio al cliente.';
$lang['credit_note_sent_to_client_fail']                         = 'Problema al enviar la nota de cr�dito al correo electr�nico';
$lang['credit_note_no_invoices_available']                       = 'No hay facturas disponibles para este cliente.';
$lang['show_total_paid_on_invoice']                              = 'Mostrar el total pagado en la factura';
$lang['show_credits_applied_on_invoice']                         = 'Mostrar los cr�ditos aplicados en la factura';
$lang['show_amount_due_on_invoice']                              = 'Mostrar la cantidad debida en la factura';
$lang['customer_profile_update_credit_notes']                    = 'Actualice la informaci�n de env�o / facturaci�n en todas las notas de cr�dito anteriores (las notas de cr�dito cerradas no se ven afectadas)';
$lang['zip_credit_notes']                                        = 'Notas de cr�dito Zip';
$lang['statement_credit_note_details']                           = 'Nota de cr�dito %s';
$lang['statement_credits_applied_details']                       = 'Cr�ditos aplicados de la nota de cr�dito %s - %s para pago of %s';
$lang['credit_note_files']                                       = 'Archivos de notas de cr�dito';
$lang['credit_notes_report']                                     = 'Informe de notas de cr�dito';

$lang['credit_note_set_reminder_title']     = 'Establecer recordatorio de nota de cr�dito';
$lang['credit_note_add_edit_client_note']   = $lang['invoice_add_edit_client_note'];
$lang['credit_note_bill_to']                = $lang['invoice_bill_to'];
$lang['credit_note_prefix']                 = $lang['settings_sales_invoice_prefix'];
$lang['credit_note_admin_note']             = $lang['invoice_add_edit_admin_note'];
$lang['credit_note_total']                  = $lang['invoice_total'];
$lang['credit_note_adjustment']             = $lang['invoice_adjustment'];
$lang['credit_note_discount']               = $lang['invoice_discount'];
$lang['credit_note_subtotal']               = $lang['invoice_subtotal'];
$lang['credit_note_table_quantity_heading'] = $lang['invoice_table_quantity_heading'];
$lang['credit_note_table_hours_heading']    = $lang['invoice_table_hours_heading'];
$lang['credit_note_table_item_heading']     = $lang['invoice_table_item_heading'];
$lang['credit_note_table_item_description'] = $lang['invoice_table_item_description'];
$lang['credit_note_table_rate_heading']     = $lang['invoice_table_rate_heading'];
$lang['credit_note_table_tax_heading']      = $lang['invoice_table_tax_heading'];
$lang['credit_note_table_amount_heading']   = $lang['invoice_table_amount_heading'];
$lang['credit_notes_list_all']              = $lang['invoices_list_all'];

# Version 1.9.7
$lang['ticket_assigned']                          = 'Asignado';
$lang['dashboard_options']                        = 'Opciones de Tablero';
$lang['reset_dashboard']                          = 'Reiniciar el tablero';
$lang['widgets']                                  = 'Widgets';
$lang['s_chart']                                  = '%s Gr�fico';
$lang['quick_stats']                              = 'Estad�sticas r�pidas';
$lang['user_widget']                              = 'Widget de usuario';
$lang['widgets_visibility_help_text']             = 'Los widgets que se muestran solo si tienen suficientes datos no tienen opciones para ocultarse o mostrarse.';
$lang['show_project_on_estimate']                 = 'Mostrar el nombre del proyecto en el Presupuesto';
$lang['show_project_on_invoice']                  = 'Mostrar el nombre del proyecto en la factura';
$lang['show_project_on_credit_note']              = 'Mostrar el nombre del proyecto en nota de cr�dito';
$lang['visible_tabs']                             = 'Pesta�as visibles';
$lang['all']                                      = 'Todos';
$lang['view_widgetable_area']                     = 'Ver el �rea de widgets';
$lang['hide_widgetable_area']                     = 'Ocultar �rea de widgets';
$lang['no_items_warning']                         = 'Introduzca al menos un elemento.';
$lang['item_forgotten_in_preview']                = '�Has olvidado a�adir este art�culo?';
$lang['not_task_status_changed']                  = '%s - el estado de la tarea cambi� a %s';
$lang['not_project_activity_task_status_changed'] = 'Estado de tarea cambiado';
$lang['reset']                                    = 'Reiniciar';
$lang['save_message_as_predefined_reply']         = 'Guardar mensaje como respuesta predefinida';
$lang['inline_create_option']                     = '�Permitir que los miembros del personal que no son administradores creen %s en el �rea de creaci�n / edici�n de %s?';
$lang['inline_create']                            = 'Crear en l�nea';
$lang['inline_create_option_predefined_replies']  = 'Permitir que los miembros del personal que no son administradores guarden respuestas predefinidas del mensaje del ticket';
$lang['reminders_view_none_admin']                = 'Mostrando tus recordatorios y recordatorios creados por ti.';
$lang['show_tabs_and_options']                    = 'Mostrar pesta�as y opciones';
$lang['no_milestones_found']                      = 'Este proyecto no tiene objetivos.';
$lang['lead_is_contact_create_task']              = 'Crear tarea si el remitente del correo electr�nico ya es cliente y asignarlo a un miembro del personal responsable.';
$lang['existing_customer']                        = 'Cliente existente';
$lang['use_company_name_instead']                 = 'Utilice el nombre de la empresa en su lugar';
$lang['customer_delete_transactions_warning']     = 'Este cliente tiene transacciones, %s, debe eliminar las transacciones o mudarse a otro cliente para realizar esta acci�n.';

# Version 1.9.8
$lang['sending_email_contact_permissions_warning'] = 'Error al seleccionar autom�ticamente los contactos del cliente. Aseg�rese de que el cliente tenga contactos activos y contactos asociados con notificaciones de correo electr�nico para %s habilitado.';
$lang['help_leads_create_permission']              = 'Todo el personal puede crear clientes potenciales, excepto los miembros marcados como no miembros del personal';
$lang['help_leads_edit_permission']                = 'Todos los que tienen acceso a clientes potenciales espec�ficos pueden editar la mayor parte de la informaci�n de clientes potenciales.';
$lang['triggers']                                  = 'Gatillos';
$lang['notice_only_one_active_sms_gateway']        = 'Solo se permite 1 pasarela SMS activa';
$lang['sms_trigger_disable_tip']                   = 'Deje el contenido en blanco para deshabilitar el activador espec�fico.';
$lang['tables']                                    = 'Tablas';
$lang['only_project_tasks']                        = 'Solo tareas relacionadas con el proyecto.';
$lang['download_all']                              = 'Descargar todo';
$lang['settings_sales_credit_note_number_format']  = 'Formato de n�mero de nota de cr�dito';
$lang['sms_reminder_sent_to']                      = 'SMS recordatorio enviado a %s';
$lang['ideal_customer_statement_descriptor']       = 'Descriptor de estado de cuenta (mostrado en el estado de cuenta bancario del cliente)';
$lang['payment_received_awaiting_confirmation']    = 'Su pago fue recibido y est� en espera de confirmaci�n.';
$lang['discount_fixed_amount']                     = 'Cantidad fija';
$lang['timesheet_duration_instead']                = 'Introduzca la duraci�n del tiempo en su lugar';
$lang['timesheet_date_instead']                    = 'Establecer hora de inicio y final en su lugar';
$lang['allow_non_admin_members_to_import_leads']   = 'Permitir que los miembros del personal que no son administradores importen clientes potenciales';
$lang['project_hide_tasks_settings_info']          = 'Las tareas se excluyen de la tabla de tareas principales para este proyecto, puede ver las tareas del proyecto solo en esta �rea.';

# Version 1.9.9
$lang['ticket_create_no_contact']            = 'Solicitud sin contacto';
$lang['ticket_create_to_contact']            = 'Solicitud para contactar';
$lang['showing_billable_tasks_from_project'] = 'Mostrando tareas facturables de proyecto';
$lang['no_billable_tasks_found']             = 'Tareas facturables no encontradas';
$lang['help_leads_permission_view']          = 'Si este permiso no est� marcado, un miembro del personal solo podr� ver los prospectos donde se asignan, los candidatos creados por el miembro del personal y los candidatos que est�n marcados como p�blicos.';

# Version 2.0.0

$lang['customers']                                              = $lang['clients'];
$lang['knowledge_base']                                         = $lang['kb_string'];
$lang['staff']                                                  = $lang['als_staff'];
$lang['checklist_templates']                                    = 'Plantillas de lista de tareas';
$lang['emails_tracking']                                        = 'Seguimiento de correos electr�nicos';
$lang['no_tracked_emails_sent']                                 = 'No se han enviado correos electr�nicos rastreados.';
$lang['tracked_emails_sent']                                    = 'Correos electr�nicos seguidos enviados';
$lang['tracked_email_date']                                     = 'Fecha';
$lang['tracked_email_subject']                                  = 'Tema';
$lang['tracked_email_to']                                       = 'A';
$lang['tracked_email_opened']                                   = 'Abierto';
$lang['tracked_email_not_opened']                               = 'Cerrado';
$lang['not_viewed_yet']                                         = 'Este %s no es visto todav�a por el cliente';
$lang['undo']                                                   = 'Deshacer';
$lang['sign_document_validation']                               = 'Por favor firme el documento.';
$lang['document_customer_signature_text']                       = 'Firma (Cliente)';
$lang['accept_identity_confirmation_and_signature_sign']        = 'Requerir firma digital y confirmaci�n de identidad al aceptar.';
$lang['legal_bound_text']                                       = 'Texto legal encuadernado';
$lang['e_signature_sign']                                       = 'Firmar';
$lang['is_signed']                                              = 'Firmado';
$lang['is_not_signed']                                          = 'No firmado';
$lang['download']                                               = 'Descargar';
$lang['view_pdf_in_new_window']                                 = 'Ver PDF en Nueva pesta�a';
$lang['show_pdf_signature_contract']                            = 'Mostrar firma PDF en el contrato';
$lang['document_signed_successfully']                           = 'Has firmado este documento';
$lang['document_signed_info']                                   = 'Este documento est� firmado por %s en %s desde la direcci�n IP %s';
$lang['keep_signature']                                         = 'Mantener la firma del cliente';
$lang['view_contract']                                          = 'Ver Contrato';
$lang['summary']                                                = 'Resumen';
$lang['discussion']                                             = 'Discusi�n';
$lang['general_information']                                    = 'Informaci�n general';
$lang['proposal_information']                                   = 'Informaci�n de la propuesta';
$lang['contract_comments']                                      = 'Comentarios';
$lang['not_contract_comment_from_client']                       = 'Nuevo comentario del cliente en el contrato %s ...';
$lang['contract_files']                                         = 'Archivos de contrato';
$lang['date_signed']                                            = 'Fecha de firma';
$lang['clear_signature']                                        = 'Quitar firma';
$lang['recurring_has_ended']                                    = 'Esta recurrente %s ha terminado.';
$lang['cycles_remaining']                                       = 'Ciclos restantes';
$lang['cycles_infinity']                                        = 'Infinito';
$lang['recurring_total_cycles']                                 = 'Ciclos totales';
$lang['cycles_passed']                                          = 'Pasado %s';
$lang['api_key_not_set_error_message']                          = 'Clave API no configurada';
$lang['subscription']                                           = 'Suscripci�n';
$lang['subscription_lowercase']                                 = 'suscripci�n';
$lang['subscriptions']                                          = 'Suscripciones';
$lang['tax_is_used_in_subscriptions_warning']                   = 'No puede actualizar este impuesto porque lo utilizan las suscripciones.';
$lang['credit_card']                                            = 'Tarjeta de cr�dito';
$lang['update_credit_card']                                     = 'Actualizar tarjeta de cr�dito';
$lang['credit_card_update_info']                                = '�Quieres actualizar la tarjeta de cr�dito que tenemos archivada? Proporcione los nuevos detalles aqu�. La informaci�n de su tarjeta nunca tocar� directamente nuestro servidor.';
$lang['update_card_details']                                    = 'Detalles de la tarjeta de actualizaci�n';
$lang['update_card_btn']                                        = 'Tarjeta de actualizaci�n';
$lang['subscription_name']                                      = 'Nombre de suscripci�n';
$lang['subscriptions_description']                              = 'Descripci�n';
$lang['subscribe']                                              = 'Suscribir';
$lang['subscription_date']                                      = 'Fecha';
$lang['first_billing_date']                                     = 'Primera fecha de facturaci�n';
$lang['allow_primary_contact_to_update_credit_card']            = '�Permitir que el contacto principal actualice el token de la tarjeta de cr�dito almacenado?';
$lang['show_subscriptions_in_customers_area']                   = '�Mostrar suscripciones en el �rea de clientes?';
$lang['show_subscriptions_in_customers_area_help']              = 'Esta opci�n es v�lida solo para el contacto principal del cliente.';
$lang['subscription_sent_to_email_success']                     = 'Suscripci�n enviada al email correctamente';
$lang['subscription_sent_to_email_fail']                        = 'Error al enviar la suscripci�n al correo electr�nico';
$lang['new_subscription']                                       = 'Nueva suscripcion';
$lang['subscription_status']                                    = 'Estado';
$lang['next_billing_cycle']                                     = 'Pr�ximo ciclo de facturaci�n';
$lang['subscription_not_subscribed']                            = 'No suscrito';
$lang['send_subscription']                                      = 'Enviar suscripci�n';
$lang['subscription_will_send_to_primary_contact']              = 'La suscripci�n ser� enviada al contacto principal.';
$lang['subscription_resumed']                                   = 'La suscripci�n est� configurada para activarse con �xito';
$lang['subscription_canceled']                                  = 'Suscripci�n cancelada con �xito';
$lang['no_credit_card_found']                                   = 'No se encontr� tarjeta de cr�dito';
$lang['cancel_immediately']                                     = 'Cancelar inmediatamente';
$lang['cancel_at_end_of_billing_period']                        = 'Cancelar al final del per�odo de facturaci�n';
$lang['view_subscription']                                      = 'Ver suscripci�n';
$lang['subscription_future']                                    = 'Futuro';
$lang['subscription_active']                                    = 'Activo';
$lang['subscription_past_due']                                  = 'Atrasado';
$lang['subscription_canceled']                                  = 'Cancelado';
$lang['subscription_unpaid']                                    = 'No pagado';
$lang['billing_plan']                                           = 'Plan de facturaci�n';
$lang['upcoming_invoice']                                       = 'Pr�xima factura';
$lang['resume_now']                                             = 'Reanudar ahora';
$lang['subscription_not_yet_subscribed']                        = 'El cliente a�n no est� suscrito a esta suscripci�n.';
$lang['subscription_is_canceled_no_resume']                     = 'Esta suscripci�n se cancela y no se puede reanudar.';
$lang['subscription_will_be_canceled_at_end_of_billing_period'] = 'Esta suscripci�n ser� cancelada al final del per�odo de facturaci�n.';
$lang['customer_successfully_subscribed_to_subscription']       = 'Gracias por suscribirte a %s';
$lang['date_subscribed']                                        = 'Fecha de suscripcion';
$lang['reports']                                                = 'Informes';
$lang['subscriptions_summary']                                  = 'Resumen de suscripciones';
$lang['calendar_only_assigned_tasks']                           = 'Mostrar solo las tareas asignadas al miembro registrado del personal';
$lang['invoice_activity_subscription_payment_succeeded']        = 'Pago de la suscripci�n, correo electr�nico enviado a: %s';
$lang['mail_engine']                                            = 'Motor de correo';
$lang['settings_require_client_logged_in_to_view_contract']     = 'Requerir que el cliente est� conectado para ver el contrato';
$lang['privacy_policy']                                         = 'Pol�tica de privacidad';
$lang['gdpr_terms_agree']                                       = 'Estoy de acuerdo con la <a href="%s" target="_blank">T�rminos y condiciones</a>';
$lang['terms_and_conditions_validation']                        = 'Debes aceptar los T�rminos y Condiciones para continuar.';
$lang['gdpr']                                                   = 'Reglamento General de Protecci�n de Datos (GDPR)';
$lang['data_removal_request_sent']                              = 'Solicitud de eliminaci�n de datos enviada con �xito';
$lang['gdpr_consents']                                          = 'Consentimientos';
$lang['gdpr_consent']                                           = 'Consentimiento';
$lang['gdpr_consent_purpose']                                   = 'Prop�sito';
$lang['gdpr_consent_opt_in']                                    = 'Optar en';
$lang['gdpr_consent_opt_out']                                   = 'Optar por no';
$lang['gdpr_consent_agree']                                     = 'Estoy de acuerdo';
$lang['gdpr_consent_disagree']                                  = 'Estoy en desacuerdo';
$lang['view_consent']                                           = 'Ver consentimiento';
$lang['transfer_consent']                                       = 'Consentimiento de transferencia';
$lang['view_public_form']                                       = 'Ver formulario p�blico';
$lang['update_consent']                                         = 'Consentimiento de actualizaci�n';
$lang['update_consent']                                         = 'Consentimiento de actualizaci�n';
$lang['consent_last_updated']                                   = '�ltima actualizaci�n: %s';
$lang['showing_search_result']                                  = 'Mostrando resultados de b�squeda de: %s';
$lang['per_page']                                               = 'Por p�gina';
$lang['allow_staff_view_invoices_assigned']                     = 'Permitir que los miembros del personal vean las facturas donde est�n asignadas';
$lang['allow_staff_view_estimates_assigned']                    = 'Permitir que los miembros del personal vean los presupuestos donde est�n asignados';
$lang['gdpr_right_to_be_informed']                              = 'Derecho a ser informado';
$lang['gdpr_right_of_access']                                   = 'Derecho de acceso';
$lang['gdpr_right_to_data_portability']                         = 'Derecho a la portabilidad de datos';
$lang['gdpr_right_to_erasure']                                  = 'Derecho a borrar';
$lang['edit_my_information']                                    = 'Editar mi informaci�n';
$lang['export_my_data']                                         = 'Exportar mis datos';
$lang['request_data_removal']                                   = 'Solicitud de eliminaci�n de datos';
$lang['explanation_for_data_removal']                           = 'Explicaci�n para la eliminaci�n de datos';
$lang['briefly_describe_why_remove_data']                       = 'Describa brevemente por qu� quiere eliminar los datos';
$lang['date_published']                                         = 'Fecha de publicaci�n';
$lang['view']                                                   = 'Ver';
$lang['customer_is_subscribed_to_subscription_info']            = 'El cliente est� suscrito a esta suscripci�n.';
$lang['save_last_order_for_tables']                             = 'Guardar el �ltimo pedido de tablas';
$lang['date_created']                                           = 'fecha de creacion';

# Version 2.0.1
$lang['company_logo_dark']                                      = 'Logotipo de la empresa oscuro';
$lang['customers_register_require_confirmation']                = 'Requiere confirmaci�n de registro del administrador despu�s del registro de cliente';
$lang['customer_requires_registration_confirmation']            = 'Requiere confirmaci�n de registro';
$lang['confirm_registration']                                   = 'Confirmar registro';
$lang['customer_registration_successfully_confirmed']           = 'Registro de cliente confirmado exitosamente';
$lang['customer_register_account_confirmation_approval_notice'] = 'Gracias por registrarse, su cuenta est� pendiente de aprobaci�n y ser� confirmada pronto.';
$lang['after_subscription_payment_succeeded']                   = 'Despu�s del pago de la suscripci�n se realiza correctamente';
$lang['subscription_option_send_invoice']                       = 'Enviar la factura';
$lang['subscription_option_send_payment_receipt']               = 'Enviar recibo de pago';
$lang['subscription_option_send_payment_receipt_and_invoice']   = 'Enviar factura y recibo de pago';
$lang['subscription_option_do_nothing']                         = 'No hacer nada';
$lang['gdpr_not_enabled']                                       = 'GDPR no disponible';
$lang['enable_gdpr']                                            = 'Habilitar GDPR';
$lang['gdpr_right_to_rectification']                            = 'Derecho de rectificaci�n';
$lang['test_sms_config']                                        = 'Prueba SMS Config';
$lang['test_sms_message']                                       = 'Prueba Mensaje';
$lang['send_test_sms']                                          = 'Enviar prueba SMS';
$lang['gdpr_short']                                             = 'GDPR';
$lang['allow_non_admin_staff_to_delete_ticket_attachments']     = 'Permitir que los miembros del personal que no son administradores eliminen el adjunto de la solicitud';

# Version 2.1.0
$lang['contract_number']                                = 'N�mero de contrato';
$lang['project_changing_status_recurring_tasks_notice'] = 'Est�s cambiando el estado a {0}, Todas las tareas recurrentes ser�n canceladas.';
$lang['not_contract_signed']                            = 'El contrato con el sujeto %s ha sido firmado por el cliente.';
$lang['the_number_sign']                                = '#';
$lang['not_new_ticket_reply']                           = 'El cliente respondi� a la solicitud - %s';
$lang['receive_notification_on_new_ticket_replies']     = 'Recibir notificaci�n cuando el cliente responda a una solicitud.';
$lang['receive_notification_on_new_ticket_reply_help']  = 'Todos los miembros del personal que pertenecen al sector de solicitudes recibir�n una notificaci�n cuando el cliente responda a una solicitud.';
$lang['payment_gateway_enable_paypal']                  = 'Habilitar pagos de PayPal';
$lang['project_member']                                 = 'Miembro del Proyecto';
$lang['contract_notes']                                 = 'Notas';
$lang['contract_add_note']                              = 'Agregar nota';
