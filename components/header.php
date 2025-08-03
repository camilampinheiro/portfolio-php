<?php
  $items = [
    ["href" => "#projetos", "texto" => "Projetos"],
    ["href" => "https://github.com/camilampinheiro", "texto" => "Github"],
    ["href" => "https://www.linkedin.com/in/camila-martins-64527a269/", "texto" => "LinkedIn"],
    ["href" => "https://www.instagram.com/camilampinheiro_/", "texto" => "Instagram"],
  ]
?>

<header class="mx-auto max-w-screen-lg px-3 py-6 flex justify-between items-center">
  <div class="font-bold text-xl text-cyan-600">
    Meu Portfolio
  </div>

  <div class="">
    <ul class="flex gap-x-3 font-medium">
      <?php foreach ($items as $item): ?>
        <li><a href="<?=$item['href']?>" class="hover:underline" target="_blank"><?=$item['texto']?></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
</header>