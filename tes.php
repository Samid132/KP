<!DOCTYPE html>
<html>
<head>
    <title>Show Password Example</title>
</head>
<body>
    <form>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="button" id="showPasswordButton">Show Password</button>
    </form>

    <script>
        const passwordInput = document.getElementById("password");
        const showPasswordButton = document.getElementById("showPasswordButton");

        showPasswordButton.addEventListener("click", function () {
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                showPasswordButton.textContent = "Hide Password";
            } else {
                passwordInput.type = "password";
                showPasswordButton.textContent = "Show Password";
            }
        });
    </script>
</body>
</html>
