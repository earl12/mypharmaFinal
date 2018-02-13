
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">with two columns</h6>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="row">
                        <div class="container">

                            @if (session()->has('success_message'))
                            <div class="alert alert-success">
                                {{ session()->get('success_message') }}
                            </div>
                            @endif

                            @if (session()->has('error_message'))
                            <div class="alert alert-danger">
                                {{ session()->get('error_message') }}
                            </div>
                            @endif

                            @foreach ($medicines->chunk(4) as $items)
                            <div class="row">
                                @foreach ($items as $medicine)
                                <div class="col-md-3">
                                    <div class="thumbnail">
                                        <div class="caption text-center">
                                            <a href="{{ route('showMedicine', [$medicine->slug]) }}"><img src="{{ asset('img/' . $medicine->image) }}" alt="medicine" class="img-responsive"></a>
                                            <a href="{{ route('showMedicine', [$medicine->slug]) }}"><h3>{{ $medicine->name }}</h3>
                                                <p>{{ $medicine->price }}</p>
                                            </a>
                                        </div> <!-- end caption -->
                                    </div> <!-- end thumbnail -->
                                </div> <!-- end col-md-3 -->
                                @endforeach
                            </div> <!-- end row -->
                            @endforeach

                        </div> 
                        <div class="col-sm-12 col-xs-12">
                            <div class="form-wrap">
                                <form action = "" method="POST" enctype="multipart/form-data">
                                   
                                    <div class="form-actions mt-10">
                                        <button type="submit" class="btn btn-success  mr-10"> Next</button>
                                        <button type="button" class="btn btn-default">Cancel</button>
                                    </div>
                                    @include('errors.list')
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
    </div>
</div>

