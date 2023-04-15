//remove object of id Test from the dom
function RemoveChangelog() {
    var test = document.getElementById("Changelog");
    test.parentNode.removeChild(test);
}

//Edit the bootstrap selector text on select
function EditSelector(event) {
    var selector = document.getElementById("SearchDropdown);
    selector.innerHTML = event.target.innerHTML;
}