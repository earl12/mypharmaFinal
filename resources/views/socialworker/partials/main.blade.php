<div class="page-wrapper">
    <div class="container-fluid">

        <!-- Title -->
        <div class="row heading-bg  bg-blue">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-light">Welcome, {{Auth::user()->name}}</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#"><span>Social Worker</span></a></li>
                    <li class="active"><span>Dashboard</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->
        <!-- Row -->
        <div class="row">
            <!-- Bordered Table -->
            <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                @if(Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message')}}</div>
                @endif
                <div class="col-md-4">
                    <!-- sample modal content -->
                    
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- Button trigger modal -->
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h6 class="panel-title txt-dark">List of Senior Citizens</h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table id="datable_1" class="table table-hover display  pb-30" >
                                        <thead>
                                            <tr>
                                                <th>SCN</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Gender</th>
                                                <th>Telephone #</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        @foreach($seniorinfos as $seniorinfo)
                                        <tbody>
                                            <tr>
                                                <td>{{$seniorinfo->scn}}</td>
                                                <td>{{$seniorinfo->first_name}}</td>
                                                <td>{{$seniorinfo->last_name}}</td>
                                                <td>{{$seniorinfo->gender}}</td>
                                                <td>{{$seniorinfo->telephone}}</td>
                                                <td>{!!Form::open(array('route'=>['deleteElderlyProfile', $seniorinfo->id], 'method'=>'DELETE'))!!}
                                                   {{ link_to_route('getSeniorProfile', 'Edit', [$seniorinfo->id] , ['class' => 'btn btn-primary'])}}
                                                   |
                                                   
                                                   {!!Form::button('Delete', ['class'=>'btn btn-danger', 'type'=>'submit'])!!}
                                                   {!!Form::close()!!}
                                               </td>
                                           </tr>
                                       </tbody>
                                       @endforeach
                                   </table>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>  
           </div>
       </div>
   </div>
</div>	

<!-- /Row -->

<script type="text/javascript">
  function form_submit() {
    document.getElementById("search_form").submit();
}    
</script>