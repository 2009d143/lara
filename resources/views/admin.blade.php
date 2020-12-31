@include('header')
<!-- Material form contact -->
<div class="container">
    <div class="card">
        <h5 class="card-header info-color white-text text-center py-4">
            <strong>File</strong>
        </h5>
        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">
            <!-- Form -->
            <form class="text-center" style="color: #757575;" action="{{ url('/admin/') }}" method="POST">
                <!-- Name -->               
                <div class="file-field">
                    <div class="z-depth-1-half mb-4">
                        <img src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg" class="img-fluid" alt="example placeholder">
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="btn btn-mdb-color btn-rounded float-left">
                            <span>Choose file</span>
                            <input type="file">
                        </div>
                    </div>
                </div>
                <button class="btn btn-secondary" type="submit" name="Upload">Upload</button>
            </form>
            <div class="row text-center">
                <a href="{{ url('imageupload') }}" class="btn btn-primary"><i class="fas fa-image mr-1"></i> Images upload</a>
            </div>
            <!-- Form -->
        </div>
    </div>
</div>
<!-- Material form contact -->
@include('footer')

