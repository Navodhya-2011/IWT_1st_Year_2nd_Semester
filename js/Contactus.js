 let getInTouch=false;
 
 let toggleContact= function()
 {
	 let contact_Body=document.querySelector(".contact_body");
	 let input_Type=document.querySelectorAll(".contact_body input_type");
	 let control_bTn=document.querySelector(".get_in");
	 
	 contact_Body.style.height="0px";
	 
	 
	 if(getInTouch===false)
	 {
		 contact_Body.style.visibility="hidden";
		 control_bTn.style.opacity="1";
		 contact_Body.style.height="0px";
		 getInTouch=true; 
	 }
	 
	 else if(getInTouch===true)
	 {
		contact_Body.style.visibility="visible";
		 control_bTn.style.opacity="0.5";
		 contact_Body.style.height="633px";
		 
		 getInTouch=false;
	 }
 }
 
 