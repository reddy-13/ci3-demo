<?php include_once('admin_header.php'); ?>
<div class="container">
        <?php echo form_open("admin/update_article/{$article->id}",['class' => 'form-horizontal']);
            
        ?>
       <fieldset>
            <legend>Edit Article</legend>
               
            <div class="row">
                <div class="col-lg-6">
                
                        <div class="form-group">
                                <label for="exampleInputEmail1" class="col-lg-4 control-label">Article Titlte</label>
                               <div class="col-lg-8">
                                <?php echo form_input(
                                                [ 'name'=>'title',
                                                    'class'=>'form-control',
                                                    'placeholder'=>'title',
                                                    'id'=>'exampleInputEmail',
                                                    'aria-decsribedby'=>'emailHelp',
                                                    'value'=>set_value('title',$article->title)]);?>
                                <span ><?php echo form_error('title'); ?></span>
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                               </div>
                        </div>
                </div>                    
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                            <label for="exampleInputPassword1" class="col-lg-4 control-label">Article Body</label>
                            <div class="col-lg-8">
                            <?php echo form_textarea([
                                    'name'=>'body',
                                    'class'=>'form-control',
                                    'id'=>'exampleInputPassword1',
                                    'placeholder'=>'Article Body',
                                    'value'=>set_value('body',$article->body)]);?>
                                <span ><?php echo form_error('body'); ?></span>
                            </div>
                    
                    </div>
                </div>
             </div>
             <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <?php echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']),
                            form_submit(['name'=>'submit','value'=>'Update','class'=>'btn btn-primary']);
                        ?>
                </div>
             </div>
                    
                
            </fieldset>
                <?php form_close(); ?>

        </div>


<?php include_once('admin_footer.php'); ?>