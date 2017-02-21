function faqHashChange() {
	if (location.hash == '#panel1-label' || location.hash == '#panel2-label' || location.hash == '#panel3-label' || location.hash == '#panel4-label' || location.hash == '#panel5-label' || location.hash == '#panel6-label' || location.hash == '#panel7-label') {
		$(location.hash).trigger("click");
	}
}
faqHashChange();
$(window).on('hashchange',function(){
    faqHashChange();
});