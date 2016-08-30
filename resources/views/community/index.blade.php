 @extends('layouts.app')
    @section('content')

        <div class="container">
              <div class="row">
                    <div class="col-md-8">
                      <h1>
                          <a href="/community">community</a>

                          @if( $channel->exists)
                              <span>&mdash; {{ $channel->title }}</span>

                          @endif
                      </h1>

                        @include('community.list')

                    </div>


                  @include('community.add-link')


                </div>
          </div>

    @stop

