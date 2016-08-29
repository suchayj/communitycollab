 @extends('layouts.app')
    @section('content')

        <div class="container">
              <div class="row">
                    <div class="col-md-8">
                      <h1>community</h1>

                        @include('community.list')

                    </div>


                  @include('community.add-link')


                </div>
          </div>

    @stop

