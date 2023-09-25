@include('admin.admin-header')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="btn-close" data-dismiss="alert">×</button>
                    {{ Session::get('success') }}
                </div>
            @elseif(Session::has('failed'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="btn-close" data-dismiss="alert">×</button>
                    {{ Session::get('failed') }}
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Upload InfoBytes</h4>
                    <form class="forms-sample" action="{{ route('update-infobytes') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $data->info_id }}">
                        <div class="form-group">
                            <label for="exampleInputName1">Title</label>
                            <input type="text" class="form-control" name="title" id="exampleInputName1" value="{{ $data->title }}"
                                placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label>File upload</label>
                            <div class="input-group col-xs-12">
                                <div class="input-group mb-3">
                                    <input type="file" name="file" class="form-control" id="inputGroupFile01" >
                                    @error('file')
                                        <div class="invalid-feedback">{{ $message }} </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-dark">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
@include('admin.admin-footer')