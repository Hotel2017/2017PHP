$(function(){  
			$("input[type='time'][value='now']").each(function(){    
			var d = new Date(),        
				h = d.getHours(),
				m = d.getMinutes();
				
				if(m+45>60)
				{
					h=h+1;
					var t=60-m;
					m=45-t;
				}
				else{
					m=m+45;
				}
		
			$(this).attr({
							"value": h + ":" + m
					});
			});
			
		});