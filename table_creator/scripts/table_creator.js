function listCreator() {
    var ulHeader = document.getElementById("ulHeader").value;
        liAmount = parseInt(document.getElementById("liAmount").value); // convert string to number
    if (ulHeader == "" || liAmount == "") {
        alert("Please enter value for inputs");
    } else if (isNaN(liAmount)) {
        alert("Li items must be number");
    } else if (liAmount > 20) {
        alert("Max li items in your list is 20");
    } else {
        for (var i = 0; i < liAmount; i++) {
            var content = prompt("Please write your task: ");
            if (!content) {
                alert("This li item has no value so it can't be displayed on page");
            } else {
                //creating hidden input for passing prompt values to that input
                var hiddenInput = document.createElement("input");
                hiddenInput.name = "liValues[]";
                hiddenInput.value = content;
                hiddenInput.type = "hidden";
                document.getElementById('table_creator').appendChild(hiddenInput);
            }
        }

        function submitButton() {
            document.getElementById('table_creator').submit();
        }
        submitButton();

    }
}
