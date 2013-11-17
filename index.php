<html>
  <head>
    <title>password hash</title>
    <style>
  body {
    background-color:#274d7e;
  }

  input {
    height:20px;
    width:130px;
    margin:2px;
    padding:4px;
    border:1px solid #ccc;
    border-radius:2px;
    font-size:15px;
    line-height:20px;
  }
  
  a {
    color:#222; 
  } 
    </style>
  </head>
  <body>
    <div>
      <input type="url"  autocomplete="off" placeholder="domain" id="__pwd_domain" value=""/>
      <input type="password" placeholder="enter password" id="__pwd_passwd" value=""/><br>
      <input type="password" placeholder="strong hash" id="__pwd_strong" value="" />
      <input type="password" placeholder="weaker hash" id="__pwd_weak" value="" />
    </div>
    <div>
      Copy this link to bookmaks: <a href='javascript:document.body.appendChild(document.createElement("script")).src="https://raw.github.com/peterlindkvist/pwd-hash/v1.0/passwd.js";void(0);'>Genereate Password</a>
    </div>
    <!-- can't link to raw github , must use rawgithub.com --> 
    <script type="text/javascript" src="https://rawgithub.com/peterlindkvist/pwd-hash/v1.0/passwd.js"></script>
  </body>
</html>
