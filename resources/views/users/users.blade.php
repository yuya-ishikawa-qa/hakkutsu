<h2 class="mt-5 mb-5">users</h2>

<div class="movies row mt-5 text-center">

    @foreach ($users as $key => $user)

        @php
    
            $store=$user->stores->last();
        
        @endphp
    
        @if($loop->iteration % 3 == 1 && $loop->iteration != 1)
    
            </div>
           
            <div class="row text-center mt-3">
        
        @endif
    
            <div class="col-lg-4 mb-5">

                <div class="movie text-left d-inline-block">

                    ＠{{ $user->name }}

                    <div>
                        @if($store)
                            <iframe width="290" height="163.125" src="{{ 'https://www.youtube.com/embed/'.$movie->url }}?controls=1&loop=1&playlist={{ $movie->url }}" frameborder="0"></iframe>
                        @else
                            <iframe width="290" height="163.125" src="https://www.youtube.com/embed/" frameborder="0"></iframe>
                        @endif
                    </div>
                    
                    <p>
                        @if(isset($store->store_name))
                               {{ $store->store_name }}
                        @endif
                    </p>

                </div>
                
            </div>

    @endforeach

</div>

{{ $users->links('pagination::bootstrap-4') }}