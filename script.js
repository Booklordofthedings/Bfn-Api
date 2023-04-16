//remove object of id Test from the dom
function RemoveChangelog() {
    var test = document.getElementById("Changelog");
    test.parentNode.removeChild(test);
}

//Retrieve data from the form and redirect to the page
function EditSelector(event) {
    event.preventDefault();
    var platform = document.getElementById("SearchSelector").value;
    platform = encodeURIComponent(encodeURIComponent(platform));
    var name = document.getElementById("SearchBar").value;
    name = encodeURIComponent(encodeURIComponent(name));
    window.location.href = "https://electric-sli.de/p/" + platform + "/" + name;
}