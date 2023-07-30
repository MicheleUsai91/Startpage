<?php
    $slash = str_contains(__DIR__, '/') ? '/' : '\\';
    $dir = str_replace('PHP', 'Modules', __DIR__);
    $modules = array_diff(scandir($dir), array('.', '..', '.git'));
    foreach($modules as $key=>$module) {
        $dirTemp = $dir . $slash . $module;
        if (!is_dir($dirTemp)) {
            unset($modules[$key]);
        }
    }
?>
<div>
    <button onclick='showAccordion("sidemenu")'>&#9776;</button>
</div>
<div class="side-menu" id='sidemenu' hidden>
    <form method='post'>
        <ul>
            <?php foreach($modules as $module) : ?>
                <li>
                    <button name='page' value=<?=strtolower($module)?> type='submit'><?=strtoupper($module)?></button>
                </li>
            <?php endforeach ?>
        </ul>
    </form>
</div>