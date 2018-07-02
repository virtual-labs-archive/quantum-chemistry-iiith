	function checkAns(form)
	{
		wrong="";
		var flag=0;
		var a=0;
		var b=0;
		var c=0;
		for(i=1;i<=len;++i)
		{
			var ll = form["q"+i].length;
			var sel=-1;
			for(j=0;j<ll;++j)
			{
				if(form["q"+i][j].checked){
					
					sel=j;
					a++;
					if(Ans["q"+i]!=parseInt(sel)){
			
				 wrong+="Q"+i+", ";
				   flag++;}
				  else if(Ans["q"+i]==parseInt(sel)){
			
		
				   c++;}
				}

				
				/*else if(!form["q"+i][j].checked){
					b++;
					}*/
				}
		}


		wrong = wrong.substring(0,wrong.length-2);
		if(flag>=1){
		if(wrong!="")
			alert(wrong +"  are wrong");
		else 
			alert("all ans are correct.")
		return false;
		}
		else {
		if(a===0)
			alert("Please attempt atleast one question");
		if(c===len)
			{alert('All Answers are correct');}
		/*else
			alert("all ans are correct.");*/
		return false;
	}
		
		}
	
