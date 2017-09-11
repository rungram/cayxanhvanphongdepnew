//VIET HAM DUNG CHUNG JS -> 13/12/2016

/*tieude tiêu đề alertbox
 * noidung nội dung alertbox(đưa vào html lun)
 */
function popupalertbox(tieude,noidung){
	$('#myModal').remove();
	var klon = '<div class="modal fade" id="myModal" role="dialog">\
	    <div class="modal-dialog">\
    <!-- Modal content-->\
    <div class="modal-content">\
      <div class="modal-header">\
        <button type="button" class="close" data-dismiss="modal">&times;</button>\
        <h4 class="modal-title" style="color:red;"><strong>'+tieude+'</strong></h4>\
      </div>\
      <div class="modal-body">\
        <p>'+noidung+'</p>\
      </div>\
      <div class="modal-footer">\
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>\
      </div>\
    </div>\
  </div>\
</div>'; 
	$('body').append(klon);
   $("#myModal").modal("show");
}

