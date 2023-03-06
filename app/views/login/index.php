<div class='container p-4'>
  <h1>Login</h1>

  <form  enctype="multipart/form-data" id='user' method="POST" style='display: flex; gap: 0.5rem; flex-direction: column; width: fit-content'>
   
    <label class="form-label">Username:</label>
    <input class="form-control" type="text" name='username' id='username'>

    <label class="form-label">Cidade:</label>
    <input class="form-control" type="text" name='cidade' id='cidade'>

    <label class="form-label">Estado:</label>
    <input class="form-control" type="text" name='estado' id='estado'>
    
    <label class="form-label">Descrição:</label>
    <input class="form-control" type="text" name='descricao' id='descricao'>

    <label class="form-label">Nascimento:</label>
    <input class="form-control" type="date" name='nascimento' id='nascimento'>

   
    <input class='btn bg-dark text-light mt-4' type='submit' onclick="submitForm()" value='Cadastrar'>
  </form>
</div>
