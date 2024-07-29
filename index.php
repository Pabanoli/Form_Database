<!DOCTYPE html>
<head>
    <title>Form Submission</title>
    <style>
        #photoPreview {
            display: none;
            max-width: 10%;
            height: auto;
        }
        .eye-icon {
            cursor: pointer;
            position: absolute;
            right: 10px;
            top: 10px;
        }
        .password-container {
            position: relative;
            display: inline-block;
        }
    </style>
</head>
<body>
    <form id="userForm" action="confirmation.php" method="post" enctype="multipart/form-data">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required><br><br>
        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" nam e="lastname" required><br><br>
        <label for="password"required>Password:</label>
        <input type="password" id="password" name="password" required> 
         <span id="togglePassword" class="eye-icon">👁️</span><br><br>

        <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="male" required> Male
        <input type="radio" id="female" name="gender" value="female" required> Female<br><br> 
        <label for="nationality">Nationality:</label>
        <select id="nationality" name="nationality" required>
            <option value="Nepal">Nepal</option>
            <option value="India">India</option>+ 
            <option value="China">China</option>
            <option value="Nepal">Japan</option>
            <option value="India">Canada</option>
            <option value="China">Korea</option>
        </select><br><br>
        <label for="mobile">Mobile No (+977):</label>
        <input type="number" id="mobile" name="mobile" pattern="[0-9]{10}" placeholder="Enter 10 digits" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>       
        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea><br><br>
        <label for="photo">Photo:</label>
        <input type="file" id="photo" name="photo" accept="image/*" onchange="previewImage(event)" required><br><br>
        <img id="photoPreview" src="#" alt="Photo Preview"><br><br>       
        <button type="submit">Submit</button>
        <button type="reset" onclick="clearPreview()">Reset</button>
    </form>
    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('photoPreview');
                output.src = reader.result;
                output.style.display = 'block';
            };
            reader.readAsDataURL(event.target.files[0]);
        }
        function clearPreview() {
            var output = document.getElementById('photoPreview');
            output.src = '';
            output.style.display = 'none';
        }
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function (e) {
            // Toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // Toggle the eye icon
            this.textContent = type === 'password' ? '👁️' : '👁️‍🗨️';
        });
    </script>
</body>
</html>
