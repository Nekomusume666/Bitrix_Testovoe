<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="faq-list">
    <?php if (!empty($arResult["ITEMS"])): ?>
        <?php foreach ($arResult["ITEMS"] as $item): ?>
            <div class="faq-item">
                <h3><?= htmlspecialchars($item["NAME"]) ?></h3>
                <p><?= nl2br(htmlspecialchars($item["PREVIEW_TEXT"])) ?></p>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Нет вопросов для отображения.</p>
    <?php endif; ?>
</div>
