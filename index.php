<html>
  <head>
    <title>password hash</title>
    <script src="https://raw.github.com/peterlindkvist/pwd-hash/master/passwd.js" />
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
    line-height:20px
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
      <a href='javascript:document.body.appendChild(document.createElement("script")).src="https://raw.github.com/peterlindkvist/pwd-hash/master/passwd.js";void(0);'>Genereate Password</a>
    </div>
  </body>
</html>
