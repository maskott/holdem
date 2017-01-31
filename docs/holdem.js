window.onload = function(){ //Wait for the page to load.
    var inputs = document.getElementsByTagName('input');
    for(var i=0,l=inputs.length;i<l;i++){ 
        input = inputs[i];
        if(input.name && input.name=='action'){ 
            input.onclick = function(){ 
                takeAction(this);
            }
        }
    }
};
 
function takeAction(){
	var button = document.getElementById('action');
	if(button.value == "Flop"){
		button.value = "Turn";
		revealCard('c1');
		revealCard('c2');
		revealCard('c3');
		return true;
	}
	if(button.value == "Turn"){
		button.value = "River";
		revealCard('c4');
		return true;
	}
	if(button.value == "River"){
		button.value = "Reveal";
		revealCard('c5');
		return true;
	}
	if(button.value == "Reveal"){
		button.value = "Redeal";
		revealCard('o1');
		revealCard('o2');
		return true;
	}
	if(button.value == "Redeal"){
		location.reload();
		return true;
	}
}

function revealCard(card){
	var cardClass = document.getElementById(card).className;
	newCardClass = cardClass.substring(3, cardClass.length);
	document.getElementById(card).setAttribute("class", newCardClass);
	return true;
}
