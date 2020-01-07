<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Feedback @ E-Biashara</title>



    <!-- Main CSS-->
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" media="all">
</head>

<body>
<div class="page-wrapper bg-gra-02 pt-130 pb-100 font-poppins">
    <div class="wrapper wrapper--w680">
      <div class="container">
          <div class="row">
             <div class="col-md-6 offset-md-3">
                 <div class="card card-4">
                     <div class="card-body">
                         @if(Session::has('results'))
                             {{json_encode(Session::get('results'))}}
                             @endif
                         <h2 class="title">Commenter Form</h2>
                         <form action="{{route('comments')}}" method="post">
                             @csrf
                             <div class="form-group">
                                 <label for="">First Name</label>
                                 <input value="{{ old('first_name') }}" type="text" class="form-control {{ $errors->has('first_name') ? 'is-invalid':'' }}" name="first_name">
                                 <span class="text-danger">
                                     @if($errors->has('first_name'))
                                         {{$errors->first('first_name')}}
                                         @endif
                                 </span>

                             </div>
                             <div class="form-group">
                                 <label for="">Phone Numbers</label>
                                 <input value="{{ old('phone') }}" type="text" class="form-control {{ $errors->has('phone') ? 'is-invalid':'' }}" name="phone">
                                 <span class="text-danger">
                                     @if($errors->has('phone'))
                                         {{$errors->first('phone')}}
                                     @endif
                                 </span>
                             </div>
                             <div class="form-group">
                                 <label for="">Comment</label>
                                 <textarea value="{{ old('comments') }}" class="form-control {{ $errors->has('comments') ? 'is-invalid':'' }}" rows="5" cols="20" name="comments" ></textarea>
                                 <span class="text-danger">
                                     @if($errors->has('comments'))
                                         {{$errors->first('comments')}}
                                     @endif
                                 </span>
                             </div>
                             <button class="btn btn-primary-cs btn-block">Submit</button>
                         </form>
                     </div>

                 </div>


             </div>
          </div>
      </div>
    </div>
</div>

<script src="{{asset('assets/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>

</body>

</html>
<!-- end document-->