@extends('dashboard.master1')
@section('title', 'Sections')
@section('big_title', 'Sections Page')
@section('main_page', 'Sections')
@section('sub_page','Create')


@section('content')
 {{-- لا نحتاج السيشن ولا الايرور عند استخدام طرسقة الجافاسكربت --}}
@include('errors.errors')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Create Section</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form id="create-form" method="POST" action="{{route('sections.store')}}">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="name">Section Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="Enter Section Name" >
          </div>

          </div>

          <div class="card-footer">
            <button type="submit"   class="btn btn-primary">Add</button>
          </div>
        </div>
        <!-- /.card-body -->
      </form>
    </div>
    <!-- /.card -->

  </div>


@endsection



@section('scripts')

@endsection

