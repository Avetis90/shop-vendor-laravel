<?php $__env->startSection('title', trans('admin.add_post_page_title') .' < '. get_site_title()); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('pages-message.form-submit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title"><?php echo e(trans('admin.add_new_post_top_title')); ?> &nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-default btn-sm" href="<?php echo e(route('admin.testimonial_post_list_content')); ?>"><?php echo e(trans('admin.posts_list')); ?></a></h3>
      <div class="box-tools pull-right">
        <button class="btn btn-primary btn-block btn-sm" type="submit"><?php echo e(trans('admin.save')); ?></button>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-8">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?php echo e(trans('admin.post_title')); ?></h3>
        </div>
        <div class="box-body">
          <input type="text" placeholder="<?php echo e(trans('admin.post_title_placeholder')); ?>" class="form-control" name="testimonial_post_title" id="testimonial_post_title" value="<?php echo e(old('testimonial_post_title')); ?>">
        </div>
      </div>
        
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?php echo e(trans('admin.post_description')); ?></h3>
        </div>
        <div class="box-body">
          <textarea id="testimonial_description_editor" name="testimonial_description_editor" class="dynamic-editor" placeholder="<?php echo e(trans('admin.post_description_placeholder')); ?>"></textarea>
        </div>
      </div>
      
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-upload"></i>
          <h3 class="box-title"><?php echo e(trans('admin.featured_image')); ?></h3>
          <div class="box-tools pull-right">
            <div data-toggle="modal" data-dropzone_id="testimonial_dropzone_file_uploader" data-target="#testimonialUploader" class="icon product-uploader"><?php echo e(trans('admin.upload_image')); ?></div>
          </div>
        </div>
        <div class="box-body testimonial-content">
          <div class="uploaded-testimonial-image">
            <div class="testimonial-sample-img"><img class="upload-icon img-responsive" src="<?php echo e(default_upload_sample_img_src()); ?>"></div>
            <div class="testimonial-uploaded-image"><img class="img-responsive"><div class="remove-img-link"><button type="button" data-target="testimonial_image" class="btn btn-default attachtopost"><?php echo e(trans('admin.remove_image')); ?></button></div></div>
          </div>
            
          <div class="modal fade" id="testimonialUploader" tabindex="-1" role="dialog" aria-labelledby="updater" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <p class="no-margin"><?php echo trans('admin.you_can_upload_1_image'); ?></p>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>    
                <div class="modal-body">             
                  <div class="uploadform dropzone no-margin dz-clickable testimonial_dropzone_file_upload" id="testimonial_dropzone_file_upload" name="testimonial_dropzone_file_upload">
                    <div class="dz-default dz-message">
                      <span><?php echo e(trans('admin.drop_your_cover_picture_here')); ?></span>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default attachtopost" data-dismiss="modal"><?php echo e(trans('admin.close')); ?></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?php echo e(trans('admin.testimonial_more_details_title')); ?></h3>
        </div>
        
        <div class="box-body">
          <div class="form-group">
            <div class="row">
              <label class="col-sm-3 control-label" for="inputClientName"><?php echo e(trans('admin.testimonial_client_name_title')); ?></label>
              <div class="col-sm-9">
                <input type="text" placeholder="<?php echo e(trans('admin.testimonial_client_name_placeholder')); ?>" class="form-control" name="testimonial_client_name" id="testimonial_client_name" value="<?php echo e(old('testimonial_client_name')); ?>">
              </div>
            </div>  
          </div>
          
          <div class="form-group">
            <div class="row">  
              <label class="col-sm-3 control-label" for="inputJobTitle"><?php echo e(trans('admin.testimonial_job_title')); ?></label>
              <div class="col-sm-9">
                <input type="text" placeholder="<?php echo e(trans('admin.testimonial_job_title_placeholder')); ?>" class="form-control" name="testimonial_job_title" id="testimonial_job_title" value="<?php echo e(old('testimonial_job_title')); ?>">
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">  
              <label class="col-sm-3 control-label" for="inputCompanyName"><?php echo e(trans('admin.testimonial_company_name_title')); ?></label>
              <div class="col-sm-9">
                <input type="text" placeholder="<?php echo e(trans('admin.testimonial_company_name_placeholder')); ?>" class="form-control" name="testimonial_company_name" id="testimonial_company_name" value="<?php echo e(old('testimonial_company_name')); ?>">
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">  
              <label class="col-sm-3 control-label" for="inputUrl"><?php echo e(trans('admin.testimonial_url')); ?></label>
              <div class="col-sm-9">
                <input type="text" placeholder="<?php echo e(trans('admin.url_prefix_label')); ?>" class="form-control" name="testimonial_url" id="testimonial_url" value="<?php echo e(old('testimonial_url')); ?>">
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    
    <div class="col-md-4">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-eye"></i>
          <h3 class="box-title"><?php echo e(trans('admin.visibility')); ?></h3>
        </div>
        <div class="box-body">
          <div class="form-group">
            <div class="row">  
              <label class="col-sm-3 control-label" for="inputVisibility"><?php echo e(trans('admin.status')); ?></label>
              <div class="col-sm-9">
                <select class="form-control select2" name="testimonial_post_visibility" style="width: 100%;">
                  <option selected="selected" value="1"><?php echo e(trans('admin.enable')); ?></option>
                  <option value="0"><?php echo e(trans('admin.disable')); ?></option>                  
                </select>                                         
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div>  
  </div>
  
  <input type="hidden" name="_token" id="_token" value="<?php echo e(csrf_token()); ?>">
  <input type="hidden" name="hf_post_type" id="hf_post_type" value="add">
  <input type="hidden" name="image_url" id="image_url">
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>