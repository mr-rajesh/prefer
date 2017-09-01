@extends ('backend.layouts.app')

@section ('title', 'Category Management')

@section('after-styles')
    {{ Html::style("https://cdn.datatables.net/v/bs/dt-1.10.15/datatables.min.css") }}
@endsection

@section('page-header')
    <h1>
        Category Management
        
    </h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Category</h3>

            <div class="box-tools pull-right">
                <div class="pull-right mb-10 hidden-sm hidden-xs">
    {{ link_to_route('admin.access.category.index', "ALL Category", [], ['class' => 'btn btn-primary btn-xs']) }}
    {{ link_to_route('admin.access.category.create', "Create Category", [], ['class' => 'btn btn-success btn-xs']) }}
</div><!--pull right-->

<div class="pull-right mb-10 hidden-lg hidden-md">
    <div class="btn-group">
        <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            {{ trans('menus.backend.access.users.main') }} <span class="caret"></span>
        </button>

        <ul class="dropdown-menu" role="menu">
            <li>{{ link_to_route('admin.access.category.index', trans('menus.backend.access.users.all')) }}</li>
            <li>{{ link_to_route('admin.access.category.create', "Create Category") }}</li>

            <li class="divider"></li>            
        </ul>
    </div><!--btn group-->
</div><!--pull right-->

<div class="clearfix"></div>
            </div><!--box-tools pull-right-->
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="table-responsive">
                <table id="users-table" class="table table-condensed table-hover">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Parent</th>                        
                    </tr>
                    </thead>
                    <tbody>
                    	@for ($i = 0; $i < count($category_detail); $i++)
						<tr class="his-email-strip">
							<td>{{$category_detail[$i]['name']}}</td>
							<td>{{$category_detail[$i]['parent']}}  </td>						
							<td><a href="{{ route('admin.access.category.edit',$category_detail[$i]['_id'] ) }}">edit</a>  </td>
							
						</tr>
					@endfor
                    </tbody>
                </table>
            </div><!--table-responsive-->
        </div><!-- /.box-body -->
    </div><!--box-->

    
@endsection

@section('after-scripts')
    {{ Html::script("https://cdn.datatables.net/v/bs/dt-1.10.15/datatables.min.js") }}
    {{ Html::script("js/backend/plugin/datatables/dataTables-extend.js") }}

    <script>
    
        $(function () {

           $('#users-table').DataTable({"order": [[ 1, "asc" ]]});
        });
    </script>
@endsection
