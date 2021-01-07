<div class="modal-message modal-message--large" id="siteOut" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-content d-flex col ai-center justify-center">
        <h5 class="modal-title">{{$modal_leave->title}}</h5>
        {!! $modal_leave->content !!}
        <button type="button" class="btn orange" onclick="$.fancybox.close()">Закрыть</button>
    </div>
</div>
