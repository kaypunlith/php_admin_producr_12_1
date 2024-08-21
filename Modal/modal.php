
<!-- Modal -->
<div class="modal fade" id="del_pro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Are you want to Dlete?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
       <form action="controller/distroy.php" method="post">

        <div class="modal-body">
            <input type="text" name="del_product" id="del_prodcut">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
            <button type="submit" class="btn btn-success">Yes</button>
        </div>
       </form>
    </div>
  </div>
</div>