 	$('#submitbtn').click(function(){
 		var c_data = [];
 		var fullname = $('#fullname').val();
 		var address = $('#address').val();
 		var email = $('#email').val();
 		var contact = $('#contact').val();
 		// c_data.push(fullname,address,email,contact);
 		// console.log(c_data);
			$.ajax({
			  type: "GET",
			  url: BASE_URL +'home/save_userinput',
			  data: {
					  	'fullname': fullname,
					  	'address': address,
					  	'email': email,
					  	'contact': contact,
			  },
			  success: function(response) {
			  	console.log(response);
			  	if (response) {
			  		$('#submitbtn').click(function(){
			  			console.log('show html');
			  		})
			  	}
			  	console.log("new");


	      //   	if(response){
	      // 		 	$('#form').hide();
		     //    		$( "#res" ).append(      
							// '<div style="color:#0000FF">'+
							//  '<h3> Form Submitted </h3>' +
							//  '<br>'+
							//  ' <input type="button" id="btnshow" name="show data" value="Show Data"  >'+
							//  ' <input type="button" id="showForm" name="showForm" value="User Form"  >'+
							// '</div>'	 
		     //    			);
		     //    		$('#btnshow').click(function(){		
		     //    			$('#show').append(
		     //    				'<table style="width:50%">' +
							// 		'<tr>'+	
							// 		   ' <th>Full Name</th>'+
							// 		    '<th>Addrdess</th>'+
							// 		    '<th>Email</th>'+
							// 		    '<th>Mobile</th>'+
							// 		    '<th>CURD</th>'+
							// 		'</tr>'+
							// 		'<tr>'+
							// 		    '<td id= "name">'+fullname+'</td>'+
							// 		    '<td id = "address">'+address+'<td>'+
							// 		    // '<td>'+email+'</td>'+
							// 		    '<td id = "contact">'+contact+'</td>'+
							// 		    // '<td>'+contact+'</td>'+
							// 			'<td>'+
							// 			'<input type="button"class="edit_button" id="edit" value="edit"> <br>'+ 
							// 		   '<input type="button" class="save_button" id="save" value="save">'+
							// 		   '<input type="button" class="delete_button" id="delete" value="delete">'+
							// 		    '</td>'+
							// 		'</tr>'+
							// 		'</table>'
		     //    				)
		     //    			})
		     //    		$('#showForm').click(function(){
		     //    			$('#form').show();
		     //    			$("#form").trigger('reset');
		     //    			$('#showForm').hide();
		     //    			$('#btnshow').hide();
		     //    			$('#res').hide();
		     //    			$('#show').hide();
		     //    		})

	      //   			}
	        		}
			  
				});	
			});
