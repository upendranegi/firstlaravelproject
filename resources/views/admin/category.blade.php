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
                                <b> Category Details </b>
                            </h1>
                        </center>
                        <form class="d-flex flex-wrap py-2" method="post" action="{{ route('Categorydata') }}">
                            @csrf

                            <div class="my-3 col-md-6 px-2">
                                <label for="exampleInputPassword1" class="form-label">Category</label>
                                <input type="text" class="form-control" name="name" id="exampleInputPassword1">
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
