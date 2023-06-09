<div id="EditProfileModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Profile</h5>
                <button type="button" aria-label="Close" class="close outline-none" data-dismiss="modal">×</button>
            </div>
        
            {!! Form::open(array('route'=>'usuarios.editProfileForm', 'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                {!! Form::text('name',null,array('id'=>'pfName','class'=>'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group col-sm-6 d-flex">
                            <div class="col-sm-4 col-md-6 pl-0 form-group">
                                <label>Profile Image:</label>
                                <br>
                                <label
                                        class="image__file-upload btn btn-primary text-white"
                                        tabindex="2"> Choose
                                    <input type="file" name="photo" id="pfImage" class="d-none">
                                </label>
                            </div>
                            <div class="col-sm-3 preview-image-video-container float-right mt-1">
                                <img id='edit_preview_photo'
                                     class="img-thumbnail user-img user-profile-img profilePicture"
                                     src="{{asset(Auth::user()->fuente)}}"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label>Email:</label><span class="required">*</span>
                            {!! Form::text('email',null,array('id'=>'pfEmail','class'=>'form-control','required','tabindex'=>'1','readonly'=>'readonly')) !!}
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button type="button" class="btn btn-light ml-1 edit-cancel-margin margin-left-5" data-dismiss="modal">Cancel</button>

                    </div>
                </div>
            {!! Form::close() !!}

        </div>
    </div>
</div>


