@if (session('add'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {!!session('add')!!}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @elseif(session('delete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {!!session('delete')!!}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @elseif(session('update'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {!!session('update')!!}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
    @endif