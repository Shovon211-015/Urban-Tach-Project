// Add House Details script for show Form
document.getElementById("loadForm").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent the default behavior of the hyperlink
    
    var contentDiv = document.getElementById("addForm"); //target of showing result
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                contentDiv.innerHTML = xhr.responseText;
            } else {
                console.error('Error: ' + xhr.status);
            }
        }
    };
    
    xhr.open('GET', 'form.php', true); // Replace 'yourWebpage.html' with the URL of the webpage you want to load
    xhr.send();
    
    // Clear previous content when clicked second time
    contentDiv.innerHTML = '';
});


// Edit House Details script for show Form
document.getElementById("loadFormEdit").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent the default behavior of the hyperlink
    
    var contentDiv = document.getElementById("addForm"); //target of showing result
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                contentDiv.innerHTML = xhr.responseText;
            } else {
                console.error('Error: ' + xhr.status);
            }
        }
    };
    
    xhr.open('GET', 'editForm.php', true); // Replace 'yourWebpage.html' with the URL of the webpage you want to load
    xhr.send();
    
    // Clear previous content when clicked second time
    contentDiv.innerHTML = '';
});

// Delet House Details script for show Form
document.getElementById("houseDelet").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent the default behavior of the hyperlink
    
    var contentDiv = document.getElementById("addForm"); //target of showing result
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                contentDiv.innerHTML = xhr.responseText;
            } else {
                console.error('Error: ' + xhr.status);
            }
        }
    };
    
    xhr.open('GET', 'deletVerification.php', true); // Replace 'yourWebpage.html' with the URL of the webpage you want to load
    xhr.send();
    
    // Clear previous content when clicked second time
    contentDiv.innerHTML = '';
});