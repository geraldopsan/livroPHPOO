<html>
<body>
  <form name="myform" method="post" action="form_gravar.php"´enctype="multipart/form-data">
    <table border="1" width="400px" bgcolor="whiteSmoke" style="border-collapse:collapse">

      <tr>
        <td valign="top" width="200px"><b><font face="Arial">Nome</font></b></td>
        <td> <input maxlength="40" name="nome" value="Pablo Dall Oglio" type="text" size="14"></td>
      </tr>

      <tr>
        <td valign="top" width="140px"><b><font face="Arial">Senha</font></b></td>
        <td> <input name="senha" value="1234" type="password" size="14"></td>
      </tr>

      <tr>
        <td valign="top" width="140px"><b><font face="Arial">Sexo</font></b></td>
        <td>
          <input maxlength="40" name="sexo" value="M" type="radio" checked="1">Masculino</input><br>
          <input maxlength="40" name="sexo" value="F" type="radio">Femenino</input><br>
        </td>
      </tr>

      <tr>
        <td valign="top" width="140px"><b><font face="Arial">Religiao</font></b></td>
        <td>
          <select name="religiao">
            <option value="0">Clique Aqui</option>
            <option value="C">Catolica</option>
            <option value="E">Evangelica</option>
            <option value="U">Universal</option>
          </select>
        </td>
      </tr>

      <tr>
        <td valign="top" width="140px"><b><font face="Arial">Idiomas</font></b></td>
        <td>
          <input  name="idiomas[]" value="E" type="checkbox">Ingles</input><br>
          <input  name="idiomas[]" value="S" type="checkbox">Espanhol</input><br>
          <input  name="idiomas[]" value="I" type="checkbox">Italiano</input><br>
          <input  name="idiomas[]" value="F" type="checkbox">Frances</input><br>
        </td>
      </tr>

      <tr>
        <td valign="top" width="140px"><b><font face="Arial">Estilo</font></b></td>
        <td>
          <select name="estilo[]" multiple>
            <option value="C">Classico</option>
            <option value="T">Contemporaneo</option>
            <option value="A">Alternativo</option>
            <option value="E">Elegante</option>
          </select>
        </td>
      </tr>

      <tr>
        <td valign="top" width="140px"><b><font face="Arial">Fotografia</font></b></td>
        <td><input type="file" name="fotografia"></td>
      </tr>

      <tr>
        <td valign="top" width="140px"><b><font face="Arial">Curriculo</font></b></td>
        <td>
          <textarea name="curriculo" rows="4" cols="40">Digite seu curriculo aqui</textarea>
        </td>
      </tr>
    </table>
    <input type="submit" value="gravar">
    <input type="reset" value="limpar">
    <input type="button" value="botao" onclick="alert('teste123')">
  </form>
</body>
</html>
