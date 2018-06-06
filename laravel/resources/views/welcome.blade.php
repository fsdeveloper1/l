@extends('layouts.app')

@section('content')
    <!-- Page Content -->
    <div class="container">

      <!-- Heading Row -->
       <div class="row">
        <div class="col-sm-3 md-3 mb-3 lg-3 xl-3">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">وب سایت های تجاری و فروشگاهی</h2>
              <p class="card-text">این نوع وب سایت ها جهت معرفی کالا و محصولات  و نهایتا انجام مراحل سفارش گیری و احتمالا پرداخت نهایی هستند</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">ادامه</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-sm-6 md-6 mb-6 lg-6 xl-6" >
        <!--  <div class="card h-100">
            <div class="card-body">  -->
              
			<div class="img-thumbnail">
                <img src="{{asset('pic/c.png')}}" height="25%" width="100%" >
            </div>

			
            <div class="card-footer">
              <a href="#" class="btn btn-primary">ادامه</a>
            </div>
          </div>
      <!--  </div> -->
        <!-- /.col-md-4 -->
        <div class="col-sm-3 md-3 mb-3 lg-3 xl-3">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">وب اپلیکیشن های خدماتی</h2>
              <p class="card-text">این نوع شامل انواع فرایند های اطلاع رسانی و ثبت نامی و آموزشی و جمع آوری داده ها و ... است</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">ادامه</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
        <!-- /.col-lg-8 -->


        <!-- /.col-md-4 -->
      </div>
      <!-- /.row -->



       <br/>
      <!-- Content Row -->
	<div class="container">
      <div class="row">
        <div class="col-sm-3 md-3 mb-3 lg-3 xl-3">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">امنیت در طراحی وب سایت ها</h2>
              <p class="card-text">...</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">ادامه</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-sm-3 md-3 mb-3 lg-3 xl-3">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">مهمترین مرحله در وب سایت ها</h2>
              <p class="card-text">به نظر من مهمترین مرحله مربوط مشود به پس از تولید! یعنی کار گرفتن و تعامل حرفه ای با وب  آپ وتوسه آن در صورت لزوم</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">ادامه</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->
        <!-- /.col-md-4 -->
        <div class="col-sm-3 md-3 mb-3 lg-3 xl-3">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">responsive طراحی</h2>
              <p class="card-text">برترین نوع شامل  وب سایت هایی است که با همه سیستم ها مطابقت پیدا میکنند و در هر نوع نمایشگر بصورت خودکار بهینه میشوند</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">بیشتر بدانید</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-sm-3 md-3 mb-3 lg-3 xl-3">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title"></h2>
              <p class="card-text">قابلیت توسعه پذیری (Scalability)</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">...</a>
              <!-- Nested column -->
                <div class="card h-100">
                  <div class="card-body">
                    <h2 class="card-title"> seperation of concerns</h2>
                    <p class="card-text">برنامه نویسی استاندارد </p>
                  </div>
                  <div class="card-footer">
                    <a href="#" class="btn btn-primary">More Info</a>
                  </div>
                </div>
              </div>
                <!-- /.col-md-4 -->
                <!-- /.col-md-4 -->
             <!-- //Nested column -->
            </div>
        </div>
        <!-- /.col-md-4 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->



    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



@endsection
