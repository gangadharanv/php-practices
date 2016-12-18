<html>
<head>
	<title>File-upload-form.php</title>
	<link rel="stylesheet" href="styles.css" />

	<script src="jquery.min.js"></script>
</head>
<body>
	<div class="main">
		<h1>File Upload Using Ajax</h1><br/>
		<hr>
		<!-- <form id="uploadimage" action="upload-process.php" method="post" enctype="multipart/form-data"> -->
		<form id="uploadimage" action="" method="post" enctype="multipart/form-data">
			<!-- <div id="image_preview"><img id="previewing" src="12.jpg" /></div> -->
			<!-- <hr id="line"> -->
			<div id="selectImage">
				<label>Select Your Image</label><br/>
				<input type="file" name="image" id="file" required />
				<input type="submit" name="sb" value="Upload" class="submit" />
			</div>
		</form>
	</div>
	<div id="message-box"></div>

	<script>
		$(document).ready(function () {
			$('form').submit(function () {
				// alert("sumited file");
				// let a = $('#file')
				// console.log(a)
				let formData = new FormData();
				formData.append('image', $('#file')[0].files[0]);
				$.ajax({
					type: "POST",
					url: 'upload-process.php',
					data: formData,
					processData: false,
                    contentType: false,
					success: function (data) {
						console.log(data)
						$('#message-box')[0].innerHTML = data;
						return false;
					}
				});

				return false;
			})
		});
	</script>
</body>
</html>