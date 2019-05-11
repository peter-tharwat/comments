<?php /* /home/peter/Desktop/blog/resources/views/admin/comments.blade.php */ ?>
<?php $__env->startSection('content'); ?>

 

     <div class="col-xs-12 effect-content" style="padding: 0px;"  >

            <div class="panel " >
                <section >
                    <header class="panel-heading text-right" style="padding: 5px 6px;">
                        <div class="col-xs-8" style="padding: 0px;">
                            <span class="hidden-sm" style="padding: 3px;display: inline-block;">عرض كافة التعليقات</span>  
                            <form method="POST" action="/comment/destroy" style="display: inline-block;margin: 0px" id="removecommentform">
                              <?php echo e(csrf_field()); ?>

                              <input type="hidden" name="id" value="" id="removeid">
                              
                            <span class="hidden-sm" style="padding: 3px;display: inline-block; border:1px solid #13c4a5;background: #f2fffd;opacity: 0;" id="removealert">حذف ؟
                              <span  style="padding-right: 50px;">

                                  
                                 <span class="hidden-sm" style="padding: 1px 3px;display: inline-block; border:1px solid #13c4a5; color: #13c4a5 ;cursor:pointer" onclick="$('#removecommentform').submit();">
                                  <span class="fa fa-check" style="width: 15px;padding: 0px 1px" ></span>
                                 </span>

                                
                              </span>
                              </form>
                              

                            </span>   
                            

                        </div>
                       

                       
                         
                    </header>
                    <div class="panel-body" style=" padding: 0px;">
                       <div class="col-xs-12" style="padding: 0px;overflow: auto;">
                           <table class="table" style="padding: 0px;">
                               <thead class="thead" style="background: #f2fffd;padding: 5px ">
                                   <tr>
                                       <td>كود</td>
                                       <td>اسم المعلق</td>
                                       <td>ايميل</td>
                                       <td>التعليق</td>
                                       <td>الحالة</td>
                                       <td>عملية</td>  
                                   </tr>
                               </thead>
                               <tbody>

                                <?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mycomment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tr class="font-14">
                                     <td><?php echo e($mycomment->id); ?></td>
                                     <td><?php echo e($mycomment->name); ?></td>
                                     <td><?php echo e($mycomment->email); ?></td>
                                     <td><?php echo e(substr($mycomment->content , 0, 150)); ?> </td>
                                    
                                     <td>

                                      


                                   

                                            <div class="modal fade bs-example-modal-lg<?php echo e($mycomment->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="border-radius: 0px;">
                                              <div class="modal-dialog modal-lg" style="border-radius: 0px;">
                                                <div class="modal-content col-xs-12"  style="border-radius: 0px;padding: 0px;">
                                                    <div class="col-xs-12" style="padding: 10px 10px 0px ">
                                                        <h6 style="padding: 10px 15px;">
                                                            <span class="far fa-comment" style="color: #2381c6">
                                                            </span> 
                                                            <span style="padding: 10px;color: #2381c6"> تعديل تعليقك </span>
                                                        </h6>

                                                    </div>
                                                    <div class="col-xs-12" style="padding: 0px;">
                                                        <hr style="padding: 0px ;margin: 0px;">

                                                    </div>

                                                    <form method="POST" action="/updatecomments">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="id" value="<?php echo e($mycomment->id); ?>">

                                                    <div class="col-xs-12" style="padding: 15px  15px 5px;margin-top: 15px ">
                                                        <div class="col-xs-12">
                                                            <div class="col-xs-2 text-left">
                                                                الاسم
                                                            </div>
                                                            <div class="col-xs-9">
                                                                <input type="" name="name" class="form-control" style="border-radius: 0px; " required="" value="<?php echo e($mycomment->name); ?>">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12" style="padding: 15px 15px 5px ; ">
                                                        <div class="col-xs-12">
                                                            <div class="col-xs-2 text-left">
                                                                البريد
                                                            </div>
                                                            <div class="col-xs-9">
                                                                <input type="" name="email" class="form-control" style="border-radius: 0px; " value="<?php echo e($mycomment->email); ?>">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-xs-12" style="padding: 15px ;">
                                                        <div class="col-xs-12">
                                                            <div class="col-xs-2 text-left">
                                                                التعليق
                                                            </div>
                                                            <div class="col-xs-9">
                                                                <textarea name="content" class="form-control" style="border-radius: 0px;min-height: 200px; max-width: 100%;min-width: 100%; "
                                                                     required=""><?php echo e($mycomment->content); ?></textarea>
                                                         
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 " style="padding: 20px 0px ">
                                                        <div class="col-xs-2">
                                                            
                                                        </div>
                                                        <div class="col-xs-9 text-left" style="padding: 0px 35px ">
                                                            <button class="btn btn-info btn-sm" style="color: #fff;border-radius: 0px;">إرسال</button> 
                                                        </div>
                                                        <div class="col-xs-1">
                                                            
                                                        </div>
                                                       
                                                    </div>

                                                    </form>



                                                   
                                                </div>
                                              </div>
                                            </div>

                                            
                                        </div>









                                      <a href="/dashboard/comment/update_to_ok/<?php echo e($mycomment->id); ?>">
                                        <span style="border-radius: 3px ;padding: 1px 6px ;border:1px solid #333;margin: 0px 2px;
                                          <?php if ($mycomment->status=='ok')echo 'background: #08ff48;' ?>

                                        ">ظاهر</span>
                                      </a>

                                      <a href="/dashboard/comment/update_to_hide/<?php echo e($mycomment->id); ?>">
                                        <span style="border-radius: 3px ;padding: 1px 6px ;border:1px solid #333;margin: 0px 2px;
                                         <?php if ($mycomment->status=='hide')echo 'background: #08ff48;' ?>
                                         ">مخفي</span>
                                      </a> 

                                      <?php


                                       ?>
                                       
                                    </td>
                                   
                                 
                                     <td>


                                      <span class="fas fa-edit" type="button"  data-toggle="modal" data-target=".bs-example-modal-lg<?php echo e($mycomment->id); ?>"  style="cursor: pointer;"></span >



                           
                                      <a  
                                        onclick='var result = confirm("إنتبة !!  هل انت متأكد من الحذف ؟");
                                          if (result) {
                                            window.location="/dashboard/comment/remove/<?php echo e($mycomment->id); ?>";
                                          }
                                          '
                                        style="cursor: pointer;">
                                        <span class="fa fa-trash"></span>
                                      </a>

                                    </td>

                                   
                                    
                                  </tr>          
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        

                                    
  
                               </tbody>


                           </table>
                           <?php echo e($comment->links()); ?>

                       </div>
                    </div>
                </section> 
            </div>
         
      
     </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminheader.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>