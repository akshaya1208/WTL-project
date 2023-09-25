@include('admin.admin-header')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Blog</h4>
              <form class="forms-sample" method="POST" action="{{ route('admin-blog') }}">
                @csrf
                <div class="form-group">
                  <label for="exampleInputName1">Date</label>
                  <input type="date" class="form-control" id="exampleInputName1" name="date" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">Textarea</label>
                  <textarea class="form-control" id="exampleTextarea1" name="content" rows="4"></textarea>
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
                <h4 class="card-title">Order Status</h4>
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
@include('admin.admin-footer')