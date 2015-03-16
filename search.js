function send(search){
			$.post('search.php',{search:search},function(data){
				$('#data').html(data);
			});
			
		}
		
            $('#search').focusin(function(){
				if($('#search').val()==''){
						$('#data').html('type');
					}
					else {
					
				send($('#search').val());
				}
			}).keyup(function() {
                    send($('#search').val());
                });
        