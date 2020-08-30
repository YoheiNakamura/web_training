<?php
$userId = 99999;

	// ファイルのアップロード
	if( !empty($_FILES['icon_file']['tmp_name']) ) {
    $iconPath = "img/";
		$upload_res = move_uploaded_file( $_FILES['icon_file']['tmp_name'], $iconPath.$_FILES['icon_file']['name']);
		if( $upload_res !== true ) {
			$error[] = 'ファイルのアップロードに失敗しました。';
		} else {
			$clean['icon_file'] = $_FILES['icon_file']['name'];
		}
  }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Tablesorter Demo</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.0/js/jquery.tablesorter.min.js"></script>
</head>
<body>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#icon-modal">
        modal
      </button>
      <div class="modal fade" id="icon-modal" tabindex="-1"
            role="dialog" aria-labelledby="label1" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="text-align: center;">
            <div class="modal-header">
              <h5 class="modal-title" id="label1">アイコンを変更する</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p>現在のアイコン</p>
              <img src="img/icon_<?php echo $userId;?>.png" style="width: 10vw; height: 10vw; object-fit:contain;  border-radius: 50%; border: 1px solid gray;">
              <p>変更する</p>
              <form method="post" enctype="multipart/form-data">
                <input type="file" name="icon">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="change-icon">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>