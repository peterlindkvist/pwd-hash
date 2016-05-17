#Password hash bookmarklet

Generates strong passwords based on hashes of the domain and a personal password. Makes it easy to use different strong passwords without the difficulties to remember all of them. The password is generated on the client. 

The principles are explanined in this paper http://crypto.stanford.edu/PwdHash/pwdhash.pdf. But this version uses a bookmarklet instead which is easier then plugins, and a stronger hash. 

##installation

Add this code as a bookmarklet, or just paste it into the location bar in the browser on if you want to test it: 
    
    javascript:document.body.appendChild(document.createElement("script")).src="https://raw.github.com/peterlindkvist/pwd-hash/master/passwd.js";void(0);
    
Due to some ssl restrictions, the code can not be runned in github.com    

###Mobile safari:

1. Add this page as a bookmark 
2. Copy the code above to the clipboard
3. Go to your bookmarks and tap "edit". Then tap the new bookmark you just made of this page. 
4. Edit the name to generate password, or whathever, and paste the javascript in the field for the URL.
5. Done. 

## Development

Use a web server and paste this to the browser

    data:text/html,<html><body><script type="text/javascript" src="http://localhost:3000/index.js"></script><br><br><input type="password"></body></html>



