<?php /* /home/peter/Desktop/blog/resources/views/home.blade.php */ ?>
<?php $__env->startSection('content'); ?>


<style type="text/css">
    textarea,input,button:focus
    {
        outline: none!important;
        box-shadow: none!important;
    }
</style>

<div class="col-xs-12">
    <?php $set=\App\Setting::get()->first(); ?>
    <div class="container">

        <!-- Large modal -->


        

     




        <div class="col-xs-12 col-sm-5 col-md-4">
            <div class="col-xs-12" style="padding-top: 5px;">
                <div style="height: 220px; background: #fff;border-radius: 10px ;overflow: hidden;">
                    <div class="col-xs-12 text-center" style="height: 180px;padding: 15px;">
                        <img src="/files/<?php echo e($set['logo']); ?>" style="width: 100%;max-height: 150px;border-radius: 9px;display: inline-block;max-width: 200px;">
                    </div>
                    <div class="col-xs-12">
                        <h6 class="text-center" style="color: #333;font-size: 16px;">
                      <?php echo e($set['name']); ?>   </h6>
                    </div>
                 </div>
            </div>

            <div class="col-xs-12" style="padding-top: 20px;" >
                <div style="  background: #fff;border-radius: 10px ;padding: 25px; text-align: justify;">
                <?php echo e($set['text_right']); ?> 
                 </div>
            </div>

            <div class="col-xs-12 text-right" style="padding-top: 20px;">
                <div style="min-height: 120px; background: #fff;border-radius: 10px ;padding: 0px;" class="col-xs-12" >
                   <h6 style="padding: 18px 25px;">
                        <span class="fas fa-briefcase" style="color: #2381c6">
                        </span> 
                        <span style="padding: 10px;color: #2381c6"> معلومات تهمك : </span>
                    </h6>
                    <div class="col-xs-12" style="height: 1px; background: #f1f1f1">
                        </div>
                    <div class="col-xs-12">
                        <?php $qual = \App\Qualification::get(); ?>
                        <ul style="padding: 20px;">
                            <?php $__currentLoopData = $qual; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $myqual): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($myqual->name); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                 </div>
            </div>

            <div class="col-xs-12 text-right" style="padding-top: 20px;margin-bottom: 60px;">
                <div style="min-height: 120px; background: #fff;border-radius: 10px ;padding: 0px;" class="col-xs-12"  >
                    <div class="col-xs-12">
                        <h6 style="padding: 18px 25px;">
                            <span class="far fa-envelope" style="color: #2381c6">
                            </span> 
                            <span style="padding: 10px;color: #2381c6"> تابعونا وتواصلوا معنا على </span>
                        </h6>
                        
                    </div>
                   
                    <div class="col-xs-12" style="height: 1px; background: #f1f1f1">
                    </div>

                    <div class="col-xs-12 text-center contact-us" style="padding: 20px 0px  ">

                         <span style="display: inline-block;padding: 6px ">
                            <a href="https://wa.me/<?php echo e($set['whatsapp']); ?>">
                             <span class="fab fa-whatsapp wh-hover" style="padding: 5px 6px ;  display: block;border:1px solid #2381c6;border-radius: 2px;"></span>
                             </a>
                        </span>
                        <span style="display: inline-block;padding: 6px ">
                            <a href="<?php echo e($set['snapchat']); ?> ">
                             <span class="fab fa-snapchat-ghost tw-hover" style="padding: 5px 5px ;  display: inline-block;border:1px solid #2381c6;border-radius: 2px;"></span>
                             </a>
                        </span>


                        
                        
                        <span style="display: inline-block;padding: 6px ">
                            <a href="<?php echo e($set['instagram']); ?> ">
                             <span class="fab fa-instagram ins-hover" style="padding: 5px 6px ;  display: inline-block;border:1px solid #2381c6;border-radius: 2px;"></span>
                             </a>
                        </span>

                        <span style="display: inline-block;padding: 6px ">
                            <a href="<?php echo e($set['telegram']); ?> ">
                             <span class="fab fa-telegram-plane fb-hover" style="padding: 5px 6px ;  display: inline-block;border:1px solid #2381c6;border-radius: 2px;"></span>
                             </a>
                        </span>
                       
                        
                    </div>
  
                 </div>
             </div>
 
           
            
        </div>


        <div class="col-xs-12 col-sm-7 col-md-8"  >

            <div class="col-xs-12" >
                 <div class="col-xs-12" style="padding: 10px 0px;padding-top: 0px;min-height: 900px; ">


                       <div class="col-xs-12 text-left" style="padding: 0px 10px 25px ">


                            <div class="col-xs-12" style="padding: 5px 0px ">
                                <ul style="list-style: none;padding: 0px ">
                                    <?php if(session()->has('data')): ?>      
                                        <li >
                                            <div class="col-xs-12 animated slideInDown " style="padding: 4px 5px 0px; position: relative;overflow: hidden;padding-right: 20px; ">
                                                 <div class="alert alert-<?php echo e(session('data')['alert-type']); ?>  col-xs-12 " style="margin :0px; padding: 9px 12px; border-radius: 0px;border:1px solid #2381c6;position: relative; font-size: 12px;color: #333">
                                                    <?php echo e(session('data')['alert']); ?>

                                                 </div>
                                            </div>
                                        </li>
                                    <?php endif; ?>

                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                                    <li >
                                        <div class="col-xs-12 animated slideInDown " style="padding: 4px 5px 0px; position: relative;overflow: hidden;padding-right: 20px; ">
                                             <div class="alert alert-danger col-xs-12  " style="margin :0px; padding: 9px 12px;width: 200px;border-radius: 0px;border:1px solid #2381c6;position: relative; font-size: 12px;color: #333">
                                                <?php echo e($message); ?>

                                             </div>
                                        </div>
                                    </li>

                                    
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                </ul>
                            </div>
                            <div class="col-xs-12" style="padding: 0px;padding-bottom: 10px;">
                                <div class="col-xs-8">
                                    <h4 style="font-weight: bold;color: #666">قالوا عنا : </h4>
                                </div>
                                <div class="col-xs-4 text-left" style="padding: 0px">
                                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"  style="border-radius: 4px;">كتابة تعليق</button>
                                    
                                </div>
                            </div>

                           

                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="border-radius: 0px;">
                              <div class="modal-dialog modal-lg" style="border-radius: 0px;">
                                <div class="modal-content col-xs-12"  style="border-radius: 0px;padding: 0px;">
                                    <div class="col-xs-12" style="padding: 10px 10px 0px ">
                                        <h6 style="padding: 10px 15px;">
                                            <span class="far fa-comment" style="color: #2381c6">
                                            </span> 
                                            <span style="padding: 10px;color: #2381c6"> اكتب تعليقك </span>
                                        </h6>

                                    </div>
                                    <div class="col-xs-12" style="padding: 0px;">
                                        <hr style="padding: 0px ;margin: 0px;">

                                    </div>

                                    <form method="POST" action="/addcomment">
                                        <?php echo csrf_field(); ?>

                                    <div class="col-xs-12" style="padding: 15px  15px 5px;margin-top: 15px ">
                                        <div class="col-xs-12">
                                            <div class="col-xs-2 text-left">
                                                الاسم
                                            </div>
                                            <div class="col-xs-9">
                                                <input type="" name="name" class="form-control" style="border-radius: 0px; " required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12" style="padding: 15px 15px 5px ; ">
                                        <div class="col-xs-12">
                                            <div class="col-xs-2 text-left">
                                                البريد
                                            </div>
                                            <div class="col-xs-9">
                                                <input type="" name="email" class="form-control" style="border-radius: 0px; ">
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
                                                     required=""></textarea>
                                         
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

                     


                        
                   


                    <?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mycomment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div class="col-xs-12 " style="  border-radius:10px; background: #fff;box-shadow: #98cff7 -10px 10px 5px -8px;border:1px solid #98cff7;margin-bottom: 40px;">
                         <div style="padding: 10px;">
                            <div   style="display: inline-block;position: relative;top:-30px;background: #fff;border-radius: 10px;padding: 5px 30px;border:1px solid #98cff7 ;padding-right: 15px;">
                                <img src="/tetert.png" style="height: 40px; width: 40px;display: inline-block;">
                                 
                                

                                <span style="display: inline-block;padding: 2px 10px;"><?php echo e($mycomment->name); ?></span>
                            </div>
                            <div class="col-xs-12 " style="padding: 10px;position: relative;top: -20px;  ">
                                <div class="col-xs-12 text-right">
                                    <img src="https://icons-for-free.com/free-icons/png/512/2859061.png" style="width: 20px; height: 20px;">
                                </div>
                                <div class="col-xs-12 text-center" style="overflow: hidden;">
                                    <?php echo e($mycomment->content); ?>

                                </div>
                                <div class="col-xs-12 text-left">
                                    <img src="https://icons-for-free.com/free-icons/png/512/2859061.png" style="width: 20px; height: 20px;transform: rotate(180deg);">
                                </div>
                                
                            </div>
                             
                         </div>
                     </div>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                

                 </div>
                 <div class="col-xs-12">
                     <?php echo e($comment->links()); ?>

                 </div>
            </div>
            
        </div>
         
    </div>
</div>


<div class="col-xs-12" style="background: #fff;height: 70px;">
    <h6 style="color: #555;padding-top: 25px;" class="text-center"> جميع الحقوق محفوظة &copy; لـ إمِلي لتعليم اللغة الانجليزية</h6>
</div>
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>