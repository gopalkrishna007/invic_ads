<style>
    .btn-file {
        position: relative;
        overflow: hidden;
    }

    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }

    .note-btn {
        padding: 7px 10px !important;
    }
</style>
<div class="page-content">
    <div id="portlet-config" class="modal hide">
        <div class="modal-header"><button data-dismiss="modal" class="close" type="button"></button>
            <h3>Widget Settings</h3>
        </div>
        <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">
        <ul class="breadcrumb">
            <li>
                <p>YOU ARE HERE</p>
            </li>
            <li><a href="#" class="active">Form Elements</a> </li>
        </ul>
        <div class="page-title"> <i class="icon-custom-left"></i>
            <h3>Edit <span class="semi-bold">User</span> </h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="grid simple">
                    <div class="grid-title no-border">
                        <h4></h4>
                    </div>
                    <div class="grid-body no-border"> <br>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="col-md-3"><label class="form-label"> Name</label></div>
                                    <div class="col-md-4"><input type="text" class="form-control"></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3"><label class="form-label"> Moblile</label></div>
                                    <div class="col-md-4"><input type="text" class="form-control"></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3"><label class="form-label">Email ID</label></div>
                                    <div class="col-md-4"><input type="text" class="form-control"></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3"><label class="form-label">Referal ID</label></div>
                                    <div class="col-md-4"><input type="text" class="form-control"></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3"><label class="form-label">Profile Image (upload)</label></div>
                                    <div class="col-md-4">
                                        <div class="imageupload panel-default">
                                            <div class="file-tab"> <label class="btn btn-default btn-file">                        <span>Browse</span>                        <!-- The file is stored here. -->                        <input type="file" name="image-file">                    </label> <button type="button" class="btn btn-default">Remove</button> </div>
                                            <div class="url-tab panel-body">
                                                <div class="input-group"> <input type="text" class="form-control hasclear" placeholder="Image URL">
                                                    <div class="input-group-btn"> <button type="button" class="btn btn-default">Submit</button> </div>
                                                </div> <button type="button" class="btn btn-default">Remove</button>
                                                <!-- The URL is stored here. --><input type="hidden" name="image-url"> </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-actions">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-4"><button class="btn btn-success btn-cons" type="submit"><i class="icon-ok"></i> Submit</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="chat-window-wrapper">
    <div id="main-chat-wrapper" class="inner-content">
        <div class="chat-window-wrapper scroller scrollbar-dynamic" id="chat-users">
            <div class="chat-header">
                <div class="pull-left"><input type="text" placeholder="search"></div>
                <div class="pull-right">
                    <a href="#" class>
                        <div class="iconset top-settings-dark "></div>
                    </a>
                </div>
            </div>
            <div class="side-widget">
                <div class="side-widget-title">group chats</div>
                <div class="side-widget-content">
                    <div id="groups-list">
                        <ul class="groups">
                            <li>
                                <a href="#">
                                    <div class="status-icon green"></div>Office work</a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="status-icon green"></div>Personal vibes</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="side-widget fadeIn">
                <div class="side-widget-title">favourites</div>
                <div id="favourites-list">
                    <div class="side-widget-content">
                        <div class="user-details-wrapper active" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
                            <div class="user-profile"><img src="assets/img/profiles/d.jpg" alt data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35"></div>
                            <div class="user-details">
                                <div class="user-name">Jane Smith</div>
                                <div class="user-more">Hello you there?</div>
                            </div>
                            <div class="user-details-status-wrapper"><span class="badge badge-important">3</span></div>
                            <div class="user-details-count-wrapper">
                                <div class="status-icon green"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
                            <div class="user-profile"><img src="assets/img/profiles/c.jpg" alt data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35"></div>
                            <div class="user-details">
                                <div class="user-name">David Nester</div>
                                <div class="user-more">Busy, Do not disturb</div>
                            </div>
                            <div class="user-details-status-wrapper">
                                <div class="clearfix"></div>
                            </div>
                            <div class="user-details-count-wrapper">
                                <div class="status-icon red"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="side-widget">
                <div class="side-widget-title">more friends</div>
                <div class="side-widget-content" id="friends-list">
                    <div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
                        <div class="user-profile"><img src="assets/img/profiles/d.jpg" alt data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35"></div>
                        <div class="user-details">
                            <div class="user-name">Jane Smith</div>
                            <div class="user-more">Hello you there?</div>
                        </div>
                        <div class="user-details-status-wrapper"></div>
                        <div class="user-details-count-wrapper">
                            <div class="status-icon green"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
                        <div class="user-profile"><img src="assets/img/profiles/h.jpg" alt data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35"></div>
                        <div class="user-details">
                            <div class="user-name">David Nester</div>
                            <div class="user-more">Busy, Do not disturb</div>
                        </div>
                        <div class="user-details-status-wrapper">
                            <div class="clearfix"></div>
                        </div>
                        <div class="user-details-count-wrapper">
                            <div class="status-icon red"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
                        <div class="user-profile"><img src="assets/img/profiles/c.jpg" alt data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35"></div>
                        <div class="user-details">
                            <div class="user-name">Jane Smith</div>
                            <div class="user-more">Hello you there?</div>
                        </div>
                        <div class="user-details-status-wrapper"></div>
                        <div class="user-details-count-wrapper">
                            <div class="status-icon green"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
                        <div class="user-profile"><img src="assets/img/profiles/h.jpg" alt data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35"></div>
                        <div class="user-details">
                            <div class="user-name">David Nester</div>
                            <div class="user-more">Busy, Do not disturb</div>
                        </div>
                        <div class="user-details-status-wrapper">
                            <div class="clearfix"></div>
                        </div>
                        <div class="user-details-count-wrapper">
                            <div class="status-icon red"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="chat-window-wrapper" id="messages-wrapper" style="display:none">
            <div class="chat-header">
                <div class="pull-left"><input type="text" placeholder="search"></div>
                <div class="pull-right">
                    <a href="#" class>
                        <div class="iconset top-settings-dark "></div>
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="chat-messages-header">
                <div class="status online"></div><span class="semi-bold">Jane Smith(Typing..)</span><a href="#" class="chat-back"><i class="icon-custom-cross"></i></a></div>
            <div class="chat-messages scrollbar-dynamic clearfix">
                <div class="inner-scroll-content clearfix">
                    <div class="sent_time">Yesterday 11:25pm</div>
                    <div class="user-details-wrapper ">
                        <div class="user-profile"><img src="assets/img/profiles/d.jpg" alt data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35"></div>
                        <div class="user-details">
                            <div class="bubble">Hello, You there?</div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="sent_time off">Yesterday 11:25pm</div>
                    </div>
                    <div class="user-details-wrapper ">
                        <div class="user-profile"><img src="assets/img/profiles/d.jpg" alt data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35"></div>
                        <div class="user-details">
                            <div class="bubble">How was the meeting?</div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="sent_time off">Yesterday 11:25pm</div>
                    </div>
                    <div class="user-details-wrapper ">
                        <div class="user-profile"><img src="assets/img/profiles/d.jpg" alt data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35"></div>
                        <div class="user-details">
                            <div class="bubble">Let me know when you free</div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="sent_time off">Yesterday 11:25pm</div>
                    </div>
                    <div class="sent_time ">Today 11:25pm</div>
                    <div class="user-details-wrapper pull-right">
                        <div class="user-details">
                            <div class="bubble sender">Let me know when you free</div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="sent_time off">Sent On Tue, 2:45pm</div>
                    </div>
                </div>
            </div>
            <div class="chat-input-wrapper" style="display:none"><textarea id="chat-message-input" rows="1" placeholder="Type your message"></textarea></div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
</div>
<script>
    var $imageupload = $('.imageupload');
    $imageupload.imageupload();
</script>
<script type="text/javascript">
    $(function() {
        $('.summernote').summernote({
            height: 200
        });
        $('form').on('submit', function(e) {
            e.preventDefault();
            alert($('.summernote').summernote('code'));
            alert($('.summernote').val());
        });
    });
</script>
<script>
    Array.prototype.forEach.call(document.querySelectorAll('.sweet-2'), function(button) {
        button.onclick = function() {
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: 'btn-danger',
                confirmButtonText: 'Yes, Deactivate it!',
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function(isConfirm) {
                if (isConfirm) {
                    swal("Deactivated!", "Your imaginary file has been Deactivate!", "success");
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
        }
    });
</script>