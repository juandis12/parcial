<div id="modalCrearRedes" class="modal fade" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bd-0">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 id="lbTitulo" class="tx-mg-b-0 tx-uppercase tx-inverse tx-bold"></h6>
            </div>
            <div class="modal-body">
                <form method="post" id="socialMedia_form">
                    <input type="hidden" name="socmed_id" id="socmed_id" />
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Icono: <span class="tx-danger">*</span></label>
                            <input class="form-control" id="socmed_icono" type="text" name="socmed_icono" required />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">URL: <span class="tx-danger">*</span></label>
                            <input class="form-control" id="socmed_url" type="text" name="socmed_url" required />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="action" value="add" class="btn btn-outline-primary tx-11 tx-uppercase pd-y-12 pd-x-2">Add</button>
                        <button type="reset" class="btn btn-outline-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" aria-label="Close">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>