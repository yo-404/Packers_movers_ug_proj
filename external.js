//Function to change the item count and its container background
//It has 2 parameters, value is the value of the button, + or -
//item is the id of the container and item-qty is the id of the input field to be updated.

function changeItemCount(value, item)
{
	var count = parseInt(document.getElementById(item + "-qty").value);
	if(value === "+")
	{
		count = count + 1;
		document.getElementById(item + "-qty").value = count.toString();
		document.getElementById(item).style.background = "pink";
	}
	else if(value === "-")
	{
		if(count > 0)
		{
			count = count-1;
			document.getElementById(item + "-qty").value = count.toString();
			if(count == 0)
			{
				document.getElementById(item).style.background = "white";
			}
		}
	}
}
