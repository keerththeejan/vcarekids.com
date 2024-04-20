<!DOCTYPE html>
<html lang="en">

<head>
    @include('script')
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            @include('top-nov')
            @include('sidenav')

            <div class="section-body">
                <!-- add content here -->
                <div class="main-content">
                    <section class="section">
                        <div class="col-12 col-md-12 col-lg-12">
                            <br>
                            <div class="card-body">


                                <div class="card-header">
                                    <h3>New Students</h3>
                                </div>
                                <br>
                                <div class="card-header-action">
                                    <a href="students" class="btn btn-primary">
                                        <i class="fas fa-user-info"></i> View Students
                                    </a>
                                </div>

                                <form class="needs-validation" novalidate="" method="post" action="studentcreate" enctype="multipart/form-data">
                                    @csrf

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Student Full Name</label>
                                            <input type="text" name="fullname" class="form-control" required="">
                                            <div class="invalid-feedback">
                                                What's Student Full Name?
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Father or Mother Full Name</label>
                                            <input type="text" name="parentname" class="form-control" required="">
                                            <div class="invalid-feedback">
                                                What's Father or Mother Full Name?
                                            </div>
                                        </div>

                                        <div class="form-group mb-0">
                                            <label>Parents Permanent Address</label>
                                            <textarea class="form-control" name="parentaddress" required=""></textarea>
                                            <div class="invalid-feedback">
                                                What's Parents Permanent Address?
                                            </div>
                                        </div>

                                        <div class="form-group mb-0">
                                            <label>Student Present Address</label>
                                            <textarea class="form-control" name="studentaddress" required=""></textarea>
                                            <div class="invalid-feedback">
                                                What's Student Present Address?
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input type="date" name="dob" class="form-control" required="">
                                            <div class="invalid-feedback">
                                                What's your date of birth?
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>District</label>
                                            <select name="district" class="form-control" required="" id="filter" onchange="filterList()">
                                                <option value="" selected disabled>Select District</option>
                                                <option value="colombo">Colombo</option>
                                                <option value="gampaha">Gampaha</option>
                                                <option value="kalutara">Kalutara</option>
                                                <option value="kandy">Kandy</option>
                                                <option value="matale">Matale</option>
                                                <option value="nuwaraeliya">Nuwara Eliya</option>
                                                <option value="galle">Galle</option>
                                                <option value="matara">Matara</option>
                                                <option value="hambantota">Hambantota</option>
                                                <option value="jaffna">Jaffna</option>
                                                <option value="kilinochchi">Kilinochchi</option>
                                                <option value="mannar">Mannar</option>
                                                <option value="vavuniya">Vavuniya</option>
                                                <option value="mullaitivu">Mullaitivu</option>
                                                <option value="batticaloa">Batticaloa</option>
                                                <option value="ampara">Ampara</option>
                                                <option value="trincomalee">Trincomalee</option>
                                                <option value="kurunegala">Kurunegala</option>
                                                <option value="puttalam">Puttalam</option>
                                                <option value="anuradhapura">Anuradhapura</option>
                                                <option value="polonnaruwa">Polonnaruwa</option>
                                                <option value="badulla">Badulla</option>
                                                <option value="monaragala">Monaragala</option>
                                                <option value="ratnapura">Ratnapura</option>
                                                <option value="kegalle">Kegalle</option>
                                            </select>

                                            <div class="invalid-feedback">
                                                What's your District?
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="photo" class="form-control" required="">
                                            <div class="invalid-feedback">
                                                Choose a photo file
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-footer text-right">
                                        <input type="submit" value="Save" name="save" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>


                    </section>
                </div>
            </div>

            @include('theme')
        </div>
    </div>

    @include('fooder')

    <script src="public/adminpanel/js/app.min.js"></script>
    <script src="public/adminpanel/js/scripts.js"></script>
    <script src="public/adminpanel/js/custom.js"></script>
</body>

</html>