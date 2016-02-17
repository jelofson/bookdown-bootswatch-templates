<?php
/**
 * tobiju
 *
 * @link      https://github.com/tobiju/bookdown-bootswatch-templates for the canonical source repository
 * @copyright Copyright (c) 2015 Tobias Jüschke
 * @license   https://github.com/tobiju/bookdown-bootswatch-templates/blob/master/LICENSE.txt New BSD License
 */

use Bookdown\Bookdown\Content\IndexPage;
use Bookdown\Bookdown\Content\RootPage;

$prev = $this->page->getPrev();
$parent = $this->page->getParent();
$next = $this->page->getNext();

$col = '12';

if ($useSideMenu = !($this->page instanceof IndexPage || $this->page instanceof RootPage)){
    $col = '9';
}
?>
<header>
    <?= $this->render("nav"); ?>
</header>

<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?= $this->render("partialBreadcrumb"); ?>
            </div>
            <?php if ($useSideMenu) : ?>
            <div class="col-md-3">
                <?= $this->render("partialSideNav"); ?>
            </div>
            <?php endif; ?>
            <div class="col-md-<?= $col; ?>">
