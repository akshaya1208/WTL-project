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
                    <form class="forms-sample" action="{{ route('info') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Title</label>
                            <input type="text" class="form-control" name="title" id="exampleInputName1"
                                placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label>File upload</label>
                            <div class="input-group col-xs-12">
                                <div class="input-group mb-3">
                                    <input type="file" name="file" class="form-control" id="inputGroupFile01">
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
        <div class="row ">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Details</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th># </th>
                          <th>Title</th>
                          <th>View</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $i=1;
                        ?>
                        @foreach ($data as $value)
                        <tr>
                          <td>{{ $i }}</td>
                          <td> {{ $value->title }}</td>
                          <td><div class="badge badge-outline-success"><a href="{{ url('view-infobytes/'.$value->info_id) }}">View</a></div></td>
                          <td><div class="badge badge-outline-success"><a href="{{ url('viewedit-infobytes/' . $value->info_id) }}">Edit</a></div></td>
                          <td>
                            <div class="badge badge-outline-warning"><a href="{{ url('delete-infobytes/'.$value->info_id) }}">Delete</a></div>
                          </td>
                        </tr>  
                        <?php
                        $i++;
                        ?>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
@include('admin.admin-footer')
