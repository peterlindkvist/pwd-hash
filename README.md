#Domain specific password hash bookmarklet

Generates strong passwords based on hashes of the domain and a personal password. Makes it easy to use different strong passwords without the difficulties to remember all of them. The password is generated on the client. 

The principles are explanined in this paper http://crypto.stanford.edu/PwdHash/pwdhash.pdf. But this version uses a bookmarklet instead which is easier then plugins, and a stronger hash. 

##installation
Add this text as a bookmark:
    
    javascript:document.body.appendChild(document.createElement("script")).src="https://raw.github.com/peterlindkvist/pwd-hash/passwd.js";

###Most browsers:

Drag this link to the bookmark filed: [Generate password](javascript:("document.body.appendChild%28document.createElement%28%22script%22%29%29.src%3D%22https%3A//raw.github.com/peterlindkvist/pwd-hash/passwd.js");)

###Mobile safari:

1. Add this page as a bookmark 
2. Find the bookmarklet below that you want. Select and copy the javascript above. 
3. Go to your bookmarks and tap "edit". Then tap the new bookmark you just made of this page. 
4. Edit the name to generate password, or whathever, and paste the javascript in the field for the URL.
5. Done. 


