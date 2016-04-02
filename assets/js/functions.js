function verify() {
    if (document.getElementById("username").value === "" || document.getElementById("password").value === "") {
        alert('Please enter a username and password');
    } else {
        alert('Success!');
        $.ajax({
            url: "components/login.php",
            type: "POST"
        })
    }
}