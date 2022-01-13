<div id="brand" class="modal">
    <form action="#" method="POST">
        @csrf
    <div class="modal-content">
        <h4>Add Brand</h4>
        <form>
            <div class="form-body">
                <div class="divider"></div>
                <div class="card-content">

                    <div class="row">
                        <div class="col s12 m6 l6">
                            <div class="input-field">
                                <input id="f-name" type="text">
                                <label for="f-name">Brand Name</label>
                            </div>
                        </div>
                        <div class="col s12">
                            <div class="file-field input-field">
                                <div class="btn cyan">
                                    <span>File</span>
                                    <input type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>
                        </div>

                    </div>
                    
                </div>

            </div>

    </div>
    <div class="modal-footer">
      <button class="btn waves-effect waves-light cyan" type="submit">Save
      </button>
      <button type="close" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
    </div>
</form>
</div>
