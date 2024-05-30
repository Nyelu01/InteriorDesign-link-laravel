@extends('vendor.layouts.dashboard')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header">
                <h2 class="fw-bold text-secondary">Edit profile</h2>
            </div>
            <div class="card-body p-5">
                <div class="card-body p-5">
                    <form action="{{ route('designer.register') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="mb-3">
                            <input type="text" name="name" id="name"
                                class="form-control rounded-0 @error('name') is-invalid @enderror"
                                placeholder="Full Name">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" id="email"
                                class="form-control rounded-0 @error('email') is-invalid @enderror"
                                placeholder="E-mail">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" name="phone" id="phone"
                                class="form-control rounded-0 @error('phone') is-invalid @enderror"
                                placeholder="Phone Number">
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" id="password"
                                class="form-control rounded-0 @error('password') is-invalid @enderror"
                                placeholder="Password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="password" name="cpassword" id="cpassword"
                                class="form-control rounded-0 @error('cpassword') is-invalid @enderror"
                                placeholder="Confirm Password">
                            @error('cpassword')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <select name="location" id="location"
                                class="form-select rounded-0 @error('location') is-invalid @enderror">
                                <option value="" selected disabled>Select office location</option>
                                <option value="Arusha">Arusha</option>
                                <option value="Dar es Salaam">Dar es Salaam</option>
                                <option value="Dodoma">Dodoma</option>
                                <option value="Geita">Geita</option>
                                <option value="Iringa">Iringa</option>
                                <option value="Kagera">Kagera</option>
                                <option value="Katavi">Katavi</option>
                                <option value="Kigoma">Kigoma</option>
                                <option value="Kilimanjaro">Kilimanjaro</option>
                                <option value="Lindi">Lindi</option>
                                <option value="Manyara">Manyara</option>
                                <option value="Mara">Mara</option>
                                <option value="Mbeya">Mbeya</option>
                                <option value="Morogoro">Morogoro</option>
                                <option value="Mtwara">Mtwara</option>
                                <option value="Mwanza">Mwanza</option>
                                <option value="Njombe">Njombe</option>
                                <option value="Pwani">Pwani</option>
                                <option value="Rukwa">Rukwa</option>
                                <option value="Ruvuma">Ruvuma</option>
                                <option value="Shinyanga">Shinyanga</option>
                                <option value="Simiyu">Simiyu</option>
                                <option value="Singida">Singida</option>
                                <option value="Tabora">Tabora</option>
                                <option value="Tanga">Tanga</option>
                            </select>
                            @error('location')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <select name="service_type" id="service_type"
                                class="form-select rounded-0 @error('service_type') is-invalid @enderror">
                                <option value="" selected disabled>Select Service Type</option>
                                <option value="Interior Design">Interior furnishing</option>
                                <option value="Architecture">Interior Decoration Design</option>
                                <option value="Landscape Design">All</option>
                            </select>
                            @error('service_type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <select name="project_type" id="project_type" class="form-select rounded-0">
                                <option value="" selected disabled>Select Project Type</option>
                                <option value="Residential">Residential</option>
                                <option value="Workplace">Workplace</option>
                                <option value="Commercial">Commercial</option>
                                <option value="Industrial">Industrial</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div id="other_project_type_input" style="display: none;" class="mb-3">
                            <label for="other_project_type" class="form-label">Other Project Type:</label>
                            <input type="text" id="other_project_type" name="project_type" class="form-control rounded-0">
                        </div>

                        <script>
                            document.getElementById('project_type').addEventListener('change', function() {
                                var otherInput = document.getElementById('other_project_type_input');
                                if (this.value === 'Other') {
                                    otherInput.style.display = 'block';
                                } else {
                                    otherInput.style.display = 'none';
                                }
                            });
                        </script>

                        <div class="mb-3">
                            <label for="business-licence" class="form-label">Upload certificate</label>
                            <input type="file" name="certificate" id="certificate"
                                class="form-control rounded-0 @error('certificate') is-invalid @enderror">
                            @error('certificate')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3 d-grid">
                            <input type="submit" value="Register" class="btn btn-secondary rounded-0">
                        </div>
                        <div class="text-center text-secondary">
                            <div>Already have an account? <a href="{{route('auth.login')}}" class="text-decoration-none">Login
                                    Here</a>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
    <!-- /.content -->
@endsection