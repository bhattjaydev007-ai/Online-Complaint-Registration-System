const complaint = document.getElementById("complaint");
const count = document.getElementById("count");

complaint.addEventListener("input", function () {

    count.innerText =
        complaint.value.length + " / 500 characters";

});