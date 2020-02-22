	function checkAns(form)
	{
		wrong="";
		var flag=0;
		for(i=1;i<=len;++i)
		{
			var ll = form["q"+i].length;
			var sel=-1;
			for(j=0;j<ll;++j)
			{
				if(form["q"+i][j].checked)
					sel=j;
			}
			if(Ans["q"+i]!=parseInt(sel)){
				wrong+="Q"+i+", ";
				flag++;
			}
		}
		wrong = wrong.substring(0,wrong.length-2);
		if(flag>1){
		if(wrong!="")
			alert(wrong +"  are wrong");
		else 
			alert("all ans are correct.")
		return false;
		}
		else {
		if(wrong!="")
			alert(wrong +"  is wrong");
		else 
			alert("all ans are correct.")
		return false;
		}
	}
