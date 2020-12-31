@include('header')
<!-- Material form contact -->
<div class="container">
    <div class="card">
        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Image</strong>
        </h5>
        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">
            <!-- Form -->
            <form class="text-center md-form" action="{{ url('/imageupload/') }}" name="imageupload" method="POST" enctype="multipart/form-data">
                 @csrf
                <div class="file-field">
                    <div class="mb-4">
                        <img src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg" class="rounded-circle z-depth-1-half avatar-pic" alt="example placeholder avatar">
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="btn btn-mdb-color btn-rounded float-left">
                            <span>Add photo</span>
                            <input type="file" name="input_img" value="">
                        </div>
                    </div>
                </div>
                <button class="btn btn-secondary" type="submit"><i class="fas fa-upload mr-1"></i> Upload</button>
                @if ($errors->has('input_img'))<p class="error">{{ $errors->first('input_img') }}</p>@endif
                <a href="{{ url('admin') }}" class="btn btn-primary"><i class="fas fa-file mr-1"></i> File upload</a>
            </form>
        </div>
    </div>
</div>
@include('footer')