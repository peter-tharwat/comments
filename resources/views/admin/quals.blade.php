@extends('adminheader.header')

@section('content')
     <div class="col-xs-12 effect-content" style="padding: 0px;"  >

            <div class="panel " >
                <section >
                    <header class="panel-heading text-right" style="padding: 5px 6px;">
                        <div class="col-xs-8" style="padding: 0px;">
                            <span class="hidden-sm" style="padding: 3px;display: inline-block;">عرض كافة المؤهلات</span>  
                
                        </div>

                        <div class="col-xs-4 text-left">
                          <span class="fa fa-plus" style="padding: 5px;background: #2381c6;color: #fff;cursor: pointer;" type="button"  data-toggle="modal" data-target=".bs-example-modal-lg"  style="border-radius: 0px;"></span>




                    

                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="border-radius: 0px;">
                              <div class="modal-dialog modal-lg" style="border-radius: 0px;">
                                <div class="modal-content col-xs-12"  style="border-radius: 0px;padding: 0px;">
                                    <div class="col-xs-12 text-right" style="padding: 10px 10px 0px ">
                                        <h6 style="padding: 10px 15px;">
                                            <span class="far fa-user" style="color: #2381c6">
                                            </span> 
                                            <span style="padding: 10px;color: #2381c6">إضافة مؤهل</span>
                                        </h6>

                                    </div>
                                    <div class="col-xs-12" style="padding: 0px;">
                                        <hr style="padding: 0px ;margin: 0px;">

                                    </div>

                                    <form method="POST" action="/dashboard/qual/create">
                                        @csrf

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

 


                                    <div class="col-xs-12" style="padding: 15px ;">
                                        <div class="col-xs-12">
                                            <div class="col-xs-2 text-left">
                                               ملاحظة
                                            </div>
                                            <div class="col-xs-9">
                                                <textarea name="details" class="form-control" style="border-radius: 0px;min-height: 200px; max-width: 100%;min-width: 100%; "
                                                    ></textarea>
                                         
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 " style="padding: 20px 0px ">
                                        <div class="col-xs-2">
                                            
                                        </div>
                                        <div class="col-xs-9 text-left" style="padding: 0px 35px ">
                                            <button class="btn btn-info btn-sm" style="color: #fff;border-radius: 0px;">حفظ</button> 
                                        </div>
                                        <div class="col-xs-1">
                                            
                                        </div>
                                       
                                    </div>

                                    </form>



                                   
                                </div>
                              </div>
                            </div>

                            
                        </div>




                        </div>
                       {{--  <div style="padding: 0px" class="col-xs-2 ">
                          <form method="get" action="/dashboard/qual/search">
                            
                         
                          <div class=" navbar-form pull-left shift" style="padding: 0px;margin: 0px;">
                            <i class="fa fa-search text-muted"></i> <input class="input-sm form-control" placeholder="بحث" type="text" style="border:1px solid #13c4a5!important;background: #f2fffd" name="search">
                          </div>
                           </form>
                          
                        </div> --}}

                       
                         
                    </header>
                    <div class="panel-body" style=" padding: 0px;">
                       <div class="col-xs-12" style="padding: 0px;overflow: auto;">
                           <table class="table" style="padding: 0px;">
                               <thead class="thead" style="background: #f2fffd;padding: 5px ">
                                   <tr>
                                       <td>كود</td>
                                       <td>اسم القسم</td>
                                       <td>ملاحظات</td>
                                      
                                       <td>عملية</td>
                                   </tr>
                               </thead>
                               <tbody>

                                @foreach($qual as $myqual)
                                  <tr>
                                      <td>{{$myqual->id}}</td>
                                      <td>{{$myqual->name}}</td>
                                      <td>{{$myqual->details}}</td>
                                      
                                     <td>                              
                                      <a  
                                        onclick='var result = confirm("هل انت متاكد من الحذف ؟");
                                          if (result) {
                                            window.location="/dashboard/qual/remove/{{$myqual->id}}";
                                          }
                                          '
                                        style="cursor: pointer;">
                                        <span class="fa fa-trash"></span>
                                      </a>
                                      
                            

                                   

                                     </td>
                                  </tr>          
                                @endforeach
                                        

                                    
  
                               </tbody>


                           </table>
                           {{ $qual->links() }}
                       </div>
                    </div>
                </section> 
            </div>
         
      
     </div>
@endsection