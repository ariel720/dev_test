

<div class="content" id="content">

	
	<form class="form-horizontal" method="post" id="submitForm" action="/index.php/member/ajax_create">
		
			
	 	<div class="panel panel-default">
	 		<div class="panel-heading" data-toggle="collapse" href="#collapseOne" style="cursor: pointer">
 				기본 정보
	 		</div>
	 		
	 		<div id="collapseOne" class="panel-collapse collapse in">
		 		
	 			<div class="panel-body">
					
	 				<!-- 내용 -->
	 				<div class="form-group">
						<label class="control-label col-sm-2" for="username"><em style="color: red">*</em> 작성자</label>
						<div class="controls col-sm-6">

							<?= $content[0]->["TITLE"]?>
							
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2" for="email"><em style="color: red">*</em> 제목</label>
						<div class="controls col-sm-6">
							<input type="text" class="form-control" name="email" value="<?=$content->TITLE ?>"/>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2" for="passwd"><em style="color: red">*</em> 내용</label>
						<div class="controls col-sm-6">
							<input type="text" class="form-control" name="passwd" value="<?=$content->CONTENT?>"/>
						</div>
					</div>
	 			</div>
	 		</div>
	 		
	 	</div>
	 		 	
	 	<div class="clearfix btnArea"></div>
	 	<div class="form-group">
	 		<button class="btn btn-white" type="button" onclick="$.back()">취소</button>
			<button class="btn btn-primary" type="button" onclick="$.submit()">완료</button>
		</div>
		</div>
	</form>		
</div>

<script>
$.submit = function(){
	alert("test1");
	App1000.postForm($('#submitForm'), function(response) {
		alert("test2");
		console.log(response);
		if (response.r == "ok") {
			alert(response.m);
			location.href = '/admin/admins/lists';
		}
	});
}

$.back = function(){
	location.href = '/index.php/member/board/';
}

$(document).ready(function(){

	
});
</script>