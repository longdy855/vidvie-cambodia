@extends('Admin.common.layout')

@section('content')
    
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('Admin.common.section_header')

    <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
              
              {!! Form::model($group,['method' => 'PATCH','class'=>'form-horizontal','route'=>['admin.user_mgr.group_user.update',$group->id]]) !!}
              	<div class="with-border box-header">
	               <h3 class="box-title">{{$view_title}} View</h3>
	               <div class="pull-right">
		               <span>
			               
			               <a class="btn btn-default" href ="{{url('admin/user_mgr/group_user')}}">
				               	<i class="fa fa-wa fa-reply"></i> Back to List
			               </a> 
		               </span>
	               	</div>
	              </div><!-- /.box-header -->
	              <!-- form start -->
	              
	               @include('Admin.common.error_input')
                <div class="box-body">
                  	
                  	
                    <div class="form-group">
                      <label  class="col-sm-4 control-label">Group name</label>
                      <div class="col-sm-4">
                        	{!! Form::text('name',null,['class'=>'form-control view_profile','placeholder'=>'username']) !!}
                      </div>
                    </div>
                    
                    
                    
                    <div class="form-group">
                      <label  class="col-sm-4 control-label">Create By</label>
                      <div class="col-sm-4">
                        {!! Form::select('create_by_id',[null => ''] +$user,null,['class'=>'form-control view_profile']) !!}
                      </div>
                    </div>
                    {!! Form::hidden('status',$group->status,['class'=>'form-control']) !!}
                    
                    <div class="form-group">
                      <label  class="col-sm-4 control-label">Remark </label>
                      <div class="col-sm-4">
                        	{!! Form::textarea('remark',null,['class'=>'form-control view_profile','placeholder'=>'Remark']) !!}
                      </div>
                    </div>
                    
                </div><!-- /.box-body -->
                
              {!! Form::close() !!}
            </form>
            </div><!-- /.box -->
          
          </div>
        </div><!-- /.row -->
      </section><!-- /.content -->
  </div><!-- /.content-wrapper -->
  
  
  
@endsection