
@extends('backend.includes.master')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <!-- single course details -->
    <div class="course__single__template">
      <div class="row">
        <div class="col-12 col-sm-9">
          <!-- breadcrumbs -->
          <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb wow animate__animated animate__fadeInUp">
              <li class="breadcrumb-item"><a href="#">{{ __('admin.Home') }}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ __('admin.Course') }}</li>
            </ol>
          </nav>
          <!-- breadcrumbs -->
          <form action="{{route('admin.course.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

        <div class="dropcoursehere wow animate__animated animate__fadeInUp">
            <div class="inner__dropfilebox">
              <img id="blah" src="{{asset('assets/images/upload_image.png')}}" />
              <div class="drop__here">
                <div class="edit__button">
                  <button type="button" class="btn btn-primary"><i class="fa fa-pencil-alt"
                      aria-hidden="true"></i>
                      {{ __('admin.Upload Image') }}</button>
                </div>
              </div>
              <input type='file' required="required" class="h-full w-full opacity-0" name="course_thumbnail" onchange="readURL(this);" />



            </div>
        </div>

            @error('course_thumbnail')
              <span class="error_alert">{{$message}}</span>
            @enderror

          <div class="course__header wow animate__animated animate__fadeInUp">
            <p class="course__title flex-fill">{{ __('admin.Course Add Form') }}</p>
          </div>
          <!-- course header -->
          <!-- course about -->


          <div class="course__about wow animate__animated animate__fadeInUp">

            <div class="mb-2">
              <label for="course-title" class="form-label">{{ __('admin.Select Category') }}</label>
              <select type="text" class="form-control" name="category_id" >
                <option value="" selected>{{ __('admin.Select Category') }}</option>
                @foreach($categories as $category)
                @if (old('category_id') == $category->id)

                @else
                  <option value="{{$category->id}}">{{$category->{Langkeyword().'name'} }}</option>
                  @endif
                @endforeach

              </select>

              @error('category_id')
              <span class="error_alert">{{$message}}</span>
              @enderror
            </div>
            <br>
            <div class="mb-3">
              <label for="course-title" class="form-label">{{ __('admin.Title') }}</label>
              <input type="text" class="form-control ltr" name="title" value="{{old('title')}}" id="course-title">

              @error('title')
              <span class="error_alert">{{$message}}</span>
              @enderror
            </div>

            <div class="mb-3">
              <label for="course-title" class="form-label">{{ __('admin.Arabic Title') }}</label>
              <input type="text" class="form-control rtl" name="ar_title" value="{{old('ar_title')}}" id="course-title">
              @error('ar_title')
              <span class="error_alert">{{$message}}</span>
              @enderror
            </div>

            <div class="mb-3">
              <label for="course-title" class="form-label">{{ __('admin.Urdu Title') }}</label>
              <input type="text" class="form-control rtl" name="ur_title" value="{{old('ur_title')}}" id="course-title">
              @error('ur_title')
              <span class="error_alert">{{$message}}</span>
              @enderror
            </div>


          </div>
          <!-- course about -->
          <!-- course about -->
          <div class="course__about wow animate__animated animate__fadeInUp">

            <div class="course__plan my-4">
              <h5>{{ __('admin.Short Description') }}</h5>
            </div>
            <div class="mb-3">
              <textarea id="short_description" name="short_description">{{old('short_description')}}</textarea>
            </div>

            @error('short_description')
              <span class="error_alert">{{$message}}</span>
            @enderror

            <div class="course__plan my-4">
              <h5>{{ __('admin.Arabic Short Description') }}</h5>
            </div>
            <div class="mb-3">
              <textarea id="ar_short_description" name="ar_short_description">{{old('ar_short_description')}}</textarea>
            </div>

            @error('ar_short_description')
              <span class="error_alert">{{$message}}</span>
            @enderror


            <div class="course__plan my-4">
              <h5>{{ __('admin.Urdu Short Description') }}</h5>
            </div>
            <div class="mb-3">
              <textarea id="ur_short_description" name="ur_short_description">{{old('ur_short_description')}}</textarea>
            </div>

            @error('ur_short_description')
              <span class="error_alert">{{$message}}</span>
            @enderror


            <div class="course__plan my-4">
              <h5>{{ __('admin.Description') }}</h5>
            </div>
            <div class="mb-3">
              <textarea id="description" name="description">{{old('description')}}</textarea>
            </div>

            @error('description')
              <span class="error_alert">{{$message}}</span>
            @enderror

            <div class="course__plan my-4">
              <h5>{{ __('admin.Arabic Description') }}</h5>
            </div>
            <div class="mb-3">
              <textarea id="ar_description" name="ar_description">{{old('ar_description')}}</textarea>
            </div>

            @error('ar_description')
              <span class="error_alert">{{$message}}</span>
            @enderror


            <div class="course__plan my-4">
              <h5>{{ __('admin.Urdu Description') }}</h5>
            </div>
            <div class="mb-3">
              <textarea id="ur_description" name="ur_description">{{old('ur_description')}}</textarea>
            </div>

            @error('ur_description')
              <span class="error_alert">{{$message}}</span>
            @enderror


            <div class="mb-3">
              <label for="course-title" class="form-label">{{ __('admin.Outcome') }}</label>
              <input type="text" class="form-control ltr" name="outcome" value="{{old('outcome')}}" id="course-title">
              @error('outcome')
              <span class="error_alert">{{$message}}</span>
              @enderror
            </div>

            <div class="mb-3">
              <label for="course-title" class="form-label">{{ __('admin.Arabic Outcome') }}</label>
              <input type="text" class="form-control rtl" name="ar_outcome" value="{{old('ar_outcome')}}" id="course-title">
              @error('ar_outcome')
              <span class="error_alert">{{$message}}</span>
              @enderror
            </div>

            <div class="mb-3">
              <label for="course-title" class="form-label">{{ __('admin.Urdu Outcome') }}</label>
              <input type="text" class="form-control rtl" name="ur_outcome" value="{{old('ur_outcome')}}" id="course-title">
              @error('ur_outcome')
              <span class="error_alert">{{$message}}</span>
              @enderror
            </div>


            <div class="mb-3">
              <label for="course-title" class="form-label">{{ __('admin.Indroduction Video') }}</label>
              <input type="text" class="form-control ltr" name="vedio_url" value="{{old('vedio_url')}}" id="course-title">
              @error('vedio_url')
              <span class="error_alert">{{$message}}</span>
              @enderror
            </div>

            <div class="mb-3">
              <label for="course-title" class="form-label">{{ __('admin.Indroduction Video Arabic') }}</label>
              <input type="text" class="form-control ltr" name="ar_vedio_url" value="{{old('ar_vedio_url')}}" id="course-title">
              @error('ar_vedio_url')
              <span class="error_alert">{{$message}}</span>
              @enderror
            </div>

            <div class="mb-3">
              <label for="course-title" class="form-label">{{ __('admin.Indroduction Video Urdu') }}</label>
              <input type="text" class="form-control ltr" name="ur_vedio_url" value="{{old('ur_vedio_url')}}" id="course-title">
              @error('ur_vedio_url')
              <span class="error_alert">{{$message}}</span>
              @enderror
            </div>



          </div>
          <!-- course about -->


          <div class="course__lesson wow animate__animated animate__fadeInUp">
            <div class="add__course__lesson">
              <button type="submit" class="btn add__course">
                <!-- <i class="fa fa-plus me-2" aria-hidden="true"></i> -->
                {{ __('admin.Submit') }}
              </button>
            </div>
          </div>
        </form>
          <!-- exams lesson -->
        </div>
      </div>
    </div>
    <!-- single course details -->
    <!-- courses section -->
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

    $('#short_description').summernote({
        placeholder: 'Short Description',
        tabsize: 2,
        height: 100
      });



    $('#ar_short_description').summernote({
        placeholder: 'Arabic Short Description',
        tabsize: 2,
        height: 100
      });



    $('#ur_short_description').summernote({
        placeholder: 'urdu Short Description',
        tabsize: 2,
        height: 100
      });


      $('#description').summernote({
        placeholder: 'Description',
        tabsize: 2,
        height: 100
      });

      $('#ar_description').summernote({
        placeholder: 'Arabic Description',
        tabsize: 2,
        height: 100
      });

      $('#ur_description').summernote({
        placeholder: 'Urdu Description',
        tabsize: 2,
        height: 100
      });

    });
  </script>
  <script>
    $(document).ready(function () {
      $('#course-plan').summernote({
        placeholder: 'Course Plan',
        tabsize: 2,
        height: 100
      });
    });
  </script>


@endsection
@endsection
