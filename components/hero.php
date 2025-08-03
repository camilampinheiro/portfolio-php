<?php
  $items = [
    ["href" => "https://www.instagram.com/camilampinheiro_/", "logo" => "logo-instagram"],
    ["href" => "https://github.com/camilampinheiro", "logo" => "logo-github"],
    ["href" => "https://www.linkedin.com/in/camila-martins-64527a269/", "logo" => "logo-linkedin"],
    ["href" => "#", "logo" => "logo-youtube"],
  ]
?>

<section class="flex gap-x-3">
  <div class="w-2/3">
    <h1 class="text-3xl font-bold">Oi, meu nome é Camila!</h1>
    <p class="text-xl leading-6 mt-6">
      Falando um pouco sobre mim, sou uma desenvolvedora web apaixonada por criar soluções inovadoras e funcionais.
      Tenho experiência em HTML, CSS, JavaScript e estou sempre aprendendo novas tecnologias para aprimorar minhas habilidades.
    </p>

    <ul class="flex gap-x-6 mt-6 text-2xl">
      <?php foreach ($items as $item): ?>
        <li><a href="<?=$item['href']?>" target="_blank"><ion-icon name="<?=$item['logo']?>" class="hover:animate-bounce"></ion-icon></a></li>
      <?php endforeach; ?>
    </ul>
  </div>

  <div class="w-1/3 flex items-center justify-center">
    <img src="./assets/image.png" alt="" class="rounded-full w-48 h-48 object-cover">
  </div>
</section>