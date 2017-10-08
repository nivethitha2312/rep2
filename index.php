<!DOCTYPE html>
	<head>
		<title>Account</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" 
		href="bootstrap.min.css">
		<script src="jquery-2.1.4.min.js"></script>
		<script src="bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<h1 class="col-sm-offset-5">Account</h1>
			
			<form action="operation.php" name="demoForm" onsubmit="return validateForm()"
			class="form-horizontal  col-sm-offset-3" method="post">
				
				<div class="form-group">	
					<label class="control-label col-sm-4"
					for="advCompName">Name:</label>
					<div class="col-sm-3">
						<input type="text" class="form-control error" 
						name="advCompName" id="advCompName">
						<span name="warning" class="warning"></span>
					</div>
				</div>
				
				<div class="form-group">	
					<label class="control-label col-sm-4"
					for="advFname">Account No:</label>
					<div class="col-sm-3">
						<input type="text" class="form-control error" 
						name="advFname" id="advFname">
						<span name="warning" class="warning"></span>
					</div>
				</div>
				
				
				<div class="form-group">	
					<label class="control-label col-sm-4"
					for="phone">Phone:</label>
					<div class="col-sm-3">
						<input type="phone" class="form-control error" 
						name="phone" id="phone">
						<span name="warning" class="warning"></span>
					</div>
				</div>
				
				<div class="form-group">        
					<div class="col-sm-offset-4 col-sm-2">
					<button type="submit" 
					class="btn btn-success" name="Submit">
					Submit</button>
					</div>   
				</div>
				
			</form>
		</div>
	</body>
	
	<script>
		var len=document.forms.demoForm.length;
		flag=true;
		
		var validateForm=function(){
			for(var i=0;i<len-1;i++){
				if((document.forms.demoForm[i].tagName)!="BUTTON"){
					var a=document.forms.demoForm[i].value;
					
					if(a==""||a==null){
						document.getElementsByClassName("warning")[i].innerHTML="Field Required";
						document.getElementsByClassName("warning")[i].style.color="#C7092E";
						document.getElementsByClassName("error")[i].style.border="2px solid #C7092E";
						flag=false;					
					}
				}
			}
		return flag;
		}
		$('.error').on('focus',function(){
			$(this).css('border','1px solid #ccc');
			$(this).next('span').text("");
			
		});
	</script>
		
</html>
