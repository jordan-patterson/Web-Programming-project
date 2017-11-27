var greeting=document.getElementById("greeting");
var greetBar=document.getElementById("greeting-bar");
var submit=document.getElementById("submit");
function updateGreeting(){
	var hours = (new Date()).getHours();
	if(hours<12){
		greeting.innerHTML = "Good Morning!";
		greetBar.style.backgroundColor="#829903";
	}else if(hours>=12 && hours<17){
		greeting.innerHTML = "Good Afternoon!";
		greetBar.style.backgroundColor="#37754d";
		greetBar.style.backgroundColor="#f4b042";
	}else{
		greeting.innerHTML = "Good Evening!";
		greetBar.style.backgroundColor="#14a8ff";
	}
	submit.style.backgroundColor=greetBar.style.backgroundColor;
}
window.onload = updateGreeting;
var finalPrice=0;
function updateSelectedServices(){
	var selected=document.getElementById("selected");
	var plans=document.getElementById("plans");
	var priceField=document.getElementById("fprice");
	var plan=plans.options[plans.selectedIndex].value;
	var index=plans.selectedIndex;
	if(index==1){
		finalPrice+=12500;
	}else if(index==2){
		finalPrice+=17500;
	}else if(index==3){
		finalPrice+=25000;
	}else if(index==4){
		finalPrice+=40000;
	}else if(index==5){
		finalPrice+=5000;
	}
	if(index!=0){
		console.log(index);
		selected.value+="\n"+plan;
		priceField.value=finalPrice;
	}
}
document.getElementById("plans").onchange=updateSelectedServices;