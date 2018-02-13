 <div class="container">
        <p><a href="{{ url('/socialworker/register3') }}">Shop</a> / {{ $medicine->name }}</p>
        <h1>{{ $medicine->name }}</h1>

        <hr>

        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('img/' . $medicine->image) }}" alt="medicine" class="img-responsive">
            </div>

            <div class="col-md-8">
                <h3>${{ $medicine->price }}</h3>
                <form action="{{route('addMedicine')}}" method="POST" class="side-by-side">
                    {!! csrf_field() !!}
                    <input type="hidden" name="id" value="{{ $medicine->id }}">
                    <input type="hidden" name="name" value="{{ $medicine->name }}">
                    <input type="hidden" name="price" value="{{ $medicine->price }}">
                    <input type="submit" class="btn btn-success btn-lg" value="Add to Cart">
                </form>


                <br><br>

                {{ $medicine->description }}
            </div> <!-- end col-md-8 -->
        </div> <!-- end row -->

        <div class="spacer"></div>


        <div class="spacer"></div>


    </div>