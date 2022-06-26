<?php include('public_header.php'); ?>
<div class="container ">
<div class="row  d-flex h-100">
        <div class="card border-primary mb-3 offset-md-4  align-item-center" style="max-width: 20rem;">
            <div class="card-header">Admin Login</div>
            <?php if($error = $this->session->flashdata('login_failed')): ?> 
                    <div class="alert alert-dismissible alert-danger">
                        <?= $error; ?>
                    </div>
            <?php endif; ?>
            <div class="card-body">
               <?php echo form_open('login/admin_login',['class' => 'form-horizontal']) ?>
               
                     <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <?php echo form_input(
                                       [ 'name'=>'username',
                                        'class'=>'form-control',
                                        'placeholder'=>'Username',
                                        'id'=>'exampleInputEmail',
                                        'aria-decsribedby'=>'emailHelp',
                                        'value'=>set_value('username')]);?>
                       <span><?php echo form_error('username'); ?></span>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <?php echo form_password([
                            'name'=>'password',
                            'class'=>'form-control',
                            'id'=>'exampleInputPassword1',
                            'placeholder'=>'Password']);?>
                        <span><?php echo form_error('password'); ?></span>
              
                    <?php echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']),
                          form_submit(['name'=>'submit','value'=>'Login','class'=>'btn btn-primary']);
                    ?>
                <?php form_close(); ?> 
       
            </div>
        
    </div>
</div>


</div>




<?php include('public_footer.php'); ?>