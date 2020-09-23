function addButton(Title,Type,Data){
	var Tul= document.getElementById("title1");
	var Tyul=document.getElementById("type1");
	var Dul=document.getElementById("date1");
	var li= document.createElement("li");
	var li1= document.createElement("li");
	var li2= document.createElement("li");
	var Title_Node=createTextNode(Title);
	var Type_Node=createTextNode(Type);
	var Data_Node=createTextNode(Data);
	
	li.appendChild(Title_Node);
	Tul.appendChild(li);
	
	li1.appendChild(Type_Node);
	Tyul.appendChild(li1);
	
	li2.appendChild(Date_Node);
	Dul.appendChild(li2);
	
}