<div id="category" class="modal">
    <form action="{{ route('category-store') }}" method="POST">
        @csrf
    <div class="modal-content">
        <h4>Add Category</h4>
        <div class="row">
            <div class="input-field col s12">
                <input id="email" type="text" name="category_name" class="validate" data-validation="required">
                <label for="category_name">Category Name</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="modal-action modal-close waves-effect waves-green ">Agree</button>
    </div>
</form>
</div>