@extends('adminheader.header')

@section('content')


     <div class="col-xs-12 effect-content" style="padding: 0px;"  >

            <div class="panel " >
                <section >
                    <header class="panel-heading text-right" style="padding: 5px 6px;">
                        <div class="col-xs-8" style="padding: 0px;">
                            <span class="hidden-sm" style="padding: 3px;display: inline-block;">اعدادات النظام</span>  
                            <form method="POST" action="/applicant/destroy" style="display: inline-block;margin: 0px" id="removeapplicantform">
                              {{ csrf_field()}}
                              <input type="hidden" name="id" value="" id="removeid">
                              
                            <span class="hidden-sm" style="padding: 3px;display: inline-block; border:1px solid #13c4a5;background: #f2fffd;opacity: 0;" id="removealert">حذف ؟
                              <span  style="padding-right: 50px;">

                                 {{-- <span class="hidden-sm" style="padding: 1px 3px;display: inline-block; border:1px solid #13c4a5;margin: 0px 0px; ">
                                <span class="fa fa-times" style="width: 15px;padding: 0px 3px;color: #f93885"></span>
                                </span> --}} 
                                 <span class="hidden-sm" style="padding: 1px 3px;display: inline-block; border:1px solid #13c4a5; color: #13c4a5 ;cursor:pointer" onclick="$('#removeapplicantform').submit();">
                                  <span class="fa fa-check" style="width: 15px;padding: 0px 1px" ></span>
                                 </span>

                                
                              </span>
                              </form>
                              

                            </span>   
                            

                        </div>
                        

                       
                         
                    </header>

                    <?php $settings = \App\Setting::get()->first(); ?>



                    <form method="POST" action="/dashboard/settings/update"  enctype="multipart/form-data" >
                      @csrf
                    <div class="panel-body" style=" padding: 0px;">
                       <div class="col-xs-12" style="padding: 0px;overflow: auto;">
                            <div class="col-xs-12 col-sm-6" style="padding-top: 50px;padding-bottom: 30px;">
                              <div class="col-xs-12" style="padding-top: 15px">
                                <div class="col-xs-3 text-left" style="padding: 5px 0px ">
                                  اللوجو
                                </div>
                                <div class="col-xs-9"> 
                                  <div class="col-xs-10 text-right" >
                                    <input type="file" name="file"      style="padding-top: 5px;border:none;">
                                  </div>
                                </div>
                              </div>



                              <div class="col-xs-12" style="padding-top: 15px">
                                <div class="col-xs-3 text-left" style="padding: 5px 0px ">
                                  اسم المشروع
                                </div>
                                <div class="col-xs-9"> 
                                  <div class="col-xs-10 text-right">
                                    <input type="text" name="name"  style=" "    class="form-control" value="<?php echo $settings['name']; ?>">
                                  </div>
                                </div>
                              </div>

                              <div class="col-xs-12" style="padding-top: 15px">
                                <div class="col-xs-3 text-left" style="padding: 5px 0px ">
                                  النص في الاعلي
                                </div>
                                <div class="col-xs-9"> 
                                  <div class="col-xs-10 text-right">
                                    
                                    <textarea type="text" name="text_top"  style="max-width: 100%;min-width: 100%;min-height: 150px;"    class="form-control" ><?php echo $settings['text_top']; ?></textarea>


                                  </div>
                                </div>
                              </div>

                              <div class="col-xs-12" style="padding-top: 15px">
                                <div class="col-xs-3 text-left" style="padding: 5px 0px ">
                                 القصة
                                </div>
                                <div class="col-xs-9"> 
                                  <div class="col-xs-10 text-right">
                                    <textarea type="text" name="text_right"  style="max-width: 100%;min-width: 100%;min-height: 150px;"    class="form-control" ><?php echo $settings['text_right']; ?></textarea>
                                  </div>
                                </div>
                              </div>

                              <div class="col-xs-12">
                                <hr>
                              </div>


                              <div class="col-xs-12" style="padding-top: 15px">
                                <div class="col-xs-3 text-left" style="padding: 5px 0px ">
                                 الواتسآب
                                </div>
                                <div class="col-xs-9"> 
                                  <div class="col-xs-10 text-right">
                                    <input type="text" name="whatsapp"  style=" "    class="form-control" value="<?php echo $settings['whatsapp']; ?>">
                                  </div>
                                </div>
                              </div>


                              <div class="col-xs-12" style="padding-top: 15px">
                                <div class="col-xs-3 text-left" style="padding: 5px 0px ">
                                 انستاجرام
                                </div>
                                <div class="col-xs-9"> 
                                  <div class="col-xs-10 text-right">
                                    <input type="text" name="instagram"  style=" "    class="form-control" value="<?php echo $settings['instagram']; ?>">
                                  </div>
                                </div>
                              </div>

                              <div class="col-xs-12" style="padding-top: 15px">
                                <div class="col-xs-3 text-left" style="padding: 5px 0px ">
                                 سناب شات
                                </div>
                                <div class="col-xs-9"> 
                                  <div class="col-xs-10 text-right">
                                    <input type="text" name="snapchat"  style=" "    class="form-control" value="<?php echo $settings['snapchat']; ?>">
                                  </div>
                                </div>
                              </div>

                              <div class="col-xs-12" style="padding-top: 15px">
                                <div class="col-xs-3 text-left" style="padding: 5px 0px ">
                                تيليجرام
                                </div>
                                <div class="col-xs-9"> 
                                  <div class="col-xs-10 text-right">
                                    <input type="text" name="telegram"  style=" "    class="form-control" value="<?php echo $settings['telegram']; ?>">
                                  </div>
                                </div>
                              </div>


                              <div class="col-xs-12" style="padding-top: 15px">
                                <div class="col-xs-3 text-left" style="padding: 5px 0px ">
                                ايميل
                                </div>
                                <div class="col-xs-9"> 
                                  <div class="col-xs-10 text-right">
                                    <input type="text" name="email"  style=" "    class="form-control" value="<?php echo $settings['email']; ?>">
                                  </div>
                                </div>
                              </div>







 



                               

                         

                               
                            </div>
                            <div class="col-xs-12 col-sm-6" style="padding-top: 50px;padding-bottom: 30px;">

                              <div class="col-xs-12"> 
                                <span style="padding: 10px ">الصورة الحالية</span>
                                <img src="/files/<?php echo $settings['logo']; ?>" style="height: 150px; width: 150px;border-radius: 5px; box-shadow: 0px 0px 12px #333;padding: 
                                10px;overflow: hidden;" >
                              </div>

  
                            </div>

                            <div class="col-xs-12 text-left" style="margin-bottom: 40px;">
                              <div class="col-xs-6">
                                
                              </div>
                              <div class="col-xs-6">
                                <div class="col-xs-3">
                                  
                                </div>
                                <div class="col-xs-9">
                                  <div class="col-xs-10 text-left">
                                    <button class="btn btn-secondary" type="reset" style="margin: 10px;"> ازالة التعديلات</button>
                                    <span style="width: 20px;height: 20px;"></span>
                                    <button class="btn btn-success" style="margin: 10px;">حفظ</button>
                                  </div>
                                </div>
                              </div>

                             
                               
                            </div>
                       </div>
                    </div>
                    </form>

                </section> 
            </div>
         
      
     </div>


     <script type="text/javascript">
        $('input:checkbox').val('1');
     </script>

   
@endsection