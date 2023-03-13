<div class='container p-4'>
  <h1>Sign In</h1>
  
  <form id='signIn'method="POST" style='display: flex; gap: 0.5rem; flex-direction: column; width: fit-content'>
   
    <label class="form-label">Username:</label>
    <input class="form-control" type="text" name='username' id='username'>

    <label class="form-label">Senha:</label>
    <input class="form-control" type="password" name='password' id='password'>
   
    <input class='btn bg-dark text-light mt-4' type='submit' onclick="signInForm()"  value='Logar'>
  </form>
</div>