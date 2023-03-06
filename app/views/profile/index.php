<div class='container d-flex flex-column align-items-center'>
  <h1>Profiles</h1>
  
  <?php foreach  ($data['profiles'] as $profile) { ?>
    <div class="card d-flex rounded-lg shadow p-4 mb-4 align-items-center hover-zoom" style='width: 25rem; gap:1rem;'>
      <img src="img.jpg" alt="John" style="width:100%">
      <h1><?php echo $profile['username'] ;?></h1>
     
      <div class='d-flex flex-row'>
      <p class="title"><?php echo $profile['descricao'] ;?>,&nbsp</p>
      <p><?php echo $profile['nascimento'] ;?></p>
     </div>
      
      <div class='d-flex flex-row'>
        <p><?php echo $profile['cidade'] ;?>,&nbsp</p>
        <p><?php echo $profile['estado'] ;?></p>
      </div>
      <?php echo var_dump($profile['arquivo']) ;?>
    </div>
        
   
  <?php } ?>
</div>

