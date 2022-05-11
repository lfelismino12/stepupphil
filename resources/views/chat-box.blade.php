
<div id="chat_box" class="chat_box pull-right" style="display: none">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center p-3 bg-info text-white border-bottom-0"
                    style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                        <h5 class="mb-0"> Chat with <i class="chat-user"></i> </h5>
                        <span class="glyphicon glyphicon-remove pull-right close-chat"></span>
                    </div>
                    <div class="panel-body chat-area">

                    </div>
                    <div class="panel-footer">
                        <div class="input-group form-controls">
                            <textarea class="form-control input-sm chat_input" placeholder="Write your message here..."></textarea>
                            <span class="input-group-btn">
                                    <button class="btn btn-primary btn-sm btn-chat" type="button" data-to-user="" disabled>
                                        <i class="glyphicon glyphicon-send"></i>
                                        Send</button>
                                </span>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <input type="hidden" id="to_user_id" value="" />
</div>