 @extends('layouts.app')
    @section('content')

        <div class="container">
              <div class="row">
                    <div class="col-md-8">
                      <h1>community</h1>
                      <ul class="list-group">
                          @if(count($links))

                              @foreach ($links as $link)
                                  <li class="list-group-item">
                                      <span class="label label-default" style="background: blue;margin-right: 1em"ba>PHP</span>

                                      <a href="{{ $link->link }}" target="_blank">
                                          {{ $link->title }}
                                      </a>

                                      <small>
                                          Contributed By: <a href="#"> {{ $link->user_id }}</a>
                                          {{ $link->updated_at->diffForHumans() }}
                                      </small>
                                  </li>

                              @endforeach
                              @else
                                 <li class="$links-$link">
                                     No contribution yet.
                                 </li>
                              @endif

                      </ul>
                    </div>


                  @include('community.add-link')


                </div>
          </div>

    @stop

