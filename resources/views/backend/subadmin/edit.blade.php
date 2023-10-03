
@extends('backend.includes.master')

@section('content')

{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

      <!-- courses section -->
      <div class="course__template">
        <div class="course__search__field justify-content-between align-items-center mb-5">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb wow animate__ animate__fadeInUp animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <li class="breadcrumb-item"><a href="#">{{ __('admin.Sub Admin') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('admin.Edit Sub Admin') }}</li>
                </ol>
            </nav>
        </div>
        <!-- courses section -->
        <!-- activity details -->
        <div class="profile__info__details wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
            <div class="profile__information h-auto">
              <div class="row">

                <form  method="POST" action="{{route('admin.subadmin.update',$subadmin->id)}}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                <div class="col-12 col-sm-7">
                  <div class="profile__fields">

                    <div class="mb-3">
                        <div class="dropcoursehere" >
                          <div class="inner__dropfilebox">
                            <img id="blah" style="border-radius: 50%; width:50%;" src="{{asset($subadmin->image)}}" />
                            <div class="drop__here">
                              <div class="edit__button">
                                <button type="button" class="btn btn-primary"><i class="fa fa-pencil-alt"
                                    aria-hidden="true"></i>
                                    {{ __('admin.Upload Image') }}</button>
                              </div>
                            </div>
                            <input type='file' class="h-full w-full opacity-0" name="image" onchange="readURL(this);" />
                          </div>
                        </div>
                      </div>


                      @error('ar_summary')
                      <span class="error_alert">{{$message}}</span>
                      @enderror


                    <div class="mb-3">
                        <label for="your-name" class="form-label">{{ __('admin.First Name') }}</label>
                      <input type="text" class="form-control" id="your-name" name="first_name" value="{{$subadmin->first_name}}">
                    </div>

                    @error('first_name')
                    <span class="error_alert">{{$message}}</span>
                    @enderror

                    <div class="mb-3">
                        <label for="your-name" class="form-label">{{ __('admin.Last Name') }}</label>
                        <input type="text" class="form-control" id="your-name" name="last_name" value="{{$subadmin->last_name}}">
                    </div>
                    @error('last_name')
                    <span class="error_alert">{{$message}}</span>
                    @enderror

                    <div class="mb-3">
                        <label for="your-email" class="form-label">{{ __('admin.Email') }}</label>
                      <input type="email" class="form-control" id="your-email" name="email" value="{{$subadmin->email}}">
                    </div>

                    @error('email')
                    <span class="error_alert">{{$message}}</span>
                    @enderror

                    <div class="mb-3">
                        <label for="your-phonenumber" class="form-label">{{ __('admin.Phone Number') }}</label>
                      <input type="text" class="form-control" id="your-phonenumber" name="phone" value="{{$subadmin->phone}}">
                    </div>

                    @error('phone')
                    <span class="error_alert">{{$message}}</span>
                    @enderror

                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('admin.Biography') }}</label>
                        <textarea id="biography" name="biography">{{$subadmin->biography}}</textarea>
                        @error('biography')
                        <span class="error_alert">{{$message}}</span>
                        @enderror
                      </div>



                  </div>
                </div>


                <div class="col-12 col-sm-5" style="margin-top: 64px;">
                  <div class="profile__fields">
                    <div class="mb-3">
                        <label for="new-pass" class="form-label">{{ __('admin.Change Password') }}</label>
                      <input type="password" class="form-control" name="password" id="new-pass">
                    </div>

                    @error('password')
                        <span class="error_alert">{{$message}}</span>
                        @enderror
                  </div>
                </div>

                <button type="submit" class="btn btn-success">{{ __('admin.Update') }}</button>

            </form>


              </div>

            </div>
        </div>
      </div>



@section('js')
<script>
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('#blah')
          .attr('src', e.target.result);
      };

      reader.readAsDataURL(input.files[0]);
    }
  }


  $(document).ready(function () {

    $('#biography').summernote({
        placeholder: 'Enter Your BioGraphy',
        tabsize: 2,
        height: 100
      });



    });
  </script>

@endsection
@endsection
