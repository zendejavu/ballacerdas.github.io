<div class="section-inner custom-page-content">
    <div class="section-title-block second-style">
        <h2 class="section-title">Resume</h2>
        <h5 class="section-description">3 Years of Experience</h5>
    </div>

    <div class="section-content">
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <div class="col-inner bs-30">
                    <div class="block-title">
                        <h3>Work Experience</h3>
                    </div>

                    <div class="timeline timeline-second-style bs-30 clearfix">
                        @foreach ($resume_we as $we)
                        <div class="timeline-item clearfix">
                            <div class="left-part">
                                <h5 class="item-period">{{ $we['date'] }}</h5>
                                <span class="item-company">{{ $we['client'] }}</span>
                            </div>
                            <div class="divider"></div>
                            <div class="right-part">
                                <h4 class="item-title">{{ $we['title'] }}</h4>
                                <p>{{ $we['description'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="block-title">
                        <h3>Awards
                            <span></span>
                        </h3>
                    </div>


                    <div class="timeline timeline-second-style clearfix">
                        @foreach ($resume_awards as $aw)
                        <div class="timeline-item clearfix">
                            <div class="left-part">
                                <h5 class="item-period">{{ $aw['date'] }}</h5>
                                <span class="item-company">{{ $aw['client'] }}</span>
                            </div>
                            <div class="divider"></div>
                            <div class="right-part">
                                <h4 class="item-title">{{ $aw['title'] }}</h4>
                                <p>{{ $aw['description'] }}</p>
                            </div>
                        </div>                            
                        @endforeach
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="col-inner ts-30">
                    <a href="#" target="_blank" class="btn btn-primary">Download CV</a>
                </div>
            </div>
        </div>
    </div>
</div>
