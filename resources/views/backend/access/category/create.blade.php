@extends ('backend.layouts.app')

@section ('title', 'Category Create'))

@section('page-header')
    <h1>
        Category Management
        
    </h1>
@endsection

@section('content')
    {{ Form::open(['route' => 'admin.access.category.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post']) }}

        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Create Category</h3>

                <div class="box-tools pull-right">
                   <div class="pull-right mb-10 hidden-sm hidden-xs">
    {{ link_to_route('admin.access.category.index', "ALL Category", [], ['class' => 'btn btn-primary btn-xs']) }}
    
</div><!--pull right-->
                </div><!--box-tools pull-right-->
            </div><!-- /.box-header -->

            <div class="box-body">
                <div class="form-group">
                    {{ Form::label('category_name', 'Category Name', ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10">
                        {{ Form::text('category_name', null, ['class' => 'form-control', 'maxlength' => '191', 'required' => 'required', 'autofocus' => 'autofocus', 'placeholder' => trans('validation.attributes.backend.access.users.first_name')]) }}
                    </div><!--col-lg-10-->
                </div><!--form control-->

                <div class="form-group">
                    {{ Form::label('parent_name', 'Parent Category',
                     ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10">
                        
                        {{ Form::select('parent_name', $category_parent_detail, null, ['placeholder' => 'Select Parent Category','class' => 'field-select'])}}
                    </div><!--col-lg-10-->
                </div><!--form control-->           
            </div><!-- /.box-body -->
        </div><!--box-->

        <div class="box box-info">
            <div class="box-body">
                <div class="pull-left">
                    {{ link_to_route('admin.access.category.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
                </div><!--pull-left-->

                <div class="pull-right">
                    {{ Form::submit(trans('buttons.general.crud.create'), ['class' => 'btn btn-success btn-xs']) }}
                </div><!--pull-right-->

                <div class="clearfix"></div>
            </div><!-- /.box-body -->
        </div><!--box-->

    {{ Form::close() }}
@endsection

@section('after-scripts')
    {{ Html::script('js/backend/access/users/script.js') }}
@endsection
