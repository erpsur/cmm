<h4 class="no-mtop">
   Configuraci�n general
</h4>
<hr class="hr-panel-heading" />
<?php render_yes_no_option('enable_gdpr','Habilitar GDPR'); ?>
<hr />
<?php render_yes_no_option('show_gdpr_in_customers_menu','Mostrar enlace GDPR en la navegaci�n del �rea de clientes'); ?>
<hr />
<?php render_yes_no_option('show_gdpr_link_in_footer','Mostrar enlace GDPR en el pie del �rea de clientes'); ?>
<hr />
<p class="">
   Bloque de informaci�n superior de p�gina GDPR
</p>
<?php echo render_textarea('settings[gdpr_page_top_information_block]','',get_option('gdpr_page_top_information_block'),array(),array(),'','tinymce'); ?>
