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

                        <ul class="nav nav-pills">
                            <li class="{{ request()->exists('popular') ? '' : 'active' }}">
                                <a href="/community">Most Recent</a>
                            </li>


                            <li class=" {{ request()->exists('popular') ? 'active' : '' }}">
                                <a href="?popular">Most Popular</a>
                            </li>

                        </ul>

                        @include('community.list')

                    </div>


                  @include('community.add-link')


                </div>
          </div>

    @stop

