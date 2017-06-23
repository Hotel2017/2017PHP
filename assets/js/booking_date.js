
		function padLeft(str){
			if(parseInt(str)<10){
				return "0"+str;
			}else{
				return str;
			}
		}
		function DateAdd21Day(thisDate,days)
		{
			var t1 = days*24*60*60*1000;//21天的毫秒

			var t2 = Date.parse(thisDate);

			var myTime = new Date();

			myTime.setTime(t1 + t2);

			return myTime.getFullYear()+ "-" + padLeft((myTime.getMonth()+1)) + "-" + padLeft(myTime.getDate());
		}
		function inputDate(){
			//alert(DateAdd21Day(document.getElementById("inDate").value,document.getElementById("day").value));
			// alert(document.getElementById("outDate").value);
			document.getElementById("outDate").value = DateAdd21Day(document.getElementById("inDate").value,document.getElementById("day").value);
		}

