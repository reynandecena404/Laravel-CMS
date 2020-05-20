<!-- Trash Post Modal -->
<div class="modal fade" id="trashModal" tabindex="-1" role="dialog" aria-labelledby="trashModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" method="POST" id="trashPostForm">

            @csrf

            @method('DELETE')
            
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="trashModalLabel">Trash Post</h5>
                </div>
                <div class="modal-body">
                    Are you sure you want to move this Post in Trash? You can still reactivate this Post.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">No, Go Back</button>
                    <button type="submit" class="btn btn-danger btn-sm">Yes, Trash</button>
                </div>
            </div>
        </form>        
    </div>
</div>


<!-- Delete Permanently Modal -->
<div class="modal fade" id="deletePostModal" tabindex="-1" role="dialog" aria-labelledby="deletePostModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" method="POST" id="deletePostForm">

            @csrf

            @method('DELETE')
            
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deletePostModalLabel">Delete Post Permanently</h5>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this Post permanently?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">No, Go Back</button>
                    <button type="submit" class="btn btn-danger btn-sm">Yes, Delete</button>
                </div>
            </div>
        </form>        
    </div>
</div>