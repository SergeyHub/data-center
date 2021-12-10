<div class="veeam">
    <div class="content">
        <h2>{{__('content.veeam.title')}}</h2>
        <div class="block-content">
            @if(Lang::has('content.veeam.slides.teaching_backup.caption'))
                <div>
                    <div class="item">
                        <div>
                            <div class="center">
                                <img src="/images/slide_veaam1.png"/>
                            </div>
                            <div class="caption">
                                {{__('content.veeam.slides.teaching_backup.caption')}}
                            </div>
                        </div>
                        <div class="arrow">
                            <img src="/images/slide_veeam_.png"/>
                        </div>
                        <div class="description">
                            <div><b>{{__('content.veeam.problem')}}:</b></div>
                            <div>
                                {{__('content.veeam.slides.teaching_backup.problem')}}
                            </div>
                            <div><b>{{__('content.veeam.solutions')}}:</b></div>
                            <div>
                                {{__('content.veeam.slides.teaching_backup.solution')}}
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if(Lang::has('content.veeam.slides.replication_recovery_0.caption'))
                <div>
                <div class="item">
                    <div>
                        <div class="center">
                            <img src="/images/slide_veaam2.png"/>
                        </div>
                        <div class="caption">
                            {{__('content.veeam.slides.replication_recovery_0.caption')}}
                        </div>
                    </div>
                    <div class="arrow">
                        <img src="/images/slide_veeam_.png"/>
                    </div>
                    <div class="description">
                        <div><b>{{__('content.veeam.problem')}}:</b></div>
                        <div>
                            {{__('content.veeam.slides.replication_recovery_0.problem')}}
                        </div>
                        <div><b>{{__('content.veeam.solutions')}}:</b></div>
                        <div>
                            {{__('content.veeam.slides.replication_recovery_0.solution')}}
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(Lang::has('content.veeam.slides.replication_recovery_1.caption'))
                <div>
                <div class="item">
                    <div>
                        <div class="center">
                            <img src="/images/slide_veaam3.png"/>
                        </div>
                        <div class="caption">
                            {{__('content.veeam.slides.replication_recovery_1.caption')}}
                        </div>
                    </div>
                    <div class="arrow">
                        <img src="/images/slide_veeam_.png"/>
                    </div>
                    <div class="description">
                        <div><b>{{__('content.veeam.problem')}}:</b></div>
                        <div>
                            {{__('content.veeam.slides.replication_recovery_1.problem')}}
                        </div>
                        <div><b>{{__('content.veeam.solutions')}}:</b></div>
                        <div>
                            {{__('content.veeam.slides.replication_recovery_1.solution')}}
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
