@extends('admin.template.layout')

@section('title')
  Dashboard
@stop

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="tab-content"> 
              <div class="box-body table-responsive">
                <table id="users" class="table table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Role</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach ($users as $key => $user)
                      <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>
                          <span class="label label-{{ $user->label() }}">
                            {{ ucfirst($user->role) }}
                          </span>
                        </td>
                        <td>
                          <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning btn-sm">
                            <i class="fa fa-edit"></i> Edit
                          </a> 

                          <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" 
                              style="display: inline;">

                              {{ csrf_field() }} 
                              {{ method_field('DELETE') }}
                                                      
                              <button type="submit" class="btn btn-danger btn-sm" id="delete-btn" 
                                onclick="return confirm('Are You Sure');">
                                <i class="fa fa-eraser"></i> Delete 
                              </button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div> 
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@stop

@section('scripts')

@stop