<? $this->layout('template', ['title' => 'Simple PHP framework']) ?>

<? $this->start('page') ?>
    <h1>Simple PHP Framework</h1>
    <h2>GREETINGS PROFESSOR <?= $name ?>.</h2>
    <h3>HOW ARE YOU FEELING TODAY?</h3>

    <h3>Characters:</h3>
    <ul>
        <? foreach ($characters as $character): ?>
            <li><?= $character ?></li>
        <? endforeach ?>
    </ul>
<? $this->stop() ?>