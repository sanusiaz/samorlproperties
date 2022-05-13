// get all documents to add simpleBar Effects
document.querySelectorAll("#simple-bar").forEach(__element => {
	new SimpleBar(__element, { autoHide: false });
});

// document.querySelectorAll(".az_ldm_topCat__innerCont.glider").forEach(__element => {
// 	__element.style.overflow = 'auto';
// 	new SimpleBar(__element, { autoHide: false });
// });