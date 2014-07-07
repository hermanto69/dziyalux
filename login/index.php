<style type="text/css">
form{margin:100px 0 0 0;}
table{text-align:center; border-collapse:collapse; border:#09F 1px solid; font-family:calibri;}
#judul{background-color:#09F; color:#FFF;font-size:18px;}
input[name]{height:30px; padding:0;}
#button{background-color:#09F; border:#F90 1px solid; color:#FFF; height:30px; width:100px; margin:5px;}
#button:hover{background-color:#0CF;}
</style>



  <form id="form1" name="form1" method="post" action="ver.php">
    <table width="244" border="0" align="center">
      <tr>
        <td width="236" align="center" id="judul">Silahkan Masukan Username dan Password Anda.. !!!</td>
      </tr>
      <tr>
        <td>Username</td>
      </tr>
      <tr>
        <td><input name="username" type="text" id="username" size="35" /></td>
      </tr>
      <tr>
        <td>Password</td>
      </tr>
      <tr>
        <td><input name="password" type="password" id="password" size="35" /></td>
      </tr>
      <tr>
        <td><input type="submit" name="button" id="button" value="Masuk" /></td>
      </tr>
    </table>
  </form>

