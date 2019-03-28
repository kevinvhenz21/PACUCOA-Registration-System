$(document).ready(function(){

	// ALL Data Tables

	//fetch student list
	fetch_student_list();
	function fetch_student_list(){
		$('#student-list').DataTable({
			//"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
			"ordering": false,
			"processing" : true,
			"language": {
            processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> '},
			"pagingType": "full_numbers",
			"serverSide" : true,
			"order" : [],
			"ajax" : {
			 url:"application/process/select/fetch_student_list.php",
			 type:"POST"
			}
		});
	}


// WALKIN REGISTRATION

	// $(document).on('click', '#btn-save-walkin', function(){
	// 	$('#alert-reg-success').css("display:block");
	// 	var saved = $(this).hide();
	// 	$('.saving').show('fade');

	// 	setTimeout(function(){
	// 		saved.show();
	// 		$('#alert-reg-success').animate({opacity: 100}, 100).show('slow');
	// 		$('.saving').hide();  
	// 	}, 500);

	// })

	// setTimeout(function()
	// 		{
	// 				$('#alert-reg-success').animate({opacity: 100}, 100).show('slow');
	// 				$('#alert-reg-danger').animate({opacity: 100}, 100).show('slow'); 
			
	// 		}, 500);

	// 		setTimeout(function()
	// 		{
	// 				$('#alert-reg-success').animate({opacity: 0}, 100).hide('slow');	
	// 				$('#alert-reg-danger').animate({opacity: 0}, 100).hide('slow');
	// 		}, 12500);
	// 		return false;	

	$("#btn-save-walkin").click(function(){
		 var salutation = $('.salutation')
	});


	$('.close').click(function(){
		$('.alert').animate({opacity: 0}, 100).hide('slow');	
	})


	//Salutation radio button on change (for salutation)
	$('#saluttextbox').click(function(){
		$('input[name=salutation]').attr("checked", false);
		$('#othersalutation').prop("checked", true);
	});

	$('.salutclass').click(function(){
		$('#saluttextbox').val("");
	});
		

	//Affixes radio button on change (for affix)
	$('#affixestbox').click(function(){
		$('input[name=affixes').prop("checked", false);
		$('#otheraffixrb').prop("checked", true);
	});

	$('.affixclass').click(function(){
		$('#affixestbox').val("");
	});

}); //-----End document.ready function
