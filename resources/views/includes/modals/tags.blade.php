<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" method="POST" id="deleteTagForm">

            @csrf

            @method('DELETE')

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Tag</h5>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this tag?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">No, Go Back</button>
                    <button type="submit" class="btn btn-danger btn-sm">Yes, Delete</button>
                </div>
            </div>
        </form>        
    </div>
</div>