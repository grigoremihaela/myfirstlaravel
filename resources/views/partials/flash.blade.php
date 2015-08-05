@if (Session::has('flash_notification.message'))

    @if (Session::has('flash_notification.overlay'))
        @include('flash::modal', ['modalClass' => 'flash-modal', 
                                  'title' => Session::get('flash_notification.title'), 
                                  'body' => Session::('flash_notification.body') ])
    @else
        <div class="alert alert-{{ Session::get('flash_notification.level') }}"> 
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    &times;
            </button>
            {{ Session::get('flash_notification.message') }}
        </div>
    @endif
    
@endif