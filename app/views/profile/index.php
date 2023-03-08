<div class='container d-flex flex-column align-items-center'>
  <h1>Profiles</h1>
  
  <?php foreach  ($data['profiles'] as $profile) { ?>
    <div class="card d-flex rounded-lg shadow p-4 mb-4 align-items-center hover-zoom" style='width: 25rem; gap:1rem;'>
      <img 
        src="<?php echo '../../app/images/'.$profile['arquivo']; ?>" 
        alt="John" 
        style="width:100px; height: 100px; border-radius:9999px; border: 1px solid; padding: 2px"
      >
      <h2><?php echo $profile['username'] ;?></h2>
     
      <div class='d-flex flex-row'>
      <p class="title"><?php echo $profile['descricao'] ;?>,&nbsp</p>
      <p><?php echo $profile['nascimento'] ;?></p>
     </div>
      
      <div class='d-flex flex-row'>
        <p><?php echo $profile['cidade'] ;?>,&nbsp</p>
        <p><?php echo $profile['estado'] ;?></p>
      </div>
    
    </div>

   
  <?php } ?>
</div>

