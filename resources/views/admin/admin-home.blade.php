@include('admin.admin-header')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{ $datainfo }}</h3>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon">
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">InfoBytes</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{ $datablog }}</h3>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon ">

                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Blog</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="row ">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Blog</h4>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th># </th>
                      <th>Date</th>
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
                      <td> {{ $value->date }} </td>
                      <td><div class="badge badge-outline-success"><a href="{{ url('view-blog/'.$value->blog_id) }}">View</a></div></td>
                      <td><div class="badge badge-outline-success"><a href="{{ url('viewedit-blog/'.$value->blog_id) }}">Edit</a></div></td>
                      <td>
                        <div class="badge badge-outline-warning"><a href="{{ url('delete-blog/'.$value->blog_id) }}">Delete</a></div>
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
    </div>
@include('admin.admin-footer')