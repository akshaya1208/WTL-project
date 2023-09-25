@include('admin.admin-header')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row ">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ $data->date }}</h4>
                        <div class="table-responsive">
                            {{ $data->content }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.admin-footer')
