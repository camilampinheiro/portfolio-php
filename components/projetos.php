<?php
  $projetos = [
  [
    "titulo" => "Meu Portfolio", 
    "finalizado" => true, 
    "ano" => 2025,
    "descricao" => "Meu primeiro projeto. Escrito em PHP e HTML. Portfolio pessoal para mostrar meus projetos e habilidades.",
    "stack" => ["PHP", "HTML", "CSS"],
    "img" => "./assets/imagePortfolio.png",
    "link" => "https://github.com/camilampinheiro/portfolio-php",
  ],
  [
    "titulo" => "Esports NLW", 
    "finalizado" => true, 
    "ano" => 2025,
    "descricao" => "Esports NLW perguntas sobre valorant, lol e csgo",
    "stack" => ["HTML", "CSS", "JS"],
    "img" => "./assets/imageNLW.png",
    "link" => "https://github.com/camilampinheiro/nlw-iniciante",
  ],
];
?>

<?php foreach ($projetos as $projeto): ?>

<div class="bg-slate-800 rounded-lg p-3 flex items-center space-x-3">
  <div class="w-1/5 flex items-center justify-center">
    <a href="<?=$projeto['link']?>" target="_blank">
      <img src="<?= $projeto['img'];?>" class="h-30 rounded-md">
    </a>
  </div>

  <div class="w-4/5 space-y-3">
    <div class="flex gap-3 justify-between">
      <h3 class="font-semibold text-xl">
        <?php if($projeto['finalizado']): ?> ✅ <?php endif; ?>
        <a href="<?=$projeto['link']?>" target="_blank"><?=$projeto['titulo']?></a>
        <?php if($projeto['finalizado']): ?> 
          <span class="text-sm text-gray-400 opacity-50 italic">(finalizado em <?=$projeto['ano'];?>)</span> 
        <?php else: ?>
          <span class="text-sm text-gray-400 opacity-50 italic">(em desenvolvimento)</span> 
        <?php endif; ?>
      </h3>
        
      <div class="space-x-3">
        <?php 
          $colors = ["fuchsia", "lime", "sky", "rose", "amber", "teal", "purple"];
          foreach ($projeto['stack'] as $posicao => $language): 
        ?>
          <span class="bg-<?=$colors[$posicao]?>-400 text-<?=$colors[$posicao]?>-900 rounded-md px-2 py-1 font-semibold text-xs ">
            <?=$language?>
          </span>
        <?php endforeach; ?>
      </div>
    </div>

    <p class="leading-6">
      <?=$projeto['descricao'];?>
    </p>
  </div>
</div>

<?php endforeach; ?>