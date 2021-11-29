const headerElements = document.getElementsByClassName("xenial-header-element-button");
const dropZones = document.getElementsByClassName("col-wrapper");


console.log(headerElements);

let draggedElement = null;

[].forEach.call( headerElements, (headerElement) => {

	console.log(headerElement);

// headerElements.forEach( headerElement => {
	headerElement.addEventListener( 'dragstart', () => {
		draggedElement = headerElement;
		setTimeout(function(){
			headerElement.style.display = 'none';
		});
	} );
	headerElement.addEventListener( 'dragend', () => {
		setTimeout(function() {
			draggedElement.style.display = 'block';
			draggedElement = null;
		});
	} );
} );

function xenialHeaderElementDragstart(e) {
	setTimeout(() => {
		console.log('DragStart');
	}, 0);
	
}

function xenialHeaderElementDragend(e) {
	setTimeout(() => {
		console.log('DragEnd');
	}, 0);
}



[].forEach.call( dropZones, (dropZone) => {
// dropZones.forEach( dropZone => {
	dropZone.addEventListener('dragenter', xenialHeaderDropZoneDragenter)
    dropZone.addEventListener('dragover', xenialHeaderDropZoneDragover);
    dropZone.addEventListener('dragleave', xenialHeaderDropZoneDragleave);
    dropZone.addEventListener('drop', xenialHeaderDropZoneDrag);
} );


function xenialHeaderDropZoneDragenter(e) {
	e.preventDefault();
	console.log('DragEnter');
}

function xenialHeaderDropZoneDragover(e) {
	e.preventDefault();
	console.log('DragOver');
}

function xenialHeaderDropZoneDragleave(e) {
	e.preventDefault();
	console.log('DragLeave');
}

function xenialHeaderDropZoneDrag(e) {
	e.preventDefault();
	this.append(draggedElement);
}

// for ( let i = 0; i < headerElements.length; i++ ) {
// // headerElements.forEach( function( headerElement ) {
// 	const headerElement = headerElements[i];

// 	headerElement.addEventListener('dragstart', function() {
// 		draggedElement = headerElement;
// 		console.log(draggedElement);
// 		setTimeout(function(){
// 			headerElement.style.display = 'none';
// 		});
// 	});	

// 	headerElement.addEventListener('dragend', function() {
// 		setTimeout(function() {
// 			draggedElement.style.display = 'block';
// 			draggedElement = null;
// 		});
// 	});

// 	for ( let j = 0; j < dropZones.length; j++ ) {

// 		const dropZone = dropZones[j];
// 	// dropZones.foreach( function( dropZone ) {

// 		dropZone.addEventListener('dragover', function(e) {
// 			e.preventDefault();
// 		});

// 		dropZone.addEventListener('dragenter', function(e) {
// 			e.preventDefault();
// 		});

// 		dropZone.addEventListener('dragleave', function(e) {
// 			e.preventDefault();
// 		});

// 		dropZone.addEventListener('drop', function(e) {
// 			e.preventDefault();
// 			this.append(draggedElement);
// 		});
// 	};
// };