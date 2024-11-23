// JavaScript Document
// declare variables
var elList, addLink, newEl, newText, counter, listItems, textBox;
elList = document.getElementById('list');
addLink = document.getElementById('addToList');
counter = document.getElementById('counter');
textBox = document.getElementById('itemName')
console.log('declaring stuff');

function deleteItem (e) {
	console.log('in deleteItem')
	e.target.remove()
}

function addItem(e){
	console.log('in addItem');
	console.log(e)
	e.preventDefault();
	// get its value (what the user typed)
	var itemText = textBox.value
	// make a new list item
	newEl = document.createElement('div');
	// set it to the new value
	newText = document.createTextNode(itemText);
	newEl.classList.add('alert');
	newEl.classList.add('alert-info');
	newEl.appendChild(newText);
	newEl.addEventListener('click', deleteItem, false);
	newEl.id = itemText
	// put the list item in the page
	elList.appendChild(newEl);
	updateCount();
	textBox.value = ''
}

function updateCount () {
	console.log('in updateCount')
	// get the current count (which should just be old count + 1)
	listItems = elList.getElementsByTagName('div').length;
	// set the counter's content to the var you just declared
	counter.innerHTML=listItems;
}

addLink.addEventListener('click', addItem, false);