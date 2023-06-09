<div id="changePasswordModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Change Password</h5>
                <button type="button" aria-label="Close" class="close outline-none" data-dismiss="modal">×</button>
            </div>

            {!! Form::open(array('route'=>'usuarios.changePasswordForm', 'method'=>'POST')) !!}
                <div class="modal-body">
                    <div class="row">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @elseif (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="form-group col-sm-12">
                            <label for="oldPasswordInput" class="form-label">Old Password</label>
                            <div class="input-group">
                                <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                                    placeholder="Old Password">
                                    @error('old_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                        </div>

                        <div class="form-group col-sm-12">
                            <label for="newPasswordInput" class="form-label">New Password</label>
                            <div class="input-group">
                                <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                    placeholder="New Password">
                                @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-sm-12">
                            <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label>
                            <div class="input-group">
                                <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
                                    placeholder="Confirm New Password">
                            </div>
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
<?php
