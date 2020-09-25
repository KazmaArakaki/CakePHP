<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

    <?= $this->fetch('meta') ?>

    <?= $this->Html->css('https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css', [
      'integrity' => 'sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I',
      'crossorigin' => 'anonymous',
    ]) ?>

    <?= $this->fetch('css') ?>

    <title>
      <?= $pageTitle ?>
    </title>
  </head>

  <body>
    <header>
    </header>

    <main class="main">
      <div class="container">
        <?= $this->Flash->render() ?>

        <?= $this->fetch('content') ?>
      </div>
    </main>

    <footer>
    </footer>

    <?= $this->fetch('modal') ?>

    <?= $this->fetch('postLink') ?>

    <?= $this->Html->script('https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', [
      'integrity' => 'sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo',
      'crossorigin' => 'anonymous',
    ]) ?>

    <?= $this->Html->script('https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js', [
      'integrity' => 'sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/',
      'crossorigin' => 'anonymous',
    ]) ?>
 
    <?= $this->fetch('script') ?>
  </body>
</html>

