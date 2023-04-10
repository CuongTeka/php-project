function buy(){
	window.open("buy.html", "_self");
	}
function log(){
	window.open("login.php", "_self");
	}
function reg(){
	window.open("register.php", "_self");
	}	



	let myButton = document.getElementById("button-to-top");
	window.onscroll = function(){
	scrollFunction();
	};
	
	function scrollFunction()
	{
	if( document.body.scrollTop > 20 || document.documentElement.scrollTop > 20 )
		{
			myButton.style.display = "block";
		}
	else
		{
			myButton.style.display = "none";
		}
	}
	
	myButton.addEventListener("click", backToTop);
	
	function backToTop()
	{
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}



	
	




























	