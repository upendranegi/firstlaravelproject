@include('admin.include.header')


<!--  Header End -->
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">

                <div class="card">
                    <div class="card-body">
                        <center>
                            <h1 class="my-3">
                                <b> Product Details </b>
                            </h1>
                        </center>
                        <form class="d-flex flex-wrap py-2" action="{{ route('productdata') }}" method="post" enctype="multipart/form-data">
                            <div class="col-12 d-flex flex-wrap my-3">
                                <div class="col-12 ">
                                    <center>
                                        <h3 class="my-3">
                                            <b> Add Images </b>
                                        </h3>
                                    </center>
                                </div>
                                @csrf
                                <div class="col-md-3 px-2 ">
                                    <input type="file" name="img1" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="col-md-3 px-2">
                                    <input type="file" name="img2" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="col-md-3 px-2">
                                    <input type="file" name="img3" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="col-md-3 ">
                                    <input type="file" name="img4" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>

                            </div>
                            <div class="my-3 col-md-6 px-2">
                                <label for="exampleInputEmail1" class="form-label">Prodcut Name</label>
                                <input type="text" name="productname" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">

                            </div>
                            <div class="my-3 col-md-6 px-2">
                                <label for="exampleInputPassword1" class="form-label">Category</label>
                                <select  class="form-control" name="categoryid" id="exampleInputPassword1">

                                    @foreach ($catdata as $item=>$cat)
                                    <option value="{{$cat->category_id}}">{{$cat->category_name}}</option>
                                    @endforeach
                                   
                                   
                                  </select>
                               
                            </div>
                            <div class="my-3 col-md-6 px-2">
                                <label for="exampleInputPassword1" class="form-label">Quntity</label>
                                <input type="number" name="Quntity" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="my-3 col-12 px-2">
                                <label for="exampleInputPassword1" class="form-label">Product Description</label>
                                <textarea type="text" name="Description" class="form-control" id="exampleInputPassword1">
                      </textarea>
                            </div>





                            <div class="col-12">
                                <center>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </center>

                            </div>

                        </form>
                    </div>
                </div>
                {{-- <h5 class="card-title fw-semibold mb-4">Disabled forms</h5> --}}
                {{-- <div class="card mb-0">
                <div class="card-body">
                  <form>
                    <fieldset disabled>
                      <legend>Disabled fieldset example</legend>
                      <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Disabled input</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                      </div>
                      <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Disabled select menu</label>
                        <select id="disabledSelect" class="form-select">
                          <option>Disabled select</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                          <label class="form-check-label" for="disabledFieldsetCheck">
                            Can't check this
                          </label>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </fieldset>
                  </form>
                </div>
              </div> --}}
            </div>
        </div>
    </div>
</div>
</div>
</div>
@include('admin.include.footer')
