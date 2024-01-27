@extends("front.master")
@section('body')
<section class="py-5">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Joint event</h4>
                </div>
                <div class="card-body">
                    <form action="#" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="" class="form-label col-md-2">Name</label>
                        <div class="col-md-8">
                            <input type="text" class="col-md-8 form-control" name="name">
                        </div>
                        <label for="" class="form-label">Phone</label>
                        <div class="col-md-8">
                            <input type="text" class="col-md-8 form-control" name="phone">
                        </div>
                        <label for="" class="form-label col-md-2">Email</label>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection