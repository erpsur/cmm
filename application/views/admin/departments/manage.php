<?php init_head(); ?>
<div id="wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <?php if($email_exist_as_staff){ ?>
                <div class="alert alert-danger">
                  Algunos de los correos electrónicos del departamento se utilizan como correo electrónico del miembro del personal, de acuerdo con los documentos, el correo electrónico del departamento de soporte debe ser un correo electrónico único en el sistema, debe cambiar el correo electrónico del personal o del departamento de soporte para que todas las funciones funcionen correctamente.
                </div>
                <?php } ?>
                <div class="panel_s">
                    <div class="panel-body">
                     <div class="_buttons">
                        <a href="#" onclick="new_department(); return false;" class="btn btn-info pull-left display-block">
                            <?php echo _l('new_department'); ?>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <hr class="hr-panel-heading" />
                    <div class="clearfix"></div>
                    <?php render_datatable(array(
                        _l('department_list_name'),
                        _l('department_email'),
                        _l('options')
                        ),'departments'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="department" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <?php echo form_open(admin_url('departments/department')); ?>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">
                    <span class="edit-title"><?php echo _l('edit_department'); ?></span>
                    <span class="add-title"><?php echo _l('new_department'); ?></span>
                </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div id="additional"></div>
                        <!-- fake fields are a workaround for chrome autofill getting the wrong fields -->
                        <input  type="text" class="fake-autofill-field" name="fakeusernameremembered" value='' tabindex="-1"/>
                        <input  type="password" class="fake-autofill-field" name="fakepasswordremembered" value='' tabindex="-1"/>
                        <?php echo render_input('name','department_name'); ?>
                       
                        <div class="checkbox checkbox-primary">
                            <input type="checkbox" name="hidefromclient" id="hidefromclient">
                            <label for="hidefromclient"><?php echo _l('department_hide_from_client'); ?></label>
                        </div>
                        <hr />
                        <?php echo render_input('email','department_email','','email'); ?>
                       
                        <div class="form-group">
                       
                        </div>
                        <div class="form-group">
                        

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo _l('close'); ?></button>
                    <button type="submit" class="btn btn-info"><?php echo _l('submit'); ?></button>
                </div>
            </div><!-- /.modal-content -->
            <?php echo form_close(); ?>
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <?php init_tail(); ?>
    <script>
        $(function(){
           initDataTable('.table-departments', window.location.href, [3], [3]);
           _validate_form($('form'),{name:'required',email:{
            email: true,
            remote: {
                url: admin_url + "departments/email_exists",
                type: 'post',
                data: {
                    email: function() {
                        return $('input[name="email"]').val();
                    },
                    departmentid:function(){
                        return $('input[name="id"]').val();
                    }
                }
            }}},manage_departments);
           $('#department').on('hidden.bs.modal', function(event) {
            $('#additional').html('');
            $('#department input[type="text"]').val('');
            $('#department input[type="email"]').val('');
            $('input[name="delete_after_import"]').prop('checked',false);
            $('.add-title').removeClass('hide');
            $('.edit-title').removeClass('hide');
        });
       });
        function manage_departments(form) {
            var data = $(form).serialize();
            var url = form.action;
            $.post(url, data).done(function(response) {
                response = JSON.parse(response);
                if(response.success == true){
                    alert_float('success',response.message);
                }
                if(response.email_exist_as_staff == true) {
                    window.location.reload();
                }
                $('.table-departments').DataTable().ajax.reload();
                $('#department').modal('hide');
            }).fail(function(data){
                var error = JSON.parse(data.responseText);
                alert_float('danger',error.message);
            });
            return false;
        }
        function new_department(){
            $('#department').modal('show');
            $('.edit-title').addClass('hide');
        }
        function edit_department(invoker,id){
            var hide_from_client = $(invoker).data('hide-from-client');
            var delete_after_import = $(invoker).data('delete-after-import');
            if(hide_from_client == 1){
                $('input[name="hidefromclient"]').prop('checked',true);
            } else {
                $('input[name="hidefromclient"]').prop('checked',false);
            }
            if(delete_after_import == 1){
                $('input[name="delete_after_import"]').prop('checked',true);
            } else {
                $('input[name="delete_after_import"]').prop('checked',false);
            }
            var enc = $(invoker).data('encryption');
            var input_enc_selector;
            if(enc == ''){
                input_enc_selector = '#no_enc';
            } else {
                input_enc_selector = '#'+enc;
            }
            $(input_enc_selector).prop('checked',true);
            $('#additional').append(hidden_input('id',id));
            $('#department input[name="name"]').val($(invoker).data('name'));
            $('#department input[name="email"]').val($(invoker).data('email'));
            $('#department input[name="calendar_id"]').val($(invoker).data('calendar-id'));
            $('#department input[name="password"]').val($(invoker).data('password'));
            $('#department input[name="imap_username"]').val($(invoker).data('imap_username'));
            $('#department input[name="host"]').val($(invoker).data('host'));
            $('#department').modal('show');
            $('.add-title').addClass('hide');
        }
        function test_dep_imap_connection(){
            var data = {};
            data.email = $('input[name="email"]').val();
            data.password = $('input[name="password"]').val();
            data.host = $('input[name="host"]').val();
            data.username = $('input[name="imap_username"]').val();
            data.encryption = $('input[name="encryption"]:checked').val();
            $.post(admin_url+'departments/test_imap_connection',data).done(function(response){
                response = JSON.parse(response);
                alert_float(response.alert_type,response.message);
            });
        }
    </script>
</body>
</html>
