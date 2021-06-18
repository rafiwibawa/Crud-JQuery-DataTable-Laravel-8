<div class="modal fade" id="modal_user" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="" autocomplete="off" id="form_user">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama<span class="text-danger">*</span></label>
                        <input type="text" name="name" parsley-trigger="change" required
                            placeholder="Nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email<span class="text-danger">*</span></label>
                        <input type="email" name="email" parsley-trigger="change" required
                            placeholder="Email" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label>Hak Akses</label>
                        <select parsley-trigger="change"  name="rule" required
                        placeholder="Hak Akses" class="form-control">
                            <option value=""></option>
                            <option value="admin">Admin</option>
                            <option value="member">Member</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light btn-loading">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
