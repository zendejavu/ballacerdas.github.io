<div class="section-inner custom-page-content">
    <div class="section-title-block second-style">
        <h2 class="section-title">Management</h2>
        <h5 class="section-description">Our Member Teams</h5>
    </div>

    <div class="section-content">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                @foreach ($management as $m)                    
                <!-- Management Content -->
                <div class="row d-inline-flex" style="position: relative; ">
                    <div class="card bg-dark m-3" style="width: 18rem;">
                        <img src="images/management/{{ $m['image'] }}" class="card-img-top h-auto" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">{{ $m['name'] }}</h3>
                            <span>{{ $m['position'] }}</span>
                            {{-- <span style="display: flex; text-align: left; flex-direction: column;">Client</span>
                            <span style="display: flex; text-align: right; flex-direction: column;">Year</span>
                            
                            <span style="display: flex; text-align: left; flex-direction: column;">Bapenda Sulsel</span>
                            <span style="display: flex; text-align: right; flex-direction: column;">2020</span> --}}
                        </div>
                    </div>
                </div>
                <!-- /Management Content -->
                @endforeach
            </div>
        </div>
    </div>
</div>
