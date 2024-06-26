@extends('designer.layouts.dashboard')
@section('title', 'Add Project')

@section('content')
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12 col-lg-6">
        <div class="card">
          <div class="card-body p-3">
            <h5>Add Project</h5>
            <hr>
            @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{Session::get('success')}}
            </div>
            @endif
            <form method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="project_name" class="form-control-label">Project Name</label>
                    <input type="text" name="project_name" class="form-control" id="project_name" required>
                </div>

                <div class="form-group">
                    <label for="project_location" class="form-control-label">Project Location</label>
                    <input type="text" name="project_location" class="form-control" id="project_location" required>
                </div>

                <div class="form-group">
                    <label for="project_grade" class="form-control-label">Project Grade (stars)</label>
                    <select name="project_grade" class="form-control" id="project_grade" required>
                        <option value="">Select Grade</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="total_budget" class="form-control-label">Total Budget</label>
                    <input type="number" name="total_budget" class="form-control" id="total_budget" required>
                </div>

                <div class="form-group">
                    <label for="description" class="form-control-label">Description</label>
                    <textarea name="description" class="form-control" id="description" rows="4" required></textarea>
                </div>

                <div class="form-group mb-2">
                    <label>Upload Images</label>
                    <input class="form-control" type="file" name="attachments[]" id="attachments" multiple>
                    @error('attachments')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Add</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
