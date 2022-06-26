<?php include_once('admin_header.php'); ?>
  
  <div class="container">
  <div class="row">
    <div class="col-lg-12 ">
        <?= anchor('admin/add_article','Add Article',['class'=> 'btn btn-lg btn-primary float-right']); ?>
        
    </div>
  </div>
    <?php if($feedback = $this->session->flashdata('feedback')):
            $feedback_class = $this->session->flashdata('feedback_class'); 
    ?> 
    <div class="row justify-content-md-center">
        <div class="col-lg-6 ">
                     <div class="alert alert-dismissible <?=$feedback_class ?>">
                        <?= $feedback; ?>
                    </div>       
        </div>
    </div>

        <?php endif; ?>
      <table class="table">
          <thead>
              <th>Sr .no</th>
              <th>Title</th>
              <th>Action</th>
          </thead>
          <tbody>
            
             <?php if(count($articles)):
                $count =$this->uri->segment(3);
                 foreach($articles as $article):
              ?>
              
             <tr>
              <td><?php echo ++$count ?></td>
              <td>
                    <?= $article->title; ?> 
              </td>
              <td>
              <div class="row">
                  <div class="col-lg-2">
                       <?= anchor("admin/edit_article/{$article->id}",'Edit',['class'=> 'btn btn-primary']) ?>
                  </div>
                  <div class="col-lg-2">
                       <?=
                    form_open('admin/delete_article'),
                    form_hidden('article_id',$article->id),
                    form_submit(['name'=>'submit', 'value'=>'Delete','class'=>'btn btn-danger']),
                    form_close();
    
                ?>
                  </div>
              </div>
  
              </td>
            </tr>
              <?php endforeach; ?> 
               <?php else: ?>
                   <tr>
                       <td colspan="3">No records found</td>
                   </tr>
               <?php endif; ?>
          </tbody>
      </table>
      
     <div>
     <?= $this->pagination->create_links();?>

   
<?php include_once('admin_footer.php'); ?>
    
