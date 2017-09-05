<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <div class="box-title">
				<?php echo anchor($btn_data, '<i class="fa fa-angle-double-left" aria-hidden="true"></i> '.$nm_btn_data, array('class'=>'btn btn-sm btn-info btn-flat pull-left'));?></div>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
		
		<form class='form-horizontal' action='<?=base_url($form_action)?>' method='POST' id='post-form' role='form' name='submit'>
		<div class='title_field animated fadeInUp'><?php echo$title_form; ?></div>
		<div class='value_field animated fadeInUp'>			
			<input type='hidden' name='customer_id' <?php if(isset($form_value["customer_id"])){ echo"value='$form_value[customer_id]'"; } ?>>

			<div class='form-group form-group-sm'>
				<label class='col-sm-2 control-label' for='nama'>Username</label>
				<div class='col-sm-10'>
					<input class='form-control' type='text' name='username' <?php if(isset($form_value["username"])){ echo"value='$form_value[username]' disabled"; } ?> required placeholder='Masukan username customer'>
				</div>
			</div>
			<div class='form-group form-group-sm'>
				<label class='col-sm-2 control-label' for='nama'>Password</label>
				<div class='col-sm-10'>
					<input class='form-control' type='password' name='password' <?php if(isset($form_value["password"])){?> placeholder='Masukan password jika ingin diubah' <?php }else{ ?> placeholder='Masukan password' <?php } ?>>
				</div>
			</div>
			<div class='form-group form-group-sm'>
				<label class='col-sm-2 control-label' for='nama'>Email</label>
				<div class='col-sm-10'>
					<input class='form-control' type='email' name='customer_email' <?php if(isset($form_value["customer_email"])){ echo"value='$form_value[customer_email]'"; } ?> required placeholder='Masukan email customer'>
				</div>
			</div>
			<div class='form-group'>
				<label class='col-sm-2 control-label' for='username'>Group</label>
				<div class='col-sm-10'>
					<select class='form-control' name='customer_group'>
						<option value='HCI'>HCI</option>
					</select>
				</div>
			</div>
			<div style='clear:both'></div>
		</div>

		</div><!-- /.box-body -->
		<div class="box-footer">
            <input type='submit' onclick="return submitForm('post-form')" class='btn btn-sm btn-primary' value='<?php echo$nm_button_form; ?>' name='submit'> <?php echo anchor($btn_data, $nm_button_form2,array('class' => 'btn btn-sm btn-primary')); ?>
			</form>
        </div><!-- /.box-footer-->
    </div><!-- /.box -->
</section><!-- /.content -->     
   

